import axios from 'axios'
import {ref} from 'vue'


export default function useAgents(){

    const agents = ref({})

    const getAgents = async () => {
        axios.get('/api/agents')
            .then(response => {
                agents.value = response.data.data;     
            })
    }

    return { agents, getAgents }
}