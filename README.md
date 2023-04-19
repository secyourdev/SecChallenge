# Cybersecuriteach V1

Cybersecuriteach is a website for cyber security awareness by learning different hacking techniques.

## A. Setting up your live development environment

### 1. TLDR

#### Linux

| Command           | Description                                    |
| ----------------- | ---------------------------------------------- |
| `make build`      | Build images                                   |
| `make up`         | Start containers                               |
| `make stop`       | Stop containers                                |
| `make down`       | Stop and delete containers                     |
| `make clean`      | Stop, delete containers, volumes and images |
| `make export-bdd` | Export database in `bdd/dump.sql`              |

See `Makefile` file for details.

#### Windows

- Build images
```powershell
docker-compose build
```

- Start containers
```powershell
docker-compose up -d
```

- Stop containers
```powershell
docker-compose stop
```

- Stop and delete containers
```powershell
docker-compose down
```

- Stop, delete containers, volumes and images
```powershell
docker container stop secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
docker container rm secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
docker-compose down --volumes --remove-orphans
```

### 2. Requirements

#### Linux

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

#### Windows (please use Linux)

You need to install [git](https://git-scm.com/), [github-cli](https://github.com/cli/cli), [docker](https://www.docker.com/).

#### Configuration

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

If you are using Windows, replace the following commands with the commands for windows specified in the above TLDR section.

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
rm -f ./bdd/init.sql && cp ./bdd/dump.sql ./bdd/dbsite.sql
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



# CyberSecuriTeach V2

## Lancement de la plateforme 

### Prérequis

Il est nécessaire d'avoir installé sur votre machine les logiciels suivants :
- Linux avec apt
  1. docker 
  2. docker compose 
  3. git 
- Windows 
  1. docker desktop via le [site officiel](https://www.docker.com)
  2. git via le [site officiel](https://git-scm.com/downloads). Il faut que git soit installé sur le même disque que votre os.

Pour lancer la plate-forme, vous pourrez télécharger le fichier d'exécution nécessaire pour votre système d'exploitation.
Pour les systèmes Windows, vous pourrez télécharger le fichier **script.exe**, pour les systèmes Unix, vous pourrez télécharger le fichier **script.sh** disponible dans le github.

### Utilisation des exécutables

- Windows
    Avant de lancer le **.exe** assurez-vous que docker est bien lancé sur votre machine. Si ce n'est pas le cas, vous pouvez le lancer via le menu démarrer de Windows. Il vous faudra peut être suivre les indications de docker et installer wsl (windows subsystem for linux) pour pouvoir lancer docker. 
    
    Une fois le script lancé, vous pourrez choisir le port sur lequel vous souhaitez lancer la plateforme. Par défaut, le port 80 est utilisé. 
    La branche que vous voulez utiliser pour l'affichage du site web est également à choisir. Par défaut, la branche main est utilisée.
    Enfin vous pouvez choisir si vous souhaitez réécrire les fichiers de configuration de docker-compose. Par défaut, les fichiers de configuration ne sont pas réécrits. Si vous voulez changer le port au second lancement, vous devrez donc choisir de réécrire les fichiers de configuration.

##
- Unix
    Tout d'abord il faut rendre le fichier **.sh** exécutable. Pour cela, vous pouvez utiliser la commande suivante : 
    
    ```bash 
    chmod +x script.sh
    ```
    Une fois le script rendu exécutable, vous pouvez lancer le script avec la commande suivante : 
    
    ```bash 
    ./script.sh -h
    ```
    Vous aurez alors l'explication des différents paramètres que vous pouvez utiliser pour lancer le script.
    Lancer le script sans paramètre lancera la plateforme avec les paramètres par défaut. La commande sera donc équivalente à : 
    
    ```bash 
    ./script.sh -p 80 -b main
    ```

Vous pouvez alors explorer le site et vous connecter avec le compte admin pour plus de rapidité : user:a password:a

## Ajout d'un nouvel élément dans la plateforme 


Pour ajouter un nouvel élément dans la plateforme vous devez créer un html dans le dossier souhaité ( en essayant de maintenir une certaine logique dans l'arborescence). Attention au lien des images, il faut qu'ils soient bien en fonction de l'arborescence du site et non pas d'une machine personnelle.
Il vous faut ensuite ajouter dans la base de données le lien vers votre nouvel élément. Pour cela, vous devez vous rendre dans le fichier /bdd/dbsite.sql et ajouter une ligne dans la table correspondante. Pour connaitre les champs à remplir vous pouvez vous référer à la première ligne de la table ou aux autres lignes déjà présentes.

### Les différentes arborescences

- Les fichiers à télécharger par les étudiants doivent être mis dans le fichier download du site puis faire un lien href dans le fichier HTML.
- L'intégralité des dockers doit être mise dans le dossier docker du site pour maintenir une continuité dans le fonctionnement de la plateforme.
- Les solutions des challenges doivent être placée dans le dossier solution du site.

### Tester avant de push

Si vous voulez tester votre ajout avant de push, vous pouvez vous déplacer dans le dossier Website créer par le script et lancer la commande suivante :

```bash 
docker-compose up
```
Vous pourrez alors tester votre ajout sur le site. 

