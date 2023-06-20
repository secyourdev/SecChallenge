FROM debian:stretch

# Addition of a few sources, cf. sources.list
COPY ./sources.list /etc/apt/sources.list

RUN apt-get update -y && apt-get upgrade -y
RUN apt-get install -y \
    software-properties-common gcc nano \
    apt-utils coreutils wget curl bash-completion sudo \
    # tcpdump to analyse network exchanges between agent and manager
    tcpdump patch smistrip wget unzip\
    # snmpd installation
    snmpd
RUN apt-get update && apt-get install -y python3
# Automatically bypass wireshark asking "Do you want to allow non-root users to capture packets ?"
RUN echo "wireshark-common wireshark-common/install-setuid boolean true" | debconf-set-selections
RUN apt-get install -y wireshark-common
RUN apt-get autoremove -y

# Replace snmpd.conf file with ours
COPY snmpd.conf /etc/snmp/snmpd.conf

# User creation and configuration
RUN groupadd -r user && useradd -m -r -g user agent && usermod -aG sudo agent
RUN echo '%sudo ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers
WORKDIR /home/agent
USER agent