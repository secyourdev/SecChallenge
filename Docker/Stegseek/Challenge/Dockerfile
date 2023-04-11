FROM ubuntu:latest

RUN apt update  
RUN mkdir /home/Stegseek 
#RUN sudo wget https://github.com/RickdeJager/stegseek/releases/download/v0.6/stegseek_0.6-1.deb

ADD stegseek_0.6-1.deb /home/Stegseek/stegseek_0.6-1.deb
#RUN apt install ./stegseek_0.6-1.deb
#RUN sudo wget https://github.com/brannondorsey/naive-hashcat/releases/download/data/rockyou.txt
ADD audio.wav /home/Stegseek/audio.wav
ADD image.jpg /home/Stegseek/image.jpg
ADD image2.jpg /home/Stegseek/image2.jpg
ADD worldlist.txt /home/Stegseek/worldlist.txt
WORKDIR /home/Stegseek
