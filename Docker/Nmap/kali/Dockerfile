FROM kalilinux/kali-rolling

# Set working directory to /root
WORKDIR /root

# Update and install nmap tool
RUN apt-get update && apt-get install nmap -y

ENTRYPOINT ["/bin/bash"]
