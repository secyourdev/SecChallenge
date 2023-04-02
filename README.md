# Cybersecuriteach

Cybersecuriteach is a website for cyber security awareness by learning different hacking techniques.

## A. Setting up your live development environment

### 1. TLDR

| Command           | Description                                    |
| ----------------- | ---------------------------------------------- |
| `make build`      | Build images                                   |
| `make up`         | Start containers                               |
| `make stop`       | Stop containers                                |
| `make down`       | Stop and delete containers                     |
| `make clean`      | Stop and delete containers, volumes and images |
| `make export-bdd` | Export database in `bdd/dump.sql`              |

See `Makefile` file for details.

### 2. Requirements

You need to install [git](https://git-scm.com/), [github-cli](https://github.com/cli/cli), [docker](https://www.docker.com/) and make.

Using APT (Debian based linux) :

```bash
sudo apt update
sudo apt install -y git gh docker.io docker-compose make
```

Using pacman (Arch Linux) :

```bash
sudo pacman -S git github-cli docker make
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

### 3. Run the website

First, build the images :

```bash
make build
```

Then, start the containers :

```bash
make up
```

Stop the containers :

```bash
make stop
```

### 4. Accessing the website

Now that your containers are running, you can access them on :

- [http://localhost:8080](http://localhost:8080) for the main website
- [http://localhost:8081](http://localhost:8081) for `phpMyAdmin`.

The containers are in a Docker Network, here are the details :

| Service        | Container             | IPv4      | Port |
| -------------- | --------------------- | --------- | ---- |
| PHP Server     | secyourdev_server     | 10.10.0.2 | 8080 |
| MySQL Database | secyourdev_mysql      | 10.10.0.3 | 3306 |
| phpMyAdmin     | secyourdev_phpmyadmin | 10.10.0.4 | 8081 |

## B. Credentials

To access phpMyAdmin, you need to log in with these credentials : `user:root`

On the main website, you need to register a new account and then login.

## C. Exporting the database

To create a dump of the database, use the following command :

```bash
make export-bdd
```

> The dump is located at `bdd/dump.sql`

And now, you can use this dump as the default database :

```bash
rm -f ./bdd/init.sql && cp ./bdd/dump.sql ./bdd/init.sql
```

## Clear

Stop and delete containers :

```bash
make down
```

Stop and delete containers, images, and volumes :

```bash
make clean
```
