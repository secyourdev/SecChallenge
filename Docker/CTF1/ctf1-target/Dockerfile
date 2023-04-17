FROM ubuntu:latest

RUN apt-get update
RUN apt-get install openssh-server -y
RUN apt-get install ssh -y
RUN apt-get install sudo -y

# Adding a super user
RUN useradd -m sleepyjoe
RUN echo 'sleepyjoe:football' | chpasswd
RUN adduser sleepyjoe sudo

# Configuring the machine
ENV COMPOSER_ALLOW_SUPERUSER=1

# Adding the website and other files
ADD flag.txt /root

# Opening port
EXPOSE 22

RUN /etc/init.d/ssh start

CMD ["/usr/sbin/sshd", "-D"]
