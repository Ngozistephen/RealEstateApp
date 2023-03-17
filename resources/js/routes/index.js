import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '../components/HomePage.vue';
// import NavigationPagePage from './components/NavigationPage.vue';
import PropertiesIndex from '../components/Properties/index.vue'


const routes = [
    {
         path: '/', 
         name: 'HomePage', 
         component: HomePage
    },
    { 
        path: '/properties', 
        name: 'Properties.index', 
        component: PropertiesIndex 
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})