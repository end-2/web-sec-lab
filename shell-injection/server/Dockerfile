FROM php:7.4-apache

# Update package list and install iputils-ping
RUN apt-get update && apt-get install -y iputils-ping && rm -rf /var/lib/apt/lists/*

# Enable PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Modify the document root for Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf

# Copy PHP files into the container
COPY ./public/ /var/www/html/public/

EXPOSE 80
