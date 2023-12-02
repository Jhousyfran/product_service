#!/bin/bash

docker compose down
rm -rf ./.docker/*
docker compose up -d