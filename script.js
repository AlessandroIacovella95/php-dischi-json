const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],
    };
  },

  mounted() {
    axios.get("./server.php").then((response) => {
      this.dischi = response.data;
    });
  },
}).mount("#app");
