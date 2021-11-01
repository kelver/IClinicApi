## PHP Challenge

Este repositório contém a implementação de um desafio, que consiste em criar uma API, com um único endpoint para a criação de prescrições médicas, com informações baseadas e dependentes de serviços de terceiros.
## Deploy
Foi feito um deploy de teste da aplicação em um container da DigitalOcean rodando Docker com essas mesmas configurações, através do workflow de CI e CD usando github actions, disponibilizado em:

[IClinicAPI](https://testeva.ga/)

## Installation

Clone o projeto, acesse a pasta laradock, e caso prefira, altere as configurações do nginx, mysql e redis a sua preferência, caso prefira manter como está, está pronta para executar a

A partir da pasta do projeto:

```sh
cd laradock
docker-compose up -d nginx mysql redis
docker-compose exec workspace bash
```
Dentro do container, configure a aplicação

```sh
composer install
php artisan key:generate
```
Configure o .env com os dados de acesso configurados no seu ambiente, o default está o seguinte:

```sh
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=default
DB_PASSWORD=secret

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```
Execute as migrations

```sh
php artisan migrate
```
Assim, a aplicação deve estar pronta para ser executada em:
```sh
http://localhost
```

Dando assim, acesso à documentação e ao repositório.

## License

[MIT](https://choosealicense.com/licenses/mit/)
_______________
