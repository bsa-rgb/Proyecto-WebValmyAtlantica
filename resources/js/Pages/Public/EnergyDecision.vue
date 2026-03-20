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
          La energía también se decide.
        </h1>
      </section>
      <section class="service-individual-image">
        <img src="/images/lineabosqueindividual.jpg" alt="">
      </section>
      <section class="service-content">
        <p>
          En cualquier empresa hay decisiones que pesan más que otras. La energía es una de ellas.
        </p>
        <p>
          En Valmy Atlántica llevamos casi 25 años trabajando con empresas que necesitan comprender mejor su situación energética y el contexto en el que se mueven. Porque la energía no es solo un suministro: forma parte del funcionamiento real de una compañía.
        </p>
        <p>
          Cuando hablamos de energía no hablamos solo de contratos o tarifas. Hablamos del mercado energético, de cómo evoluciona y de cómo esos cambios terminan afectando al día a día de muchas empresas.
        </p>
        <p>
          En este tiempo hemos trabajado con empresas industriales, pymes productivas y organizaciones con consumos energéticos importantes. Sectores distintos, realidades distintas… pero una misma necesidad: entender qué está pasando para poder gestionar la energía con cierta seguridad.
        </p>
        <p>
          Y es que el sector energético cambia. Siempre lo ha hecho. <br> Pero ahora lo hace más rápido que antes.
        </p>
        <p>
          Por eso creemos que las decisiones energéticas no deberían tomarse sin comprender el contexto.
        </p>
      </section>
      <Link href="/" class="service-back">
        ← Volver al inicio
      </Link>
    </div>
  </PublicLayout>
</template>