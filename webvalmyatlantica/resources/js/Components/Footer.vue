<script setup>
import { Icon } from '@iconify/vue';
</script>

<template>

  <footer class="footer">

    <div class="footer-top">

      <div class="footer-brand">
        <h3>Valmy Atlántica</h3>
        <p class="footer-tagline">Gestión energética para empresas e industrias.</p>
        <div class="footer-contact">
          <a href="mailto:gerencia@valmyatlantica.com">gerencia@valmyatlantica.com</a>
          <a href="tel:+34981261704">+34 981 261 704</a>
          <a href="https://maps.app.goo.gl/fAT2vAJ7Bg42NDSs8" target="_blank" rel="noopener">Juan Flórez, 42 3º Izq.<br>15004 A Coruña, España</a>
        </div>
      </div>

      <div class="footer-col footer-col--divided">
        <h4>Servicios</h4>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Auditorías energéticas</a></li>
          <li><a href="#">Gestión de contratos</a></li>
          <li><a href="#">Consultoría</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>

      <div class="footer-col footer-col--divided">
        <h4>Legal</h4>
        <ul>
          <li><a href="#">Aviso Legal</a></li>
          <li><a href="#">Privacidad y Cookies</a></li>
          <li><a href="#">Área interna</a></li>
        </ul>
      </div>

      <div class="footer-col footer-social">
        <h4>Síguenos</h4>
        <ul>
          <li><a href="#"><Icon icon="mdi:linkedin" /> LinkedIn</a></li>
          <li><a href="#"><Icon icon="mdi:instagram" /> Instagram</a></li>
        </ul>
        <a href="#contacto" class="footer-cta">Contáctanos</a>
      </div>

    </div>

    <div class="footer-divider"></div>

    <div class="footer-bottom">
      <span class="footer-copy">© 2026 Valmy Atlántica. Todos los derechos reservados.</span>
      <span class="footer-author">
        Diseño y desarrollo:
        <a href="www.linkedin.com/in/beatriz-sabare" target="_blank" rel="noopener">Beatriz S.A.</a>
      </span>
    </div>

  </footer>

</template>
