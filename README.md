# Cybersecuriteach

Cybersecuriteach est un site web de sensibilisation à la cybersécurité en apprenant différentes techniques de hacking.

## Setting up your development environment

### Requirements

You need to install [git](https://git-scm.com/), [github-cli](https://github.com/cli/cli) and [docker](https://www.docker.com/).

Using APT (Debian based linux) :
```bash
sudo apt update
sudo apt install -y git gh docker.io docker-compose
```

Using pacman (Arch Linux) :
```bash
sudo pacman -S git
sudo pacman -S github-cli 
sudo pacman -S docker
```

First, login with GitHub and store your credentials within git :

```bash
gh auth login
```

You can now clone the repository :

```bash
git clone https://github.com/secyourdev/SecChallenge.git
```

And move to your group branch :

```
git checkout <name_of_your_group>
```

### Run the website

Il faut maintenant récuperer le ficher script.sh puis vous place dans le bon répertoire pour effectuer les commandes suivantes:
 
### Accessing the website

Now that your containers are running, you can access them on :

- [http://localhost](http://localhost) for the main website
- [http://localhost:8081](http://localhost:8081) for `phpMyAdmin`.

## Exporting the database

To create a dump of the database, use the following command :

```bash
docker exec some-mysql sh -c 'exec mysqldump --all-databases -uroot -p"$MYSQL_ROOT_PASSWORD"' > /some/path/on/your/host/all-databases.sql
```

## Clear

Stop and delete containers :
```bash
docker container stop secyourdev_php secyourdev_apache phpmyadmin mysql
docker container rm secyourdev_php secyourdev_apache phpmyadmin mysql
```

Delete images :
```bash
docker image rm 
```
