const root = new Vue(
    {
        el: '#root',

        data:{
            selected: "",
            listaAlbum: [],
            listaGeneri: [],
            api: "http://localhost/php-ajax-dischi/server.php",
        },
        computed: {
            listaAlbumFiltrati(){
                if(this.selected == ""){
                    return this.listaAlbum;
                }else {
                    return this.listaAlbum.filter((elemento) =>{
                        return elemento.genre == this.selected; 
                    });
                } 
           },
          },
        methods:{
            getAlbum(){
              axios.get(this.api)
                .then((response) => {
                    //popolamento dell'array listaAlbum
                    this.listaAlbum = response.data.response;
                    
                    //popolamento dell'array listaGeneri
                    this.listaAlbum.forEach((album) => {
                        if(!this.listaGeneri.includes(album.genre)){
                            this.listaGeneri.push(album.genre);
                        }
                    });
                });
            },

        },
        created(){
            this.getAlbum();
        }
        
    }    
);