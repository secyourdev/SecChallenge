FROM debian:10

RUN apt-get update \
	&& apt-get install -y httrack \
    && apt-get clean

WORKDIR /root

CMD ["bash"]
