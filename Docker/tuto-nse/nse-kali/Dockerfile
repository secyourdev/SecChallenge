FROM kalilinux/kali-rolling:latest

RUN apt-get update
RUN apt-get install nmap -y
RUN apt-get install arp-scan -y
RUN apt-get install net-tools -y
RUN apt-get install iputils-ping -y
RUN apt-get install iproute2 -y
RUN apt-get install man -y
RUN apt-get install ssh -y

RUN mkdir database
ADD userlist /database
ADD passlist /database
