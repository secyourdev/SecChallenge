FROM ubuntu

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update 
RUN apt-get install -y python3 python3-pip scapy
RUN pip install scapy 
RUN apt-get install net-tools -y
RUN apt install iputils-ping -y


CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"
