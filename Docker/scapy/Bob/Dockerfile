FROM ubuntu

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update 
RUN apt install iputils-ping -y
COPY /files/. /files/.
WORKDIR /files


CMD exec /bin/bash pinger.sh
