FROM php:8.0.1-apache-buster
RUN docker-php-ext-install pdo pdo_mysql bcmath opcache
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer