FROM ubuntu:latest

RUN apt-get update \
    && apt-get install -y sleuthkit \
    && apt-get clean

RUN mkdir /root/TheSleuthKit
COPY fichier.dd /root/TheSleuthKit
COPY texte.txt /root/TheSleuthKit

WORKDIR /root/TheSleuthKit

CMD ["bash"]