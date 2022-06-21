FROM ubuntu

ENV TZ=Europe/Paris
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

CMD exec /bin/bash -c "trap : TERM INT; sleep infinity & wait"