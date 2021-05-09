FROM php:8.0-fpm

RUN apt-get update && apt-get install -y

COPY ./docker/php/php.ini $PHP_INI_DIR/
#COPY ./docker/php/xdebug.ini $PHP_INI_DIR/conf.d/
COPY ./docker/php/jit.ini $PHP_INI_DIR/conf.d/

#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug

RUN docker-php-ext-install opcache

WORKDIR /var/www/html/php8
