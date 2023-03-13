import './bootstrap';

import {createApp} from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import HomePage from './components/HomePage.vue';
// import NavigationPagePage from './components/NavigationPage.vue';
import PropertiesIndex from './components/Properties/index.vue'
import App from './Layouts/App.vue'

const routes = [
    { path: '/', component: HomePage, name: 'HomePage' },
    { path: '/properties', component: PropertiesIndex, name: 'Properties.index' }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

// Working now
const app = createApp(App)
app.use(router)
app.mount('#app')



