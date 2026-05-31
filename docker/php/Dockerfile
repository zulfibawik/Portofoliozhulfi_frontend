FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        nano \
        git \
        unzip \
        zip \
        curl \
        libzip-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-interaction --prefer-dist || true

RUN chown -R www-data:www-data /var/www/html
