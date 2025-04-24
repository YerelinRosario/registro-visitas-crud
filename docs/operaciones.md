# 📘 Manual de Operaciones - Registro de Visitas

Este manual describe cómo operar, probar y mantener el sistema web **Registro de Visitas** en un entorno Dockerizado.

---

## 🧭 Requisitos Previos

- Tener Docker y Docker Compose instalados en la máquina
- Tener Git instalado (opcional para clonar)
- Acceso a GitHub para clonar el repositorio

---

## 🚀 Levantar el sistema

1. Clona el proyecto desde GitHub:

   git clone https://github.com/tu-usuario/registro-visitas-crud.git
   cd registro-visitas-crud
   
2. Ejecuta los contenedores:

   ```bash
docker compose up --build

3. Accede al sistema en:

   http://localhost:8080

---

🔄 Detener y reiniciar el sistema
- Detener contenedores:

docker compose down

- Reiniciar con cambios nuevos:

docker compose down
docker compose up --build

🧪 Ejecutar pruebas manualmente

docker run --rm visitas_php_app php /var/www/html/tests/basic_test.php
Esta prueba valida una conexión simulada.


⚙️ Consideraciones técnicas
- El sistema detecta automáticamente si está en Docker para usar la conexión correcta.

- El nombre del contenedor SQL Server en Docker es visitas_sqlserver.

- Las credenciales SQL están definidas en el docker-compose.yml.

🧼 Mantenimiento
- Si Docker lanza errores, limpiar imágenes huérfanas con:

docker system prune -af

- Para limpiar todo (contenedores, redes, volúmenes):

docker compose down -v

📞 Contacto de soporte
Para dudas o problemas contactar a:

Yerelin Rosario (@YerelinRosario)

Hector Martinez (@HectorMartinez)

