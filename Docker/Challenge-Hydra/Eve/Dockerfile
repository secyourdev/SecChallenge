FROM ubuntu

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y iptables tcpdump dsniff iproute2 python3 python3-pip tmux dnsutils
RUN apt-get install hydra-gtk -y
RUN apt-get install arp-scan -y
RUN apt-get install net-tools -y
RUN apt-get install iputils-ping -y
RUN apt-get install iproute2 -y
RUN apt-get install man -y
RUN apt-get install ssh -y

RUN mkdir dictionnaire
ADD listuser /dictionnaire
ADD listpass /dictionnaire

CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"
