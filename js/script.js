const {createApp} = Vue;

const app = createApp({
    data(){
        return{
            provaMessage: 'Ciao'
        }
    }
})
app.mount('#app');