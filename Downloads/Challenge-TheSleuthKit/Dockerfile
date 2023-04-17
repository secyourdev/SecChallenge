FROM kalilinux/kali-last-release

RUN apt-get update
RUN apt-get install sleuthkit -y
RUN apt-get install zip -y
RUN apt-get install unzip -y

RUN mkdir -p /home/TheSleuthKitChallenge

COPY imageChallenge.zip /home/TheSleuthKitChallenge

WORKDIR /home/TheSleuthKitChallenge
