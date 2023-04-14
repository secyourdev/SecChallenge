FROM kalilinux/kali-rolling:latest

RUN apt update
RUN apt install net-tools -y
RUN apt install wget -y
RUN apt-get install apache2 -y
RUN apt install git -y
RUN git clone https://github.com/Anon-Exploiter/SiteBroker
WORKDIR /
COPY /site_cible/. var/www/html/
RUN apt install nano -y
RUN useradd -ms /bin/bash challenger
USER challenger
WORKDIR /

