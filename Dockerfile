FROM php:8.1-apache

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your app
COPY . /var/www/html/

# Enable Apache mod_rewrite (if using clean URLs)
RUN a2enmod rewrite
