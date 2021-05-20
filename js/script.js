var app = new Vue({
    el: '#root',
    data: {
        cds: [],
        selectedGenre: ''
    },
    methods: {
        getCds() {
            axios
                .get('http://localhost:8888/php-ajax-dischi/server.php', {
                    params: {
                        genre: this.selectedGenre
                    }
                })
                .then((response) => {
                    this.cds = response.data;
                });
        }
    },
    mounted() {
        this.getCds();
    }
})