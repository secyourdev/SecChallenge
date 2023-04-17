FROM ubuntu

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update 
RUN apt-get install -y python3 python3-pip 
RUN pip install requests 
RUN pip install flask
COPY /eve_files/. /eve_files/.
WORKDIR /eve_files

CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"
