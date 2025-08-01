# Imagen base con PHP y Apache
FROM php:8.2-apache

# Activar mod_rewrite para URLs limpias (opcional)
RUN a2enmod rewrite

# Copiar los archivos de tu proyecto al directorio raíz de Apache
COPY . /var/www/html/

# Establecer permisos (opcional pero recomendable)
RUN chown -R www-data:www-data /var/www/html/ && chmod -R 755 /var/www/html/

# Puerto expuesto por Apache
EXPOSE 80