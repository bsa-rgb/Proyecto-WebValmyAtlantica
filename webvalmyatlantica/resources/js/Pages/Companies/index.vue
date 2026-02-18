<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

// Esto recibe los datos del controlador
defineProps({
    companies: Array
});
</script>

<!--

<template>
    <Head title="Empresas" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gestión de Empresas</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white p-6 shadow sm:rounded-lg">
                    <h3 class="text-lg font-medium mb-4">Listado de prueba</h3>
                    <ul>
                        <li v-for="company in companies" :key="company.id" class="border-b py-2">
                            {{ company.name }} - {{ company.nif }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

-->

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
</template>