FROM php:8.2-apache

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Copier le code source
COPY . /var/www/html/

# Donner les droits appropriés
RUN chown -R www-data:www-data /var/www/html

# Activer Apache mod_rewrite si besoin
RUN a2enmod rewrite


# Activation de mod_status
RUN a2enmod status
COPY apache-status.conf /etc/apache2/conf-available/status.conf
RUN a2enconf status