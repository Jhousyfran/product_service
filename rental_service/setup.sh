#!/bin/bash

cn=$1

docker compose down
sudo rm -rf ./.docker/*
docker compose up -d

docker compose up -d
sleep 5
docker compose exec -it $cn php artisan migrate
docker compose exec -it $cn php artisan voyager:install --with-dummy
docker compose exec -it $cn php artisan db:seed
docker compose exec -it $cn php artisan db:seed --class=PermissionRoleTableSeeder