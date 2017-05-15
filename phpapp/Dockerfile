FROM php:apache

RUN apt-get update \
        && apt-get install -y --no-install-recommends imagemagick \
        && rm -fr /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql 

