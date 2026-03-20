<script setup>

import Navbar from '@/Components/Navbar.vue';
import Footer from '@/Components/Footer.vue';
import CTASection from '@/Components/CTASection.vue';

const props = defineProps({
  forceScrolled: {
    type: Boolean,
    default: false
  }
})

</script>

<template>

    <Navbar :force-scrolled="forceScrolled" />

    <main>
        <slot />
    </main>

    <CTASection />
    <Footer />

</template>