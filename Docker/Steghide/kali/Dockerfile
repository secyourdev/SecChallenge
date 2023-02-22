FROM kalilinux/kali-rolling

# Set working directory to /root
WORKDIR /root

# Update
RUN apt-get update

RUN apt-get install steghide -y

COPY image.jpg .

COPY top_secret.txt .

ENTRYPOINT ["/bin/bash"]
