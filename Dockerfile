# Use official PHP image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www

# Copy the current directory contents into the container at /var/www
COPY . .

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose the port the app runs on
EXPOSE 80

# Run Laravel's development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]

