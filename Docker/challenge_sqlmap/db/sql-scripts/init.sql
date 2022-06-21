CREATE DATABASE IF NOT EXISTS MYSQL_DATABASE;

USE MYSQL_DATABASE;

CREATE TABLE credit (

id varchar(255) NOT NULL,

pass varchar(255) NOT NULL
);

INSERT INTO credit (id, pass) VALUES ("Alice", "IAmAlice"),("Yoda","YodaIAm"),("User","Onepassword"),("Flag","0924086489ca5a44e71715a6c00832cb");