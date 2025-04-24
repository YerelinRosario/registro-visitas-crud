# 🛠 Documentación del Pipeline CI/CD - Registro de Visitas

Este documento describe cómo está implementado el pipeline DevOps para el proyecto **Registro de Visitas** utilizando Docker y GitHub Actions.

---

## ⚙️ Herramientas utilizadas

- **GitHub Actions:** Para automatizar el flujo CI/CD.
- **Docker:** Para contenerizar la aplicación y la base de datos.
- **PHP:** Lenguaje principal del proyecto.
- **SQL Server:** Base de datos utilizada en contenedor.
- **GitHub:** Control de versiones y hosting del código fuente.

---

## 🚀 Flujo del Pipeline

El pipeline se encuentra en el archivo `.github/workflows/ci.yml` y se activa en los siguientes eventos:

- `push` a la rama `main`
- `pull_request` a la rama `main`

---

### 🔄 Etapas del Pipeline

1. **Clonación del repositorio**
   - Utiliza `actions/checkout@v3` para traer el código fuente.

2. **Configuración de Docker Buildx**
   - Prepara el entorno para construir imágenes Docker.

3. **Construcción del contenedor**
   - Se ejecuta `docker build -t visitas-app .`
   - Se crea una imagen Docker con PHP, Apache y la aplicación cargada.

4. **Verificación de sintaxis PHP**
   - Se ejecuta `php -l` para revisar errores de sintaxis en `index.php`.

5. **Ejecución de pruebas automatizadas**
   - Corre el archivo `tests/basic_test.php`, que simula una prueba de conexión.

---

## 📦 Imagen del contenedor

El contenedor incluye:

- PHP 8.2 con Apache
- Extensiones necesarias para conectar a SQL Server (`pdo_sqlsrv`)
- La aplicación web completa en `/var/www/html/`

---

## 📁 Archivos relevantes

| Archivo                        | Descripción                          |
|-------------------------------|--------------------------------------|
| `.github/workflows/ci.yml`    | Archivo de definición del pipeline   |
| `Dockerfile`                  | Instrucciones para construir la imagen |
| `tests/basic_test.php`        | Prueba básica automatizada           |

---

## 📈 Posibles mejoras futuras

- Añadir pruebas de integración reales
- Incorporar `phpstan` para análisis de código estático
- Despliegue automático en VPS o servidor cloud
- Monitoreo de contenedores (con logs y métricas)

---

## ✅ Estado actual

El pipeline se ejecuta correctamente, valida el código, construye la app y pasa pruebas simuladas en cada push a `main`.
