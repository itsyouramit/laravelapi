# Use the official PHP image with Apache
FROM php:8.1-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip git unzip \
    libxml2-dev libssl-dev libcurl4-openssl-dev libicu-dev \
    libzip-dev

# Install PHP extensions required by Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql xml zip intl

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to the Laravel project directory
WORKDIR /var/www/html

# Copy the Composer lock file and the rest of the Laravel project
COPY composer.json composer.lock /var/www/html/

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader --verbose

# Copy the rest of the Laravel application into the container
COPY . /var/www/html

# Set the correct permissions for Laravel
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
