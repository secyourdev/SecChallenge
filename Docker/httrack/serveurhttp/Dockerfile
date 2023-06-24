FROM httpd:2.4

RUN apt-get update \
    && apt-get install -y apache2 \
	&& apt-get install -y php libapache2-mod-php \
    && apt-get clean

COPY index.html /var/www/html

CMD ["apache2ctl", "-D", "FOREGROUND"]