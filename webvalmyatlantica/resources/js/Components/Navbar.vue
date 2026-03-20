<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { Link } from "@inertiajs/vue3";

const isScrolled = ref(false);
const isServicesOpen = ref(false);
const servicesRef = ref(null);

const handleScroll = () => {
    isScrolled.value = window.scrollY > 50;
};

// Cerrar el dropdown si el clic ocurre fuera de él
const handleClickOutside = (event) => {
    if (servicesRef.value && !servicesRef.value.contains(event.target)) {
        isServicesOpen.value = false;
    }
};

onMounted(() => {
    window.addEventListener("scroll", handleScroll);
    document.addEventListener("click", handleClickOutside);
});

onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
    document.removeEventListener("click", handleClickOutside);
});

const props = defineProps({
    forceScrolled: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <nav :class="['navbar', { scrolled: isScrolled || props.forceScrolled }]">
        <div class="navbar-logo">
            <Link href="/">
                <img
                    src="/images/logo-valmy-atlantica.svg"
                    alt="Logo de la empresa Valmy Atlántica"
                />
            </Link>
        </div>

        <div class="navbar-right">
            <Link class="nav-link" href="/">INICIO</Link>

            <!-- Dropdown de servicios -->
            <div
                class="nav-dropdown"
                ref="servicesRef"
                :class="{ open: isServicesOpen }"
            >
                <button
                    class="nav-link dropdown-trigger"
                    @click="isServicesOpen = !isServicesOpen"
                    :aria-expanded="isServicesOpen"
                >
                    SERVICIOS
                    <span class="dropdown-arrow">&#9662;</span>
                </button>

                <div class="dropdown-menu">
                    <Link class="dropdown-item" href="/servicios/energia">
                        La energía también se decide
                    </Link>

                    <Link class="dropdown-item" href="/servicios/experiencia">
                        Experiencia energética
                    </Link>

                    <Link
                        class="dropdown-item"
                        href="/servicios/acompanamiento"
                    >
                        Comprender. Interpretar. Acompañar.
                    </Link>
                </div>
            </div>

            <Link class="nav-link" href="/contacto">CONTACTO</Link>
            <Link class="nav-link" href="/wip">LOGIN</Link>
        </div>
    </nav>
</template>
