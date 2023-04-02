# Define variables
DOCKER_COMPOSE=docker compose
DOCKER=docker

# Define targets
.PHONY: build up stop down clean export-bdd

build:
	$(DOCKER_COMPOSE) build

up:
	$(DOCKER_COMPOSE) up -d

stop:
	$(DOCKER_COMPOSE) stop

down:
	$(DOCKER_COMPOSE) down

clean:
	$(DOCKER) container stop secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
	$(DOCKER) container rm secyourdev_server secyourdev_mysql secyourdev_phpmyadmin
	$(DOCKER_COMPOSE) down --volumes --remove-orphans

export-bdd:
	$(DOCKER) exec secyourdev_mysql sh -c 'exec mysqldump --all-databases -uroot -p"root"' > ./bdd/dump.sql
