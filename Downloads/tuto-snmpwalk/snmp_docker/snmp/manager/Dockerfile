FROM debian:stretch

# Addition of a few sources, cf. sources.list
COPY ./sources.list /etc/apt/sources.list

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y \
    software-properties-common gcc nano \
    apt-utils coreutils wget curl bash-completion sudo \
    # tcpdump to analyse network exchanges between agent and manager
    tcpdump patch smistrip wget unzip\
    # Installation of snmp and mibs types
    snmp snmp-mibs-downloader
RUN apt-get update && apt-get install -y python3
# Automatically bypass wireshark asking "Do you want to allow non-root users to capture packets ?"
RUN echo "wireshark-common wireshark-common/install-setuid boolean true" | debconf-set-selections
RUN apt-get install -y wireshark-common
RUN apt-get autoremove -y

# Replace snmp.conf file with ours
COPY snmp.conf /etc/snmp/snmp.conf
# Might need the README for some help
COPY README.md /home/manager/README.md

# User creation and configuration
RUN groupadd -r user && useradd -m -r -g user manager && usermod -aG sudo manager
RUN echo '%sudo ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers
WORKDIR /home/manager
USER manager