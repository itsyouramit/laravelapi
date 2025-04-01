# Use PHP 8.2 as the base image
FROM php:8.2-fpm

# Set working directory in container
WORKDIR /var/www

# Install system dependencies and PHP extensions required for Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Install Composer (the dependency manager for PHP)
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Copy the Laravel application files into the container
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Set permissions for Laravel directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose the port the app runs on
EXPOSE 8000

# Set the entry point to start the PHP server when the container runs
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
