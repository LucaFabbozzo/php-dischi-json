const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      dischi: [],
      singleDisc: {},
      showDiscDetail: false
    };
  },
  methods:{
    getDischi() {
      axios.get(this.apiUrl)
        .then(result => {
          console.log(result);
          this.dischi = result.data;
      })
    },
    openDetails(index) {
      const params = {
        discIndex: index
      }

      axios.get(this.apiUrl, { params })
        .then(result => {
          this.showDiscDetail = true;
          this.singleDisc = result.data;
        })
    }
  },
  mounted() {
    this.getDischi();
  },
}).mount("#app");
