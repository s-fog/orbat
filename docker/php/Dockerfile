FROM composer:1 AS composer
FROM php:5.6-fpm-alpine3.8

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apk add --no-cache bash \
    icu-dev \
    git \
    linux-headers
RUN docker-php-ext-configure opcache --enable-opcache && \
    docker-php-ext-install opcache
RUN docker-php-ext-configure intl && \
    docker-php-ext-install intl && \
    docker-php-ext-enable intl
RUN docker-php-ext-install pdo pdo_mysql

RUN addgroup -g 1000 -S appgroup && \
    adduser -S appuser -G appgroup -u 1000
USER appuser

RUN git config --global user.email "s-fog@yandex.ru" && \
    git config --global user.name "s-fog"
