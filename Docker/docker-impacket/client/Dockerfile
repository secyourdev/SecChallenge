FROM ubuntu:20.04

RUN apt-get update && \
    apt-get install -y smbclient

RUN apt install smbclient

COPY smb_connect.sh /smb_connect.sh

EXPOSE 445

CMD ["/bin/bash", "/smb_connect.sh"]
