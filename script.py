#author=KIEFFER Axel 
#DATE 30/06/2022
#
#Attention ce script est uniquement pour windows et télécharge uniquement la branche du groupe 2

import os
import pathlib
import shutil
import subprocess
import time
from tkinter import W

website = os.getcwd() + '\\website'
if not os.path.exists(website):
	os.makedirs(website)


html = website + '\\public_html'
if not os.path.exists(html):
	os.makedirs(html)

mysql = website + '\\mysql'
if not os.path.exists(mysql):
	os.makedirs(mysql)
sqlscript = mysql + '\\sql-scripts'
if not os.path.exists(sqlscript):
	os.makedirs(sqlscript)


f = open(website +'\\docker-compose.yml','w+')

f.write("""version: "3.7"
services:
  php:
    image: cybersecuriteachg2/php
    networks:
      - backend
    volumes:
      - ${PROJECT_ROOT}/:/var/www/html/
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
      - ${PROJECT_ROOT}/:/var/www/html/
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
      MYSQL_ROOT_PASSWORD: "${DB_ROOT_PASSWORD}"
      MYSQL_DATABASE: dbsite
      MYSQL_USER: "${DB_USERNAME}"
      MYSQL_PASSWORD: "${DB_PASSWORD}"
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
      MYSQL_USERNAME: "${DB_USERNAME}"
      MYSQL_ROOT_PASSWORD: "${DB_ROOT_PASSWORD}"   
    networks:
      - backend
    volumes:
      - /sessions
    container_name: phpmyadmin
networks:
  frontend:
  backend:
volumes:
    data:""")

f.close()
f = open(website +'\\.env','w+')
f.write("""PHP_VERSION=7.4
MYSQL_VERSION=8
APACHE_VERSION=2.4.54

DB_ROOT_PASSWORD=root
DB_USERNAME=user
DB_PASSWORD=root

PROJECT_ROOT=./public_html""")
f.close()

f = open(mysql +'\\Dockerfile','w+')
f.write("""FROM mysql/mysql-server:5.7


COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

COPY ./sql-scripts/init.sql .""")

print("len de html : "+ str(
  len(os.listdir(html))))

if len(os.listdir(html)) == 0:
  print('No html files found')
  os.system("git clone --branch 2021_E3_GR2 https://github.com/secyourdev/SecChallenge.git " + html)


else:
  print('Found html files')
  os.chdir(html)
  #local = os.system("git rev-parse HEAD" )
  local = subprocess.check_output("git rev-parse HEAD", shell=True)
  local = local.decode('utf-8')[0:40]

  remote = subprocess.check_output("git ls-remote https://github.com/secyourdev/SecChallenge.git 2021_E3_GR2", shell=True)
  remote = remote.decode('utf-8')[0:40]
  print("local : " + local)
  print("remote : " + remote)
  os.chdir(website)
  if local != remote:
    def onerror(func, path, exc_info):
      """
      Error handler for ``shutil.rmtree``.

      If the error is due to an access error (read only file)
      it attempts to add write permission and then retries.

      If the error is for another reason it re-raises the error.
      
      Usage : ``shutil.rmtree(path, onerror=onerror)``
      """
      import stat
      # Is the error an access error?
      if not os.access(path, os.W_OK):
          os.chmod(path, stat.S_IWUSR)
          func(path)
      else:
          raise
    print('Updating html files')
    shutil.rmtree(html,onerror=onerror)
    os.system("git clone --branch 2021_E3_GR2 https://github.com/secyourdev/SecChallenge.git " + html)


os.system("copy " + html + "\\bdd\\dbsite.sql " + sqlscript + "\\init.sql")
os.system("del " + html + "\\bdd\\acces_BDD.php")
f = open(html + '\\bdd\\acces_BDD.php','w+')
f.write("""<?php
try{
    $BDD=new PDO('mysql:host=mysql;dbname=dbsite;charset=utf8','user','root',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(PDOException $e){
    die('Erreur :'.$e->getMessage());
}
?>""")

f.close()
#os.system("start /max http://localhost")
os.system("docker-compose -f "+  website+"\\docker-compose.yml up --build")


