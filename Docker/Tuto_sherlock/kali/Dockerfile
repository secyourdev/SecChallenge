FROM kalilinux/kali-rolling

# Set working directory to /root
WORKDIR /root

# Update
RUN apt-get update

RUN apt-get install python3-pip -y && apt-get install -y git

RUN git clone https://github.com/sherlock-project/sherlock.git

ENTRYPOINT ["/bin/bash"]
