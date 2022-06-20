FROM kalilinux/kali-rolling:latest

RUN apt update && apt install unzip && apt install jadx -y && apt install apktool -y && apt install nano -y


RUN mkdir /home/Reverse

ADD hello.apk /home/Reverse/hello.apk
WORKDIR /home/Reverse/
		