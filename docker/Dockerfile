FROM php:8.2-fpm

COPY --from=composer /usr/bin/composer /usr/bin/composer

ENV USERNAME=animal-adoption
ENV USER_UID=1000
ENV USER_GID=$USER_UID

USER root

RUN apt-get update \
    && apt-get install -y libpq-dev libfreetype-dev libjpeg62-turbo-dev libpng-dev libzip-dev unzip \
    && apt-get upgrade -y

RUN docker-php-ext-install -j$(nproc) zip pdo_pgsql

RUN groupadd -g $USER_GID $USERNAME \
    && useradd -g $USER_GID -u $USER_UID $USERNAME \
    && usermod -aG sudo $USERNAME

USER $USERNAME

WORKDIR /www
