<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue'
import CTASection from '@/Components/CTASection.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <PublicLayout :force-scrolled="true">
    <div class="service-container">
      <section class="service-title">
        <h1>
            Experiencia energética al lado de las empresas.
        </h1>
      </section>
      <section class="service-individual-image">
        <img src="/images/windturbineindividual.jpg" alt="">
      </section>
      <section class="service-content">
        <p>
            Valmy Atlántica es una empresa gallega dedicada a la gestión energética para empresas y al acompañamiento estratégico en cuestiones relacionadas con la energía.
        </p>
        <p>
            Nuestro trabajo, en esencia, consiste en ayudar a las empresas a entender qué está pasando en el mercado energético y cómo puede afectar a su actividad.
        </p>
        <p>
            No creemos demasiado en las soluciones estándar. Cada empresa tiene su forma de trabajar, su consumo energético y sus propias prioridades. Y eso cambia mucho las cosas.
        </p>
        <p>
            Con los años hemos construido relaciones profesionales duraderas con empresas que valoran algo bastante sencillo: trabajar con gente que conoce el sector y que habla claro.
        </p>
        <p>
            Conocemos el mercado energético, cómo evoluciona y qué factores lo condicionan. Pero, sobre todo, conocemos las preocupaciones que tienen muchas empresas cuando se enfrentan a decisiones relacionadas con la energía.
        </p>
        <p>
            Y si algo hemos aprendido en todo este tiempo es que la confianza no se construye con promesas. Se construye trabajando.
        </p>
      </section>
      <Link href="/" class="service-back">
        ← Volver al inicio
      </Link>
    </div>
  </PublicLayout>
</template>