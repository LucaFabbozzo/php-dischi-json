const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: "server.php",
      dischi: [],
      imgAlbum:
        "https://upload.wikimedia.org/wikipedia/en/8/80/TheOffspringSmashalbumcover.jpg",
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
    addDischi() {
      const data = {
        discoImg: this.imgAlbum
      }
      axios.post(this.apiUrl, data, {
        header: {'Content-Type': 'multipart/form-data'}
      })
        .then(result => {
          this.imgAlbum = '';
          this.dischi = result.data;
      })
    },
    removeDischi(index) {
      const data = new FormData();
      data.append("removeDischi", index);
      
      axios.post(this.apiUrl, data).then((result) => {
      this.dischi = result.data;
     });
    },
    openCard(index) {
      const data = new FormData();
      data.append('openCard', index);

      axios.post(this.apiUrl, data)
        .then(result => {
        this.dischi = result.data;
      })
    }
  },
  mounted() {
    this.getDischi();
  },
}).mount("#app");
