FROM php:8.1.5-fpm
WORKDIR /var/www
RUN apt-get update \
  && apt-get install -y \
  libmagickwand-dev \
  libmagickcore-dev \
  libzip-dev \
  libwebp-dev
RUN docker-php-ext-install exif \
  && pecl install imagick \
  && docker-php-ext-enable imagick \
  && PHP_OPENSSL=yes \
  && docker-php-ext-install xml \
  && docker-php-ext-install filter \
  && docker-php-ext-install zip \
  && docker-php-ext-install bcmath \
  && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
  && docker-php-ext-install gd \
  && docker-php-ext-install intl
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli  
RUN docker-php-ext-install pdo mysqli pdo_mysql

CMD ["php-fpm"]

