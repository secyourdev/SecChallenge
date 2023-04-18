FROM ubuntu:20.04

RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y samba

COPY smb.conf /etc/samba/smb.conf
COPY flag.txt /srv/samba/flag/flag.txt

RUN useradd -M -s /bin/false smbuser && \
    (echo "NOTtheFlagYet"; echo "NOTtheFlagYet") | smbpasswd -s -a smbuser

EXPOSE 445

CMD ["sh", "-c", "smbd --foreground --no-process-group --debuglevel=3 > /dev/stdout 2>&1"]

