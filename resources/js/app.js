import './bootstrap';
import {createApp} from 'vue';
import App from './Layouts/App.vue';
import router from './routes/index';



// Working now
const app = createApp(App)
app.use(router)
app.mount('#app')



