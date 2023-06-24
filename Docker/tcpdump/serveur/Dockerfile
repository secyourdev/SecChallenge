FROM ubuntu:latest

RUN apt update && apt install  openssh-server sudo -y
RUN apt-get install tcpdump -y
RUN useradd -rm -d /home/ubuntu -s /bin/bash -g root -G sudo -u 1000 test 

RUN  echo 'test:test' | chpasswd
COPY tuto.pcap /
RUN service ssh start

EXPOSE 22

CMD ["/usr/sbin/sshd","-D"]
#réponse :tcpdump -i eth0 -c 5 host 10.5.0.3 and port 22 -w tuto.pcap