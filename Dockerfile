FROM php:7.4-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get -y install libmariadb-dev
RUN docker-php-ext-install mysqli 
