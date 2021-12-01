Vue.config.devtools = true;

document.addEventListener("DOMContentLoaded", function () {
  const vm = new Vue({
    el: "#app",
    data: {
      disks: [],
    },
    mounted() {
      axios
        .get("http://localhost:8888/php-ajax-dischi/api/disks.php")
        .then((resp) => {
          this.disks = resp.data;
        });
    },
  });
});
