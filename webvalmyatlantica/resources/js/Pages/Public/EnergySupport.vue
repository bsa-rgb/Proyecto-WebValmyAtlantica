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
            Comprender. Interpretar. Acompañar.
        </h1>
      </section>
      <section class="service-individual-image">
        <img src="/images/solarpanelsindividual.jpg" alt="">
      </section>
      <section class="service-content">
        <p>
            No hay dos empresas que consuman energía exactamente de la misma manera. Ni que tengan las mismas necesidades.
        </p>
        <p>
            Por eso nuestra forma de trabajar parte siempre de la misma idea: entender bien cada situación antes de sacar conclusiones.
        </p>
        <p>
            Nuestro enfoque se basa en tres pasos bastante claros:
        </p>
        <h3>Comprender</h3>
        <p>
            Lo primero es analizar la situación energética de cada empresa: cómo consume, cómo funciona su actividad y en qué contexto energético se mueve.
        </p>
        <h3>Interpretar</h3>
        <p>
            Después miramos el mercado. Cómo está evolucionando y qué factores pueden influir en el futuro próximo.
        </p>
        <h3>Acompañar</h3>
        <p>
            Y, finalmente, acompañamos a las empresas cuando llega el momento de tomar decisiones. Porque la energía no es algo puntual; forma parte de la gestión diaria de muchas organizaciones.
        </p>
        <p>
            Trabajamos especialmente con:
        </p>
        <ul class="service-list">
            <li><p>Empresas industriales</p></li>
            <li><p>Compañías con actividad productiva</p></li>
            <li><p>Organizaciones con consumos energéticos elevados</p></li>
            <li><p>Pymes que necesitan una estrategia energética más clara</p></li>
        </ul>
        <p>
            Empresas que buscan trabajar con profesionales que entiendan su realidad.
        </p>
      </section>
      <Link href="/" class="service-back">
        ← Volver al inicio
      </Link>
    </div>
  </PublicLayout>
</template>