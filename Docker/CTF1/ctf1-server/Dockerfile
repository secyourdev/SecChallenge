FROM php:8.0-apache

# Downloading the tools and ressources
RUN apt-get update -qq
RUN apt-get install -qy
RUN apt-get install git -y
RUN apt-get install gnupg -y
RUN apt-get install unzip -y
RUN apt-get install zip -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# Setting up the configuration file and other things
COPY config/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY config/apache.conf /etc/apache2/conf-available/z-app.conf
RUN a2enconf z-app

# Enabling the configuration
RUN docker-php-ext-install -j$(nproc) opcache pdo_mysql
COPY config/php.ini /usr/local/etc/php/conf.d/app.ini

# Configuring the machine
ENV COMPOSER_ALLOW_SUPERUSER=1

# Adding the website and other files
COPY /ctf_web/. /app/.

# Opening port
EXPOSE 80
RUN /etc/init.d/apache2 start

CMD ["-D", "FOREGROUND"]
