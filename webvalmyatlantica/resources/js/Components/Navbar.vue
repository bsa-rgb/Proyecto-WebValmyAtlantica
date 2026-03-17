<script setup>

import { ref, onMounted, onUnmounted } from 'vue';

const isScrolled = ref(false);

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50;
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>

  <nav :class="['navbar', { scrolled:isScrolled }]">
  
    <div class="navbar-logo">
      <img src="/images/logo-valmy-atlantica.svg" alt="Logo de la empresa Valmy Atlántica">
    </div>
  
    <div class="navbar-right">
      <a class="nav-link" href="#">INICIO</a>
      <a class="nav-link" href="#">SERVICIOS</a>
      <a class="nav-link" href="#">CONTACTO</a>
      <a class="nav-link" href="#">LOGIN</a>
    </div>
  
  </nav>

</template>