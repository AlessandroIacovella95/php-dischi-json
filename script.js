const { createApp } = Vue;

createApp({
  data() {
    return {
      dischi: [],
    };
  },
  methods: {
    getDisks() {
      axios.get("./server.php").then((response) => {
        this.dischi = response.data;
      });
    },
  },
  mounted() {
    this.getDisks();
  },
}).mount("#app");
