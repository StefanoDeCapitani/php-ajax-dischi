Vue.config.devtools = true;

document.addEventListener("DOMContentLoaded", function () {
  const vm = new Vue({
    el: "#app",
    data: {
      disks: [],
      apiUrl: "http://localhost:8888/php-ajax-dischi/api/disks.php",
      inputFilter: "",
    },
    mounted() {
      this.callApi(this.apiUrl);
    },
    methods: {
      callApi(url) {
        axios.get(url).then((resp) => {
          this.disks = resp.data;
        });
      },
      getFilteredDisks() {
        let url = this.apiUrl + "?genre=" + this.inputFilter;
        this.callApi(url);
      },
    },
  });
});
