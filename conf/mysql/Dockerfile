FROM mysql:5.7

COPY ./init.sql /docker-entrypoint-initdb.d/

ENV MYSQL_ROOT_PASSWORD=root

# RUN sh -c 'exec mysql -uroot -p"$MYSQL_ROOT_PASSWORD"' < ./bdd/dbsite.sql
EXPOSE 3306
