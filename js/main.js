const app = new Vue({
  el: "#app",
  data: {
    discsData: [],
  },
  mounted() {
    axios
      .get("http://localhost/php-ajax-dischi/api.php")
      .then((resp) => {
        this.discsData = resp.data;
        console.log("Dati:");
        console.log(this.discsData);
      })
      .catch((err) => {
        console.log("err:", err);
      });
  },
});
