FROM kalilinux/kali-rolling

# Set working directory to /root
WORKDIR /root

# Update
RUN apt-get update && apt-get install wget -y

RUN wget https://github.com/RickdeJager/stegseek/releases/download/v0.6/stegseek_0.6-1.deb && apt install ./stegseek_0.6-1.deb -y

COPY file.txt .

COPY image.jpg .

ENTRYPOINT ["/bin/bash"]
