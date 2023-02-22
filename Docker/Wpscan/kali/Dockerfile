FROM kalilinux/kali-rolling

# Set working directory to /root
WORKDIR /root

# Update and install tools
RUN apt-get update && apt-get install wpscan -y && apt install wordlists 

RUN gzip -d /usr/share/wordlists/rockyou.txt.gz

COPY file.txt .

ENTRYPOINT ["/bin/bash"]
