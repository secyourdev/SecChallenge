FROM ubuntu:latest

RUN apt update && apt install openssh-server sudo -y && apt install net-tools

RUN useradd -rm -d /home/ubuntu -s /bin/bash -g root -G sudo -u 1000 user 

RUN  echo 'user:aaoe' | chpasswd
ADD route.sh /home/ubuntu/route.sh
RUN service ssh start

EXPOSE 22

CMD ["/usr/sbin/sshd","-D"]

