# nginx-php-mysql

- https://github.com/compose-spec/compose-spec
- https://docs.docker.com/compose/compose-file/compose-file-v3/

```bash
mkdir var/lib/mysql var/log/mysql var/log/nginx var/log/php
```

- https://habr.com/ru/companies/nixys/articles/662698/
- https://infostart.ru/1c/articles/1690130/
- https://medium.com/@tech_18484/deploying-a-php-web-app-with-docker-compose-nginx-and-mariadb-d61a84239c0d
- https://timeweb.cloud/tutorials/laravel/kak-nastroit-laravel-nginx-i-mysql-s-pomoschyu-docker-compose

## Запуск docker-compose

Базовые ключи для запуска docker-compose, которые необходимо знать:

up - поднимает контейнер с выводом в консоль.
`docker-compose up`

-d - поднимает контейнер без вывода в консоль.
`docker-compose up -d`

--force-recreate перечитывает конфигурацию docker-compose.yml и поднимает контейнер с учетом новых параметров в docker-compose.yml
`docker-compose up -d --force-recreate`

--build перечитывает Dockerfile и поднимает контейнер с учетом новых параметров в Dockerfile и docker-compose.yml
`docker-compose up -d --build`

## Dockerfile Build

```bash
cd volumes/build/php-fpm8.1
docker build .
```

## Setup DB

```sql
CREATE USER 'newuser'@'%' IDENTIFIED BY 'password';
CREATE DATABASE mydatabase;
GRANT ALL PRIVILEGES ON mydatabase.* TO 'newuser'@'%';
FLUSH PRIVILEGES;
```

% обозначает что пользователь может подключаться из под любого хоста - это важно т.к. разные контейнеры расположены на разных хостах(ip разные)

```sql
REVOKE ALL PRIVILEGES, GRANT OPTION FROM 'newuser'@'%';
DROP USER 'newuser'@'%';
```
