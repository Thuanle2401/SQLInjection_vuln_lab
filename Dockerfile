FROM php:7.3-apache

# Install MySQL client
RUN apt-get update && apt-get install -y default-mysql-client

# Put files
WORKDIR /var/www/html/
COPY ./src ./
COPY docker-php.conf /etc/apache2/conf-available/docker-php.conf
COPY apache2.conf /var/www/html/apache2.conf
COPY apache2.conf /etc/apache2/apache2.conf

# Copy database.sql and create database
COPY src/database.sql /docker-entrypoint-initdb.d/database.sql

# Config permission
RUN chown -R root:www-data /var/www/html
RUN chmod 750 /var/www/html
RUN find . -type f -exec chmod 640 {} \;
RUN find . -type d -exec chmod 750 {} \;
