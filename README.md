# 📋 Registro de Visitas

Este proyecto es una aplicación web CRUD desarrollada con PHP, HTML y CSS. Permite registrar, visualizar, editar y eliminar visitas realizadas.

## 🚀 ¿Qué hace esta aplicación?

- Registrar nuevas visitas ingresando nombre, apellido, teléfono y correo electrónico.
- Visualizar la lista de visitas registradas.
- Editar la información de una visita.
- Eliminar visitas si es necesario.

## 💻 Tecnologías utilizadas

- PHP 8.2 + Apache
- SQL Server (contenedorizado)
- Docker & Docker Compose
- GitHub Actions (CI/CD)
- HTML, CSS, SCSS

## ⚙️ Estructura del proyecto

registro-visitas-crud/ 
Dockerfile 
docker-compose.yml
conexion.php 
index.php 
tests/ │ 
  basic_test.php 
.github/ │ 
    workflows/ 
      ci.yml

---

## 🧪 ¿Cómo ejecutar el proyecto?

1. Asegúrate de tener PHP instalado en tu computadora.
2. Abre una terminal en la carpeta del proyecto.
3. Ejecuta el siguiente comando:

   ```bash
   php -S localhost:2030

## 🔄 CI/CD con GitHub Actions

El pipeline se ejecuta automáticamente cuando se realiza un `push` o `pull request` a la rama `main`.

**Etapas del pipeline:**
1. Clonación del repositorio
2. Construcción del contenedor Docker
3. Verificación de sintaxis PHP
4. Ejecución de prueba automatizada

---

## 🐳 Instrucciones para levantar el sistema con Docker

1. Clona el repositorio:
   ```bash
   git clone https://github.com/YerelinRosario/registro-visitas-crud
   cd registro-visitas-crud

2. Levanta los contenedores:

 - docker compose up --build

3. Accede desde el navegador:

 -  http://localhost:8080

 🧪 Ejecutar prueba manualmente
Si deseas correr la prueba básica sin el pipeline:

  - docker compose build
  - docker run --rm visitas_php_app php /var/www/html/tests/basic_test.php
