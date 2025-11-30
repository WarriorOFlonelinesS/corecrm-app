FROM php:8.2-fpm

# Installa estensioni PHP necessarie per CakePHP
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    libxml2-dev \
    libicu-dev \
    libpq-dev \
    && docker-php-ext-install pdo_mysql mbstring zip xml intl pdo_pgsql pgsql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
