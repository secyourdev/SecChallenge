FROM ubuntu:latest

RUN apt-get update  
RUN apt-get install -y python3-pip
RUN apt-get install -y httrack whatweb
RUN apt-get install -y git
RUN git clone https://github.com/bahatiphill/BillCipher
RUN cd BillCipher
WORKDIR /BillCipher
RUN pip3 install -r requirement.txt 

