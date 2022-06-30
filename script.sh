#!/bin/bash
mkdir Website/
cd Website/
mkdir public_html/
mkdir mysql/
mkdir mysql/sql-scripts/
cat > docker-compose.yml << EOF
version: "3.7"
services:
  php:
    image: cybersecuriteachg2/php
    networks:
      - backend
    volumes:
      - \${PROJECT_ROOT}/:/var/www/html/
    container_name: php
    links:
     - mysql
  apache:
    image: cybersecuriteachg2/apache
    depends_on:
      - php
      - mysql
    links:
      - mysql
    networks:
      - frontend
      - backend
    ports:
      - "80:80"
    volumes:
      - \${PROJECT_ROOT}/:/var/www/html/
    container_name: apache
  mysql:
    build: ./mysql/
    command: --default-authentication-plugin=mysql_native_password 
    restart: always
    ports:
      - "3306:3306"

    networks:
      - backend
  # The default MySQL installation only creates the "root" administrative account
  # create new users using docker-compose exec
    environment:
      MYSQL_ROOT_PASSWORD: "\${DB_ROOT_PASSWORD}"
      MYSQL_DATABASE: dbsite
      MYSQL_USER: "\${DB_USERNAME}"
      MYSQL_PASSWORD: "\${DB_PASSWORD}"
    container_name: mysql

    
  phpmyadmin:
    depends_on:
      - mysql
    links:
      - mysql
    image: phpmyadmin/phpmyadmin
    restart: always
    ports:
      - '8081:80'
    environment:
      PMA_HOST: mysql
      MYSQL_USERNAME: "\${DB_USERNAME}"
      MYSQL_ROOT_PASSWORD: "\${DB_ROOT_PASSWORD}"   
    networks:
      - backend
    volumes:
      - /sessions
    container_name: phpmyadmin
networks:
  frontend:
  backend:
volumes:
    data:
EOF

cat > .env << EOF
PHP_VERSION=7.4
MYSQL_VERSION=8
APACHE_VERSION=2.4.54

DB_ROOT_PASSWORD=root
DB_USERNAME=user
DB_PASSWORD=root

PROJECT_ROOT=./public_html
EOF

cat > mysql/Dockerfile << EOF
FROM mysql/mysql-server:5.7


COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

COPY ./sql-scripts/init.sql .
EOF

if [ "$(ls -A public_html)" ];then
    echo "Not empty"
    cd public_html
    local=$(git rev-parse HEAD)
    echo $local
    remote=$(git ls-remote https://github.com/secyourdev/SecChallenge.git 2021_E3_GR2)
    remote="${remote:0:40}";
    echo $remote
    if [ "$local" == "$remote" ]; then
        echo "Already up to date"
        cd ..
    else
        echo "Updating"
        cd ..
        rm -rf public_html/
        git clone --branch 2021_E3_GR2 https://github.com/secyourdev/SecChallenge.git public_html/
    fi
    
    
else
    git clone --branch 2021_E3_GR2 https://github.com/secyourdev/SecChallenge.git public_html/
fi

cp public_html/bdd/dbsite.sql mysql/sql-scripts/init.sql

rm public_html/bdd/acces_BDD.php

cat > public_html/bdd/acces_BDD.php << EOF
<?php
try{
    \$BDD=new PDO('mysql:host=mysql;dbname=dbsite;charset=utf8','user','root',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOException \$e){
    die('Erreur :'.\$e->getMessage());
}
?>
EOF
sudo docker-compose up --build
