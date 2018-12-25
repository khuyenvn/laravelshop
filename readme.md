
## Laravel Shop

This project using for sales management developed with  Laravel Framework.

## Development Environment
### Requirements

Docker and docker-compose are required to run this application on your local machine.

- [Docker](https://www.docker.com/) version 18.03.1-ce
- [docker-compose](https://docs.docker.com/compose/) version 1.21.1

```
$ docker -v
Docker version 18.03.1-ce, build 9ee9f40
$ docker-compose -v
docker-compose version 1.21.1, build 5a3f1a3
```

Laravel 5.6.*

https://laravel.com/docs/5.6/installation

Laravel Collective

composer require "laravelcollective/html":"^5.4.0"

Git

git
$ git --version
git version 2.17.0

# How to Run

1. Clone this repository.

```
$ git@github.com:khuyenvn/laravelshop.git
```

2.  Build and run docker

```
docker run --name localdb -e MYSQL_ROOT_PASSWORD=secret -d mysql:5.7
docker start localdb
```
3. Create tables

```
$ cd laravelshop
php artisan migrate
```

If you need some data, please do seeding.

```
$ php artisan db:seed
```
4. Start server

```
$ cd laravelshop
php artisan serve
```

5. Open it on your web browser.

Access *http://localhost:8000/* on your web browser (Front End)
Access *http://localhost:8000/admin/login* and login with username *khuyentn@gmail.com* and password *secret*