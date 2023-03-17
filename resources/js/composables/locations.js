import axios from 'axios'
import {ref} from 'vue'


export default function useLocations(){

    const locations = ref({})

    const getLocations = async () => {
        axios.get('/api/locations')
            .then(response => {
                locations.value = response.data.data;     
            })
    }

    return { locations, getLocations }
}