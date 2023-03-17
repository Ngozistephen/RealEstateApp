import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '../components/HomePage.vue';
// import NavigationPagePage from './components/NavigationPage.vue';
import PropertiesIndex from '../components/Properties/index.vue'
import AgentsIndex from '../components/Agents/index.vue'


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
    },
    { 
        path: '/agents', 
        name: 'Agents.index', 
        component: AgentsIndex 
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})