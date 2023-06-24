FROM debian:10
CMD ["bash"]
RUN apt-get update \
&& apt-get install -y tcpdump
run apt-get install -y openssh-server sudo\
&& apt-get clean
WORKDIR /etc