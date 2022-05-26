FROM ubuntu

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y iptables tcpdump dsniff iproute2 python3 python3-pip tmux dnsutils
RUN pip3 install scapy mitmproxy
COPY /eve_files/. /eve_files/.

CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"
