#!/bin/bash
docker-compose stop
docker rm -vf $(docker ps -a -q)
docker rmi -f $(docker images -a -q)
docker-compose up --build -d
docker-compose exec fpm chmod -R 775 storage
docker-compose exec fpm chmod -R 775 bootstrap
docker-compose exec fpm composer install -vvv
docker-compose exec fpm cp .env.example .env
rm database/database.sqlite 
touch database/database.sqlite
docker-compose exec fpm php artisan migrate
