FROM python:slim

RUN apt-get update
RUN apt-get install scapy -y
RUN apt-get install net-tools -y 

RUN pip install scapy
RUN mkdir /usr/src/app
WORKDIR /usr/src/app
COPY ./request.py .

CMD ["python", "request.py"]
#CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"