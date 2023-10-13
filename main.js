const { createApp } = Vue
createApp({
    data() {
        return {

            /* collego i due server */
            //base_url: 'http://127.0.0.1:5173/server.php',
            base_url: 'server.php',
            songinfo: []

        }
    },

    methods: {
        fetchData(url) {
            axios
                .get(url)
            then(response => {

            })
        }

    },
    mounted() {

        this.fetchData(this.base_url);

    }
}).mount('#app')