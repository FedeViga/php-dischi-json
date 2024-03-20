const { createApp } = Vue;

createApp({
    data() {
        return {
            dischiList: [],
        }
    },

    methods: {

        
    },

    mounted() {
        axios.get('./server.php').then(result => {
            console.log(result)
            this.dischiList = result.data;
            console.log('dischi:', this.dischiList);
        })
    },

}).mount('#app');