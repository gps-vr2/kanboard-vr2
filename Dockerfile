FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install system dependencies for PHP extensions
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    zip \
    && docker-php-ext-install mbstring pdo pdo_mysql

# Copy Kanboard files into the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 and start Apache
EXPOSE 80
CMD ["apache2-foreground"]