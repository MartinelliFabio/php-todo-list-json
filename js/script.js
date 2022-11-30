const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            newTask: '',
            list: [],
            
        }
    },
    methods: {
        send() {
            axios.post('server.php', {'todo': this.newTask}, {headers: {'Content-Type': 'multipart/form-data'}}).then((response) => {
                this.list.unshift(response.data);
            });
        },
        getList() {
            axios.get('server.php').then((res) => {
                this.list = [...res.data];
            })
        }
    },
    mounted() {
        this.getList()
    }
}).mount('#app');