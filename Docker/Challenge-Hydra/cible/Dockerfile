FROM ubuntu:latest

RUN apt-get update
RUN apt-get install openssh-server -y
RUN apt-get install net-tools -y
RUN apt-get install iputils-ping -y
RUN apt-get install iproute2 -y
RUN apt-get install ssh -y
RUN apt-get install sudo -y

RUN useradd -m Ellie
RUN echo 'Ellie:Seattle0' | chpasswd
RUN adduser Ellie sudo

RUN mkdir WellDone
ADD utile.txt /WellDone

EXPOSE 22
RUN /etc/init.d/ssh start
CMD ["/usr/sbin/sshd", "-D"]
