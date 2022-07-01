First of all install laravel inside your project 

FROM curl

$ curl -L https://github.com/laravel/laravel/archive/v8.5.21.tar.gz | tar xz

FROM git

$ git clone https://github.com/laravel/laravel.git

next rename your project and get in

$ cd my_project

install dependencies in your host && the container using volumes

$ docker run --rm -v $(pwd):/app composer install

take a look inside the docker-compose , app.dockerfile and web.dockerfile to understand what will be built

create a .env file and paste here the content of .env.example

now set these environments vars in .env file

DB_HOST=database
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel-user
DB_PASSWORD=laravel-password
MAIL_HOST=mailhog
MAIL_PORT=1025

FINALLY

$ docker-compose up -d --build

it can take some minutes

GENERATE KEY AND OPTIMIZE WITH ARTISAN inside the containers

$ docker-compose exec app php artisan key:generate

$ docker-compose exec app php artisan optimize

NOW check http://localhost in your browser

if you have any related error with permissions in storage directory

$ sudo chmod -R 777 ./storage
