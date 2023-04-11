FROM kalilinux/kali-rolling

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt update && apt -y install sslyze

CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"