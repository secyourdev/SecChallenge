FROM ubuntu:latest

RUN apt-get update
RUN apt-get install openssh-server -y
RUN apt-get install net-tools -y
RUN apt-get install iputils-ping -y
RUN apt-get install iproute2 -y
RUN apt-get install ssh -y
RUN apt-get install sudo -y

RUN useradd -m service
RUN echo 'service:Li0n123' | chpasswd
RUN adduser service sudo

RUN mkdir suspicious
ADD flag.txt /suspicious

EXPOSE 22
RUN /etc/init.d/ssh start
CMD ["/usr/sbin/sshd", "-D"]
