createApp({
    data() {
      return {
        dischi: [],
      };
    },
    created(){
        axios.get('localhost/php-dischi-json/api.php')
        .then((res) =>{
            console.log(res.data);
        })
    }
  }).mount('#app');