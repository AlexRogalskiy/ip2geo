FROM php:7.1-fpm

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN apt-get update \
	&& apt-get install -y \
		curl \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

WORKDIR /app
