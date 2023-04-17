FROM ubuntu:bionic

RUN apt-get update \
 && apt-get install -y \
 iputils-ping \
 build-essential \
 cpanminus \
 git 
 RUN mkdir -p /home/dnsenum
 RUN git clone https://github.com/fwaeytens/dnsenum.git /home/dnsenum/ 
 RUN chmod +x /home/dnsenum/dnsenum.pl 
 RUN ln -s /home/dnsenum/dnsenum.pl /usr/bin/dnsenum 
 RUN cpanm String::Random 
 RUN cpanm Net::IP 
 RUN cpanm Net::DNS 
 RUN cpanm Net::Netmask 
 RUN cpanm XML::Writer

WORKDIR /home/dnsenum

# Run eternal loop
CMD ["/bin/bash", "-c", "while :; do sleep 10; done"]
