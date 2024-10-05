FROM php:8.3-fpm

RUN apt update \
    && apt install -y zlib1g-dev git libicu-dev zip libzip-dev zip npm libxml2-dev \
    && docker-php-ext-install intl opcache pdo pdo_mysql zip soap \
    && pecl install apcu xdebug redis \
    && docker-php-ext-enable apcu xdebug redis \
    && docker-php-ext-configure zip

WORKDIR /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- \
    --install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer

# Install npm & yarn
RUN npm install --global yarn