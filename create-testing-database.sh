#!/usr/bin/env bash

mysql --user=root --password="$MYSQL_ROOT_PASSWORD" <<-EOSQL
    CREATE DATABASE IF NOT EXISTS laravel_vue;
    GRANT ALL PRIVILEGES ON \`laravel_vue%\`.* TO '$MYSQL_USER'@'%';
EOSQL
