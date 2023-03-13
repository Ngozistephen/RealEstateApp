import './bootstrap';

import {createApp} from 'vue'
import HomePage from './components/HomePage.vue';
import App from './Layouts/App.vue'



// Working now
const app = createApp({})
app.component('home-page', HomePage)
app.component('App', App)
app.mount('#app')



