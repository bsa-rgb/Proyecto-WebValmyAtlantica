<script setup>

import {Link} from '@inertiajs/vue3';

const props = defineProps({
    company: Object
});

</script>

<template>
    <div style="padding: 20px; font-family: sans-serif;">
        <Link href="/companies">← Volver atrás</Link>
        
        <hr>
        
        <h1>Ficha de: {{ company.name }}</h1>
        <p><strong>NIF:</strong> {{ company.nif }}</p>
        <p><strong>Ciudad:</strong> {{ company.city }}</p>

        <h3>Usuarios registrados en esta empresa:</h3>
        <ul>
            <li v-for="user in company.users" :key="user.id">
                {{ user.name }} - {{ user.email }}
            </li>
        </ul>

        <p v-if="company.users.length === 0">
            Esta empresa no tiene usuarios asociados todavía.
        </p>
    </div>
</template>