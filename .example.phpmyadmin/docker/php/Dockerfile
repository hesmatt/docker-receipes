FROM php:7.1-apache

RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer

# RUN docker-php-ext-install pdo pdo_mysql mbstring zip gd
RUN a2enmod rewrite
RUN apt-get update
RUN apt-get -y install gnupg
RUN apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys E1DD270288B4E6030699E45FA1715D88E1DF1F24
RUN su -c "echo 'deb http://ppa.launchpad.net/git-core/ppa/ubuntu trusty main' > /etc/apt/sources.list.d/git.list"
RUN apt-get update -y && apt-get install -y libpng-dev git
RUN apt-get update && apt-get install -y libpng-dev 
RUN apt-get install -y libwebp-dev libjpeg62-turbo-dev libpng-dev libxpm-dev \
  libfreetype6-dev
RUN docker-php-ext-configure gd --with-gd --with-webp-dir --with-jpeg-dir \
  --with-png-dir --with-zlib-dir --with-xpm-dir --with-freetype-dir \
  --enable-gd-native-ttf
RUN docker-php-ext-install gd
RUN docker-php-ext-install mbstring iconv
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN docker-php-ext-enable pdo pdo_mysql mysqli gd mbstring

RUN apt-get update && apt-get install -y libc-client-dev libkrb5-dev && rm -r /var/lib/apt/lists/*
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap
RUN docker-php-ext-install opcache