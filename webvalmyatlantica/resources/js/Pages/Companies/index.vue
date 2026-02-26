<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, router } from '@inertiajs/vue3';

import { ref, watch } from 'vue';

import debounce from 'lodash/debounce';


// Esto recibe los datos del controlador
const props = defineProps({
    companies: Array,
    filters: Object
});


const search = ref( props.filters.search|| ''); 

watch(search, debounce((value) => {
    router.get('/companies',
        {search: value},
        {preserveState: true, replace: true}
    )
}, 300));

</script>

<template>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>NIF</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="company in companies" :key="company.id">
                <td>{{company.name}}</td>
                <td>{{company.nif}}</td>
                <td>{{company.city}}</td>
            </tr>
        </tbody>
    </table>

    <div class="mb-6">
        <input 
            type="text" 
            v-model="search" 
            placeholder="Buscar por nombre o NIF..." 
            class="w-full md:w-1/3 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
        />
    </div>

</template>
