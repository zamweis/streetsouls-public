FROM php:7.4-apache

WORKDIR /var/www

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    zip \
  && docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    mbstring \
    zip \
  && docker-php-ext-enable \
    mysqli

RUN cd /tmp && curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid

# RUN composer global require "laravel/lumen-installer"