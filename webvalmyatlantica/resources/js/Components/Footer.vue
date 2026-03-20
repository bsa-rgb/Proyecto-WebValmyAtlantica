<script setup>
import { Icon } from '@iconify/vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
  <footer class="footer">
    <div class="footer-top">

      <div class="footer-brand">
        <h3>Valmy Atlántica</h3>
        <p class="footer-tagline">Gestión energética para empresas e industrias.</p>
        <div class="footer-contact">
          <a href="mailto:gerencia@valmyatlantica.com"><Icon icon="mdi:email" /> gerencia@valmyatlantica.com</a>
          <a href="tel:+34981261704"><Icon icon="mdi:phone" />+34 981 261 704</a>
          <a href="https://maps.app.goo.gl/fAT2vAJ7Bg42NDSs8" target="_blank" rel="noopener"><Icon icon="mdi:map-marker" />Juan Flórez, 42 3º Izq.<br>15004 A Coruña, España</a>
        </div>
      </div>

      <div class="footer-col footer-col--divided">
        <h4>Servicios</h4>
        <ul>
          <li><Link href="/">Inicio</Link></li>
          <li><Link href="/servicios/energia">Energía y decisión</Link></li>
          <li><Link href="/servicios/experiencia">Experiencia energética</Link></li>
          <li><Link href="/servicios/acompanamiento">Acompañamiento</Link></li>
          <li><Link href="/contacto">Contacto</Link></li>
          <li><Link href="/wip">Login</Link></li>
        </ul>
      </div>

      <div class="footer-col footer-col--divided">
        <h4>Legal</h4>
        <ul>
          <li><Link href="/#">Aviso Legal</Link></li>
          <li><Link href="/#">Privacidad y Cookies</Link></li>
          <li><Link href="/#">Área interna</Link></li>
        </ul>
      </div>

      <div class="footer-col footer-social">
        <h4>Síguenos</h4>
        <ul>
          <li><a href="https://www.linkedin.com/company/valmy-atlantica-sl" target="_blank" rel="noopener"><Icon icon="mdi:linkedin" />LinkedIn</a></li>
          <li><a href="https://www.instagram.com/valmyatlantica" target="_blank" rel="noopener"><Icon icon="mdi:instagram" />Instagram</a></li>
        </ul>
        <Link href="/contacto" class="footer-cta">Contáctanos</Link>
      </div>

    </div>

    <div class="footer-divider"></div>

    <div class="footer-bottom">
      <span class="footer-copy">© 2026 Valmy Atlántica. Todos los derechos reservados.</span>
      <span class="footer-author">
        Diseño y desarrollo:
        <a href="https://www.linkedin.com/in/beatriz-sabare" target="_blank" rel="noopener">Beatriz S.A.</a>
      </span>
    </div>

  </footer>
</template>