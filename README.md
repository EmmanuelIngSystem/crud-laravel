
# Basic crud in Laravel
PHP with framework Laravel, HTML and native CSS were used

## Acknowledgements
 - [PHP Elephant](https://www.php.net/manual/es/index.php)
 - [Rasmus Lerdorf](https://toys.lerdorf.com/)
 - [Framework Laravel PHP](https://laravel.com/)
 - [To my family and loved ones](http://localhost/roulette/secrets/imTroll/noAccess.php)

## Authors
- [@EmmanuelIngSystem](https://github.com/EmmanuelIngSystem)

## Features
- Add unit tests with PHPUnit

## Documentation

### Requirements
1. [PHP](https://www.php.net/manual/en/index.php)
2. [Composer](https://getcomposer.org/)
3. [Apache](https://www.apachefriends.org/es/index.html)

> [!NOTE]
> I had problems installing the composer and I solved it with what it says [in this stackoverflow link](https://stackoverflow.com/questions/41489614/composer-setup-installation-error)

### To create the project with global installation
1. Install composer globally or update it
    ```
    composer global require laravel/installer
    ```
2. Create the project in the desired directory
    ```
    laravel new crud-laravel
    ```
    Where "crud-laravel" is the name you want to give to the Laravel project. 
    * We choose "none"
    * PHPUnit
    * We initialize git
    * We choose mysql as the database manager
3. We move to the created directory
    ```
    cd crud-laravel
    ```
4. We deploy the project locally (in the terminal it tells us the url of the local project; http://127.0.0.1:8000)

### Database and migrations
* By default, the database connection configuration comes like this (in the .env file that comes in the root of the project)
    ```
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=crud_laravel
	DB_USERNAME=root
	DB_PASSWORD=
    ```
1. We create the database with the following command (it asks if I want to create it and with which database manager, which in our case would be mysql)
    ```
    php artisan migrate
    ```
    > [!NOTE]
    > With this command we create it and it also creates some default tables that come with Laravel

### Controller and model
1. We create a model, migration and controller with the following command, where "Project" is the name of the model class or Laravel model,
a migration in plural and lowercase with the same name (projects), the controller creates it with its default name called "Controller" located in app\Http\Controllers\Controller.php
    ```
    php artisan make:model Project -mc
    ```
2. We refresh with the following command to be able to update the migrations
    ```
    php artisan migrate:fresh
    ```
3. We create a route with "resource" as the first parameter is a string that we want (which is the one that has to be put in the localhost url) and the second
parameter the name of the controller class with ::class it is as if we were instantiating the class as an object and being able to invoke it
    > [!NOTE]
    > I had to import the controller because that part was not included in the tutorial (use App\Http\Controllers\ProjectController;)
* To see the list of routes or endpoints in case it is an API we use the following command
    ```
    php artisan route:list
    ```
* To create a view is with the following command
    ```
    php artisan make:view name_view
    ```

### Notes
> [!NOTE]
> For the CSS I based myself on the bootstrap framework and doing only native CSS

> [!NOTE]
> [How to customize Laravel validation error messages](https://dev.to/rodolfovmartins/validation-error-messages-in-laravel-customizing-and-localizing-feedback-1d4k)

> [!NOTE]
> [I based myself on this tutorial to make the crud](https://www.cursosdesarrolloweb.es/blog/crud-laravel)