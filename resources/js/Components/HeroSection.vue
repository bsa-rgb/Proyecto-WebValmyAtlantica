<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>

    <section class="hero">

        <video autoplay muted loop playsinline class="hero-video">
            <source src="/videos/video-valmy-inicio.mp4" type="video/mp4">
        </video>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h3>Valmy Atlántica</h3>
            <h1>La mayor central de compras energéticas del noroeste</h1>
            <p>Más de 25 años optimizando el coste energético de empresas e industrias</p>
            <Link href="/contacto" class="button-primary">
                Contacta con nosotros
            </Link>
        </div>
        
    </section>
</template>