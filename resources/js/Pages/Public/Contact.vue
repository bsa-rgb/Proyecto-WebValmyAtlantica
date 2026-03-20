<script setup>
import PublicLayout from '@/Layouts/PublicLayout.vue'
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <PublicLayout :force-scrolled="true">
        <div class="contact-container">

            <section class="contact-header">
                <h1>Hablemos de su energía</h1>
                <p>Cuéntenos su situación y le ayudamos a tomar decisiones con mayor seguridad.</p>
            </section>

            <section class="contact-body">

                <div class="contact-info">
                    <div class="contact-info-block">
                        <h3>Dirección</h3>
                        <a href="https://maps.app.goo.gl/fAT2vAJ7Bg42NDSs8" target="_blank" rel="noopener">
                            Juan Flórez, 42 3º Izq.<br>15004 A Coruña, España
                        </a>
                    </div>

                    <div class="contact-info-block">
                        <h3>Teléfono</h3>
                        <a href="tel:+34981261704">+34 981 261 704</a>
                    </div>

                    <div class="contact-info-block">
                        <h3>Email</h3>
                        <a href="mailto:gerencia@valmyatlantica.com">gerencia@valmyatlantica.com</a>
                    </div>

                    <div class="contact-info-block">
                        <h3>Horario de invierno</h3>
                        <p>Lunes a jueves: 8:00–14:00 y 16:00–18:00</p>
                        <p>Viernes: 8:00–15:00</p>
                    </div>

                    <div class="contact-info-block">
                        <h3>Horario de verano</h3>
                        <p>Del 1 de junio al 30 de septiembre</p>
                        <p>Lunes a viernes: 8:00–15:00</p>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <form class="contact-form">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Su nombre" />
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="Su teléfono" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Su email" />
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" rows="5"
                                placeholder="¿En qué podemos ayudarle?"></textarea>
                        </div>

                        <button type="submit" class="contact-submit">Enviar mensaje →</button>
                    </form>
                </div>

            </section>
            <section class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4539.699663085488!2d-8.410926724951903!3d43.36503127102277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2e7c886f0feaef%3A0x197e89592ed6f057!2sValmy%20Atl%C3%A1ntica!5e1!3m2!1ses!2ses!4v1773978278504!5m2!1ses!2ses"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>
            <Link href="/" class="service-back">
                ← Volver al inicio
            </Link>
        </div>
    </PublicLayout>
</template>