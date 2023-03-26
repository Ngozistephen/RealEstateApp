import axios from 'axios'
import {ref} from 'vue'


export default function useAgents(){

    const agents = ref({})

    const getAgents = async (
        page = 1, 
        // search_agent = '',
        search_category = ''
        
    ) => {

        axios.get('/api/agents?page=' + page + 
            // '&search_agent=' + search_agent +
            '&search_category=' + search_category
            )
            .then(response => {
                agents.value = response.data;     
            })
    }

    return { agents, getAgents }
}