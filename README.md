# FarmYard
FarmYard is simple application that allows us to count our animals.

![FarmYard](resources/images/farmyard.jpg?raw=true "FarmYard")

*This application forms part of a developer test.*

The application is a Laravel 8 based application, and uses the JetStream UI.

## Requirements
This application is currently set to use a default installation of [Laravel Sail](https://laravel.com/docs/8.x/sail)

Installations of:
- MySQL 8
- PHP 7.4+
- Ngnix Web Server
- NodeJS & NPM

should be used if not in a docker environment (although this is encouraged for developement).

## Installation
To install FarmYard, clone the repository to your system, then install the composer libraries:
`composer install`

Install the required node libraries:
`npm install && npm run dev`


## Developer Test Notes

For the purposes of the test, perform a fork of the repository and then address as many of the issues as you are able that are listed in the project issue tracker.

- Each commit must be accompanied by a pull request to merge back into this project.
- New features and changes should be accompanied by passing Unit and/or Feature Tests, where apppropriate.

