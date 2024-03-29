# FarmYard
FarmYard is simple application that allows us to count our animals.

![FarmYard](resources/images/farmyard.jpg?raw=true "FarmYard")

*This application forms part of a developer test.*

The application is a Laravel 9 based application, and uses the JetStream UI.

## Requirements
This application is currently set to use a default installation of [Laravel Sail](https://laravel.com/docs/8.x/sail)

Installations of:
- MySQL 8
- PHP 8.0.2+
- Ngnix Web Server
- NodeJS & NPM

should be used if not in a docker environment (although this is encouraged for developement).

## Installation
To install FarmYard, create a fork of the repository and then clone that fork to your system, then install the composer libraries:
`composer install`

Install the required node libraries:
`npm install && npm run dev`

Once you have installed the required libraries, execute the migrations with a seeder
`php artisan migrate --seed`

At the login screen, you can login with `admin@farmyard.xyz` and password `password`

## Developer Test Notes

For the purposes of the test, address as many of the issues as you are able that are listed in the project issue tracker.

- Each commit must be accompanied by a pull request to merge back into this project.
- New features and changes should be accompanied by passing Unit and/or Feature Tests, where apppropriate.

