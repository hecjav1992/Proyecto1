# Usar la imagen oficial de PHP con Apache
FROM php:8.2-apache

# Activar mod_rewrite si piensas usar .htaccess (opcional)
RUN a2enmod rewrite

# Copiar todos los archivos al directorio web del contenedor
COPY . /var/www/html/

# Cambiar permisos (opcional pero recomendable)
RUN chown -R www-data:www-data /var/www/html/

# Exponer el puerto 80 (por defecto en Apache)
EXPOSE 80
