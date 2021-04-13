# Kanye West quotes generator

## Setup

This app is made in Laravel 8 framework under Docker environment.
It requires having Docker installed on your local machine.
I decided to go with Docker for easier local development and Laravel offers a good preconfigured Docker package called Sail.

After downloading the project from repository, "cd" into project directory and execute 
```
$ composer install
```
to install all required dependencies.
After that execute 
```
$ vendor/bin/sail up
```
to build the Docker containers and services.

Then run the migrations to set up the database
```
$ vendor/bin/sail artisan migrate
```


## Use
Go to ```http://localhost``` to see some fresh Kanye West quotes.
Hit Refresh button to fetch new random quotes.

Go to ```http://localhost/reports``` to see some statistical data about made requests.


## Tests
This package comes with tests for PHPUnit 9.3.
To run tests execute 

```$ sail artisan test```

