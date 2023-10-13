COMPOSE=docker-compose -f /home/mdegraeu/inception/srcs/docker-compose.yml

all: up

up:
	${COMPOSE} up -d

up_build:
	${COMPOSE} up -d --build

down:
	${COMPOSE} down

start:
	${COMPOSE} start

restart:
	${COMPOSE} restart

stop:
	${COMPOSE} stop

build:
	${COMPOSE} build

ps:
	${COMPOSE} ps

images:
	${COMPOSE} images

volume:
	${COMPOSE} volume ls

fclean: down
	sudo rm -rf /home/${USER}/data/wordpress/*
	sudo rm -rf /home/${USER}/data/mariadb/*

prune: fclean
	sudo docker system prune -f -all

re: fclean all

.PHONY: all up build start restart stop down ps images volume fclean prune re 

