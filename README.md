# Valmy Atlántica — Web corporativa

Este proyecto nace durante mi estancia en Valmy Atlántica en la Formación en Centros de Trabajo (FCT), donde me di cuenta de la necesidad de renovar su presencia digital. La web actual, basada en una solución prediseñada, presenta limitaciones tanto a nivel técnico como comunicativo, dificultando reflejar de manera adecuada la identidad y evolución de la empresa.

A partir de esto, se plantea el desarrollo de una nueva web corporativa desde cero y a medida, orientada a mejorar la imagen de la empresa y ofrecer una experiencia más clara, moderna y cercana.

---

## Tabla de contenidos

- [Sobre el proyecto](#sobre-el-proyecto)
- [Stack tecnológico](#stack-tecnológico)
- [Paleta de colores](#paleta-de-colores)
- [Estructura del proyecto](#estructura-del-proyecto)
- [Prerrequisitos](#prerrequisitos)
- [Instalación](#instalación)
- [Roadmap](#roadmap)
- [Autora](#autora)

---

## Sobre el proyecto

El proyecto tiene como objetivo sustituir la web actual de Valmy Atlántica, basada en una plataforma genérica, por una aplicación web corporativa desarrollada a medida.

Se busca mejorar la forma en la que la empresa se presenta, mostrando de manera más clara quiénes son, qué hacen y facilitando un contacto directo. Todo ello con una navegación más intuitiva y reduciendo el contenido innecesario.

Además, el proyecto deja preparada la base para futuras funcionalidades, como un área privada para la gestión de clientes y contratos energéticos.

El proyecto se divide en dos partes:

- **Web pública**: landing page, páginas de servicios y formulario de contacto.
- **Área privada** *(en desarrollo)*: acceso para clientes y empleados con distintos niveles de permisos.

### Capturas de pantalla

*Próximamente*

---

## Stack tecnológico

### Frontend
- **Vue 3** — Composition API con `<script setup>`
- **Inertia.js** — Navegación SPA sin API REST
- **SCSS** — Estilos modulares con variables y arquitectura por componentes
- **Vite** — Bundler y servidor de desarrollo

### Backend y base de datos
- **Laravel 12** — Framework PHP para el backend y las rutas
- **MariaDB** — Base de datos relacional
- **Laravel Breeze** — Scaffolding de autenticación

---

## Paleta de colores

| Variable | Hex | Uso |
|---|---|---|
| `$color-primary` | `#BA342E` | Color de marca |
| `$color-secondary` | `#2A2A2A` | Estructura |
| `$text-primary` | `#1E1E1E` | Textos principales |
| `$text-secondary` | `#6B7280` | Textos secundarios |
| `$white` | `#FFFFFF` | Fondos y textos |
| `$pale-white` | `#F7F7F7` | Fondos suaves |
| `$bg-dark` | `#0F172A` | Footer y fondos oscuros |
| `$border-color` | `#E5E7EB` | Bordes |
| `$color-success` | `#2E8B57` | Estados positivos |

---

## Estructura del proyecto

```
Proyecto-WebValmyAtlantica/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
│   └── images/
├── resources/
│   ├── js/
│   │   ├── Components/
│   │   ├── Layouts/
│   │   └── Pages/
│   │       └── Public/
│   ├── scss/
│   │   ├── base/
│   │   ├── components/
│   │   └── layout/
│   └── views/
└── routes/
    └── web.php
```

---

## Prerrequisitos

- **PHP** 8.2 o superior
- **Composer**
- **Node.js** 18 o superior
- **npm**

---

## Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/bsa-rgb/Proyecto-WebValmyAtlantica
cd Proyecto-WebValmyAtlantica
```

2. Instala las dependencias PHP:
```bash
composer install
```

3. Copia el archivo de entorno:
```bash
cp .env.example .env      # Mac/Linux
copy .env.example .env    # Windows
```

4. Genera la clave de la aplicación:
```bash
php artisan key:generate
```

5. Instala las dependencias de Node:
```bash
npm install --legacy-peer-deps
```

6. Compila los assets:
```bash
npm run build
```

7. Lanza el servidor:
```bash
php artisan serve
```

8. Abre en el navegador: [http://localhost:8000](http://localhost:8000)

---

## Roadmap

- [x] Landing page con hero, estadísticas, servicios y carrusel de clientes
- [x] Navbar responsivo con dropdown y comportamiento al hacer scroll
- [x] Footer con enlaces y datos de contacto
- [x] Páginas individuales de servicios
- [x] Página de contacto con mapa integrado
- [x] Arquitectura de base de datos (empresas, usuarios, CUPs, comercializadoras)
- [ ] Formulario de contacto funcional (envío de email)
- [ ] Página de login
- [ ] Dashboard personalizado por rol (cliente / empleado)
- [ ] Control de acceso por roles (RBAC)

---

## Autora

**Beatriz Sabio Arenas**

📧 [Email](mailto:bsa698x@gmail.com) | [LinkedIn](https://www.linkedin.com/in/beatriz-sabare/) | [GitHub](https://github.com/bsa-rgb)
