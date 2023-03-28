#!/bin/bash
NOCOLOR='\033[0m'
RED='\033[0;31m'
GREEN='\033[0;32m'
ORANGE='\033[0;33m'
BLUE='\033[0;34m'
PURPLE='\033[0;35m'
CYAN='\033[0;36m'
LIGHTGRAY='\033[0;37m'
DARKGRAY='\033[1;30m'
LIGHTRED='\033[1;31m'
LIGHTGREEN='\033[1;32m'
YELLOW='\033[1;33m'
LIGHTBLUE='\033[1;34m'
LIGHTPURPLE='\033[1;35m'
LIGHTCYAN='\033[1;36m'
WHITE='\033[1;37m'







while getopts p:b:f flag
do
    case "${flag}" in
      p) port=${OPTARG};;
      b) branch=${OPTARG};;
      f) force=true;;
    esac
done

echo -e "${CYAN}port: ${port:-80}${NOCOLOR}";
echo -e "${CYAN}branch: ${branch:-"main"}${NOCOLOR}";
if [[ "$force" == true ]];then
  echo -e "${CYAN}force mode${NOCOLOR}";
fi

if [ ! "$(ls -A Website/ 2>/dev/null)" ];then
  mkdir Website/
fi
cd Website/

if [ ! "$(ls -A public_html/ 2>/dev/null)" ];then
  mkdir public_html/
fi

if [ ! "$(ls -A mysql/ 2>/dev/null)" ];then
  mkdir mysql/
fi

if [ ! "$(ls -A mysql/sql-scripts/ 2>/dev/null)" ];then
  mkdir mysql/sql-scripts/
fi


if [ "$(ls -A docker-compose.yml 2>/dev/null)" ] && [[ ! "$force" == true ]];then

  echo "Already have a docker-compose"
  echo -e "${YELLOW}PORT NOT CHANGE${BLUE} : To change the port, use -p and -f${NOCOLOR}"

else
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
        - "${port:-80}:80"
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
    
fi

if [ "$(ls -A .env 2>/dev/null)" ] && [[ ! "$force" == true ]];then

  echo "Already have a .env"
  
else
cat > .env << EOF
PHP_VERSION=7.4
MYSQL_VERSION=8
APACHE_VERSION=2.4.54

DB_ROOT_PASSWORD=root
DB_USERNAME=user
DB_PASSWORD=root

PROJECT_ROOT=./public_html
EOF
fi

if [ "$(ls -A mysql/Dockerfile 2>/dev/null)" ] && [[ ! "$force" == true ]];then

  echo "Already have a Mysql Dockerfile"
  
else
cat > mysql/Dockerfile << EOF
FROM mysql/mysql-server:5.7


COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

COPY ./sql-scripts/init.sql .
EOF

fi


if [ "$(ls -A public_html 2>/dev/null)" ];then
    
    cd public_html
    actual=$(git rev-parse --abbrev-ref HEAD);
    
    

    if [ "$actual" = "${branch:-"main"}" ]; then
        echo -e "${GREEN}Already on the good branch${NOCOLOR}"
    else
        echo -e "${YELLOW}Changing branch${NOCOLOR}"
        git checkout ${branch:-"main"}
    fi
    local=$(git rev-parse HEAD)
    echo $local
    remote=$(git ls-remote https://github.com/secyourdev/SecChallenge.git ${branch:-"main"})
    remote="${remote:0:40}";
    echo $remote
    if [ "$local" == "$remote" ]; then
        echo "Already up to date"
        cd ..
    else
        echo -e "${YELLOW}Updating${NOCOLOR}"
        git pull
        cd ..
    fi
    
    
else
    git clone --branch ${branch:-"main"} https://github.com/secyourdev/SecChallenge.git public_html/
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


echo -e "${CYAN}Starting dockers${NOCOLOR}"



sudo docker-compose up --build
