FROM python:slim

RUN pip install twill
RUN mkdir /usr/src/app
WORKDIR /usr/src/app
COPY ./request.py .

CMD ["python", "request.py"]