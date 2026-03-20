<script setup>
    import { ref, onMounted } from 'vue';

    const stats = ref([
      { value: 25, label: 'Años de experiencia', display: 1 },
      { value: 500, label: 'Empresas asesoradas', display: 1 },
      { value: 1200000, label: 'Ahorro energético', display: 1 }
    ]);

    const animateValue = (stat) => {
      let start = 0;
      const duration = 1500;
      const increment = stat.value / (duration / 12);

      const counter = setInterval(() => {
        start += increment;

        if (start >= stat.value) {
          stat.display = stat.value;
          clearInterval(counter);
        } else {
          stat.display = Math.floor(start);
        }
      }, 16);
    };

    onMounted(() => {
      setTimeout(() => {
        stats.value.forEach(stat => animateValue(stat));
      }, 1000);
    });

</script>

<template>
  <section class="stats">
    
    <div class="stats-container">

      <div class="stat" v-for="(stat, index) in stats" :key="index">
        <h2>
          {{ stat.display >= 1000000 
              ? (stat.display / 1000000).toFixed(1) + 'M€' 
              : stat.display + '+' }}
        </h2>
        <p>{{ stat.label }}</p>
      </div>
      
    </div>

  </section>
</template>