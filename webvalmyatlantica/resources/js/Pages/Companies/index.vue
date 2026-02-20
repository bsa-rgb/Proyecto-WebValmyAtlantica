<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

// Esto recibe los datos del controlador
defineProps({
    companies: Array
});

import { ref, watch } from 'vue';

import { router } from '@inertiajs/vue3';

import debounce from 'lodash/debounce';

const search = ref(''); 

watch(search, debounce((value) => {
    router.get('/companies',
        { search: value }, {
            preserveState: true,    //Evita que el input pierda el foco o se borre al recargar
            replace: true           //Evita que cada tecla pulsada cree un nuevo historial en el navegador
        },
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