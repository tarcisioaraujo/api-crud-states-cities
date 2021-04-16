<h1 align="center">API CRUD States Cities</h1>

A State and City CRUD API built on Laravel 7 and documented with Swagger

<p align="center">		
	<img src="https://img.shields.io/github/license/tarcisioaraujo/api-crud-states-cities?style=plastic" alt="License">	 
</p>

<p align="center">
	<a href="#computer-technology">Technology</a> •		
	<a href="#runner-starting">Starting</a> •
	<a href="#warning-prerequisites">Prerequisites</a> •
	<a href="#elephant-php-configuration">PHP configuration</a> •
	<a href="#hammer_and_wrench-installation">Installation</a> •	
	<a href="#construction_worker-author">Author</a>
	<a href="#memo-license">License</a>
</p>

## :computer: Technology 

- [Laravel](https://laravel.com/)
- [PHP](https://www.php.net/)
- [Swagger](https://swagger.io/)

## :runner: Starting

These instructions will provide you with a copy of the project installed and running on your local machine.

## :warning: Prerequisites 

What you need to install the application

```
PHP 7.2.5 - 7.4.16
Composer >= 1.4.2
Node >= 8.6.0
```
### :elephant: PHP configuration 

```
# Enable features in php.ini
extension=mbstring
extension=openssl
extension=pdo_sqlite
extension_dir = "ext"
```

## :hammer_and_wrench: Installation

Steps to run the application

```
# Clone
git clone https://github.com/tarcisioaraujo/api-crud-states-cities.git

# Access the directory
cd api-crud-states-cities

# Install and update Composer dependencies (takes a few minutes ☕)
composer install
composer update

# Install Node JS dependencies
npm install

# Set environment variables
cp .env.example .env
php artisan key:generate

# Change the .env file to look like this
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
//DB_DATABASE=homestead
//DB_USERNAME=homestead
//DB_PASSWORD=secret

# Add in .env file this
L5_SWAGGER_GENERATE_ALWAYS=true
SWAGGER_VERSION=2.0

# Create SQLite database file
copy con .\database\database.sqlite
<press the F6 key>

# Create Database tables
php artisan migrate

# Run PHP Server
php artisan serve

# Access address
http://localhost:8000/api/documentation
```
## :construction_worker: Author

<a href="https://github.com/tarcisioaraujo">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/47223046?v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Tarcísio Silva de Araújo</b></sub></a> <a href="https://github.com/tarcisioaraujo" title="GitHub"></a>

Made by Tarcísio Silva de Araújo 👋

[![Linkedin Badge](https://img.shields.io/badge/-Tarcísio-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/tarcisiosaraujo/)](https://www.linkedin.com/in/tarcisiosaraujo/) 
[![Gmail Badge](https://img.shields.io/badge/-tarcisio.saraujo@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:tarcisio.saraujo@gmail.com)](mailto:tarcisio.saraujo@gmail.com)

## :memo: License

This project is under license [MIT](./LICENSE).