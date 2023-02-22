FROM kalilinux/kali-rolling

# Set working directory to /root
WORKDIR /root

# Update
RUN apt-get update

RUN apt install rainbowcrack -y

ENTRYPOINT ["/bin/bash"]
