const root = new Vue(
    {
        el: '#root',

        data:{
            listaAlbum: [],
            api: "http://localhost/php-ajax-dischi/server.php",
        },
        methods:{
            getAlbum(){
              axios.get(this.api)
                .then((response) => {
                    //popolamento dell'array listaAlbum
                    this.listaAlbum = response.data.response;
                    this.loadingInProgress = false;
                });
            }, 
        },
        created(){
            this.getAlbum();
        }
        
    }    
);