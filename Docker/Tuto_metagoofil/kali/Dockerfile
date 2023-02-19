FROM kalilinux/kali-rolling

# Set working directory to /root
WORKDIR /root

# Update
RUN apt-get update

RUN apt-get install python3-pip -y && apt-get install git -y

RUN git clone https://github.com/opsdisk/metagoofil.git

# Update
RUN apt-get update && apt install metagoofil -y

ENTRYPOINT ["/bin/bash"]
