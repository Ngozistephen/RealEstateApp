import axios from 'axios'
import {ref} from 'vue'


export default function useAgents(){

    const agents = ref({})

    const getAgents = async (page = 1) => {
        axios.get('/api/agents?page=' + page)
            .then(response => {
                agents.value = response.data;     
            })
    }

    return { agents, getAgents }
}