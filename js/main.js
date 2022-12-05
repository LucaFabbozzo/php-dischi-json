const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      dischi: []
    };
  },
  methods:{
    getDischi() {
      axios.get(this.apiUrl)
        .then(result => {
          console.log(result);
          dischi = result.data;
      })
    }
  },
  mounted() {
    this.getDischi();
  },
}).mount("#app");
