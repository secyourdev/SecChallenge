# Cybersecuriteach

Cybersecuriteach est un site web de sensibilisation à la cybersécurité en apprenant différentes techniques de hacking.

## Setting up your live development environment

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

To start the services, just run the following command :

```bash
docker-compose up --build -d
```

When you are finish, stop the containers :

```
docker-compose stop
```

### Accessing the website

Now that your containers are running, you can access them on :

- [http://localhost:8080](http://localhost:8080) for the main website
- [http://localhost:8081](http://localhost:8081) for `phpMyAdmin`.

The containers are in a Docker Network, here are the details :

| Service        | Container             | IPv4      | Port |
| -------------- | --------------------- | --------- | ---- |
| PHP Server     | secyourdev_server     | 10.10.0.2 | 8080 |
| MySQL Database | secyourdev_mysql      | 10.10.0.3 | 3306 |
| phpMyAdmin     | secyourdev_phpmyadmin | 10.10.0.4 | 8081 |

### Credentials

To access phpMyAdmin, you need to log in with these credentials : `user:root`

On the main website, you need to register a new account and then login.

## Exporting the database

To create a dump of the database, use the following command :

```bash
docker exec secyourdev_mysql sh -c 'exec mysqldump --all-databases -uroot -p"root"' > ./bdd/dump.sql
```

And now, you can use this dump as the default database :

```bash
rm -f ./bdd/init.sql && cp ./bdd/dump.sql ./bdd/init.sql
```

## Clear

Stop and delete containers :

```bash
docker container stop secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
docker container rm secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
```

Delete images :

```bash
docker image rm
```
