<?php 
  require_once __DIR__ . '/data/db.php';


/* array generi inizializzato */
$genres = [];
/* variabile dischi con tutto il database, oppure vuoto, da riempire successivamente in base al genere */
$discs = empty($_GET["genre"]) || $_GET["genre"] === 'all' ? $database : [];

foreach($database as $disc){
  if(!in_array($disc['genre'], $genres)){
    $genres[] = $disc["genre"];
  }
}

if (count($discs) === 0){

  foreach($database as $disc){
    if (($disc['genre']) === $_GET["genre"]){
      $discs[] = $disc;
    }
  }

}

$response = [
  'discs' => $discs,
  'genres' => $genres
];




  header('Content-Type: application/json');
  echo json_encode($response);
?>

