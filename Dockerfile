FROM php:8.2-apache-bullseye

COPY ./phar /var/www/html/vendor/firehub/core/phar

WORKDIR /var/www/html