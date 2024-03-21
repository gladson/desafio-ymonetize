FROM php:${PHP_VERSION:-8.3}-fpm-alpine

WORKDIR /app

RUN apk --update upgrade \
    && apk add --no-cache autoconf automake make gcc g++ git bash linux-headers

RUN set -xe \
    && apk add --no-cache --virtual .phpize-deps $PHPIZE_DEPS \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del --no-network .phpize-deps
