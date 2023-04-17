# Define variables
DOCKER_COMPOSE=docker-compose
DOCKER=docker

# Define targets
.PHONY: build up stop down clean export-bdd

# Construire les images
build:
	$(DOCKER_COMPOSE) build

# Démarrer les conteneurs
up:
	$(DOCKER_COMPOSE) up -d

# Arrêter les conteneurs
stop:
	$(DOCKER_COMPOSE) stop

# Arrêter et supprimer les conteneurs
down:
	$(DOCKER_COMPOSE) down

# Arrêter et supprimer les conteneurs, les volumes, et images
clean:
	$(DOCKER) container stop secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
	$(DOCKER) container rm secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
	$(DOCKER_COMPOSE) down --volumes --remove-orphans

# Exporter la base de données
export-bdd:
	$(DOCKER) exec secyourdev_mysql sh -c 'exec mysqldump --all-databases -uroot -p"root"' > ./bdd/dump.sql
