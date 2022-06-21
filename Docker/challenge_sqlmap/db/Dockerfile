FROM mysql/mysql-server:5.7


COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

COPY ./sql-scripts/init.sql .
