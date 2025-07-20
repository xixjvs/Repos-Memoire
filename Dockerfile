FROM php:8.2-apache

# Installer les dépendances (sans Telegraf)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

# Configuration Apache
RUN a2enmod rewrite && a2enmod status
RUN echo "ExtendedStatus On" > /etc/apache2/conf-available/status.conf && \
    echo "<Location /server-status>" >> /etc/apache2/conf-available/status.conf && \
    echo "    SetHandler server-status" >> /etc/apache2/conf-available/status.conf && \
    echo "    Require local" >> /etc/apache2/conf-available/status.conf && \
    echo "</Location>" >> /etc/apache2/conf-available/status.conf && \
    a2enconf status

EXPOSE 80
CMD ["apache2-foreground"]
