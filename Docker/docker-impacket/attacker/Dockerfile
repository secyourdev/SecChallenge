FROM python:3.9

RUN apt-get update && \
    apt-get install -y git 

RUN git clone https://github.com/SecureAuthCorp/impacket.git /opt/impacket && \
    cd /opt/impacket && \
    pip install .

RUN pip install --upgrade pip

ENTRYPOINT ["/bin/bash"]
