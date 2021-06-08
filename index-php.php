<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index - PHP</title>
  <link rel="stylesheet" href="styles/style.css" type="text/css">
  <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
  />
</head>
<body>

  <header>
    <img src="img/logo-spotify.png" alt="spotify-logo">
  </header>

  <?php 
  require_once __DIR__ . '/data/db.php';
  /* var_dump($database); */
  ?>

  <main>
    <div class="discs-container">

      <?php   foreach($database as $disc){  ?>
      
      <div class="disc">
        <img src="<?php echo $disc["poster"] ?>" alt="">
        <h2> <?php echo $disc["title"]?> </h2>
        <p> <?php echo $disc["year"]?> </p>
      </div>  


      <?php   }  ?>

    </div>
  </main>

  

  
</body>
</html>