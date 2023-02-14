FROM wordpress:latest
RUN pecl install xdebug && docker-php-ext-enable xdebug
WORKDIR /var/www/html