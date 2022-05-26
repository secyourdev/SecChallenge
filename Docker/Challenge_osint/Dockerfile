FROM cybersecuriteach/kali4fun:v0 

RUN apt update && apt install unzip && apt install fcrackzip

RUN mkdir /home/Challenge_4
#RUN git clone https://github.com/Mebus/cupp.git /home/Challenge_4/cupp
ADD secret.zip /home/Challenge_4/secret.zip
WORKDIR /home/Challenge_4/
		