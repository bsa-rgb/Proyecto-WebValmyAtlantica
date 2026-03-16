<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue';
import HeroSection from '@/Components/HeroSection.vue';
import Navbar from '@/Components/Navbar.vue';
import StatsSection from '@/Components/StatsSection.vue';
import ServicesSection from '@/Components/ServicesSection.vue';
import ClientsSection from '@/Components/ClientsSection.vue';
import CTASection from '@/Components/CTASection.vue';

</script>

<template>
    <PublicLayout>
        <HeroSection />
        <StatsSection />
        <ServicesSection />
        <ClientsSection />
        <CTASection />
    </PublicLayout>
</template>