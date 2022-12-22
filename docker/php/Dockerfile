ARG PHP_VERSION_DOCKERFILE=${PHP_VERSION_DOCKERFILE}
FROM php:$PHP_VERSION_DOCKERFILE-fpm
RUN apt -y update; \
    apt -y upgrade;
RUN docker-php-ext-install  mysqli