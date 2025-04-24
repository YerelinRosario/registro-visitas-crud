FROM php:8.2-apache

# Instalar extensiones necesarias para SQL Server
RUN apt-get update && \
    apt-get install -y gnupg2 apt-transport-https unzip curl libgssapi-krb5-2 && \
    curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - && \
    curl https://packages.microsoft.com/config/debian/10/prod.list > /etc/apt/sources.list.d/mssql-release.list && \
    apt-get update && \
    ACCEPT_EULA=Y apt-get install -y msodbcsql17 unixodbc-dev && \
    pecl install pdo_sqlsrv && \
    docker-php-ext-enable pdo_sqlsrv && \
    docker-php-ext-install pdo


ENV IS_DOCKER=true

# Copiar la aplicación al contenedor
COPY . /var/www/html/

EXPOSE 80
