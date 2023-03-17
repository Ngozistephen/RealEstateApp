import axios from 'axios'
import {ref} from 'vue'


export default function useProperty_types(){

    const property_types = ref({})

    const getProperty_types = async () => {
        axios.get('/api/property_types')
            .then(response => {
                property_types.value = response.data.data;     
            })
    }

    return { property_types , getProperty_types }
}