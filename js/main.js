const app = new Vue({
  el: "#app",
  data: {
    albums: [],
    genres: [],
    genreToSearch: "all",
    discsData: [],
    apiUrl: "http://localhost/php-ajax-dischi/api.php",
  },
  methods: {
    getDataAPI() {
      axios
        .get(this.apiUrl, {
          params: {
            genre: this.genreToSearch,
          },
        })
        .then((resp) => {
          this.discsData = resp.data.discs;
          this.genres = resp.data.genres;
        })
        .catch((err) => {
          console.log("err:", err);
        });
    },
  },
  created() {
    this.getDataAPI();
  },
});
