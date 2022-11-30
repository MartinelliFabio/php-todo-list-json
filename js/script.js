const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            newTask: '',
            list: ['prova1', 'prova2']
        }
    },
    methods: {
        send() {
            axios.post('server.php', {'todo': this.newTask}, {headers: {'Content-Type': 'multipart/form-data'}}).then((response) => {
                this.list.unshift(response.data);
            });
        }
    },
}).mount('#app');