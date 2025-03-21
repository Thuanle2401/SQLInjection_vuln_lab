FROM php:7.3-apache

# Install MySQL client
RUN apt-get update && apt-get install -y default-mysql-client

# Set working directory
WORKDIR /var/www/html/

# Copy application source code
COPY ./src ./ 

# Configure permissions
RUN chown -R root:www-data /var/www/html \
    && chmod 750 /var/www/html \
    && find . -type f -exec chmod 640 {} \; \
    && find . -type d -exec chmod 750 {} \;

# Enable Apache modules
RUN a2enmod rewrite