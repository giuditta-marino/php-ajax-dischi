Vue.config.devtools = true;

var app = new Vue({
  el: '#root',
  data:{
    selectedGenre: "all",
    disks: [],
    selectedDisks: []
  },

  mounted(){
    console.log('ciao'),

    this.showdisks()
  },

  methods: {
    showdisks: function(){
      axios.get('http://localhost/php-ajax-dischi/dati.php')
        .then((response) => {
          console.log(response);
          this.disks = response.data;
          this.selectedDisks = this.disks;
          console.log(this.disks);
        });
    },

    // onChange(event) {
    //   console.log(event.target);
    //   console.log(event.target.value);
    //
    //   let selected = event.target.value.toLowerCase();
    //
    //   if (selected == "all") {
    //     console.log(selected);
    //     this.selectedDisks = this.disks;
    //     console.log(this.selectedDisks)
    //
    //   } else {
    //     console.log(this.disks);
    //     console.log(selected);
    //     console.log(this.selectedDisks);
    //     this.selectedDisks = [];
    //     console.log(this.selectedDisks);
    //     this.selectedDisks = this.disks.filter((disk, index) => {
    //       return disk.genre.toLowerCase() == selected;
    //     })
    //     console.log(this.selectedDisks);
    //   }

    // }

  }



})
