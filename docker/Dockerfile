FROM php:8.2-fpm

COPY --from=composer /usr/bin/composer /usr/bin/composer

USER root

RUN apt-get update \
    && apt-get install -y libpq-dev libfreetype-dev libjpeg62-turbo-dev libpng-dev libzip-dev unzip \
    && apt-get upgrade -y

RUN docker-php-ext-install -j$(nproc) zip pdo_pgsql

WORKDIR /www
