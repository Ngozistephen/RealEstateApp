import './bootstrap';

import {createApp} from 'vue'
import HomePage from './components/HomePage.vue';



// Working now
const app = createApp({})
app.component('home-page', HomePage)
app.mount('#app')



