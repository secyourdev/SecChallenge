FROM python:3.9-slim-buster

RUN apt-get update && apt-get install -y git

RUN git clone https://github.com/lanmaster53/recon-ng.git

WORKDIR /recon-ng

RUN pip install -r REQUIREMENTS

CMD ["python", "./recon-ng"]
