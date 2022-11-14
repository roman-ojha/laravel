<?php

    /*
        *) Setup:
            -> https://laravel.com/docs/9.x/installation
            -> https://laravel.com/docs/9.x/installation#your-first-laravel-project
            -> can install using two way:
            1. Laravel Installer
                -> composer global require laravel/installer
                => create a new project:
                    -> laravel new <app_name>
            2. Using Composer
                -> composer create-project laravel/laravel <app_name>

            => Start laravel server
                -> php artisan serve

        *) File and folder Structure:
            -> app:
                -> can write core code that contain:
                    1. Controller
                    2. Model
                    3. Middleware
                    4. Service Provider
                -> Console:
                    -> to write command and custom command
                -> Exceptions:
                    -> all the exceptions are written there
                -> Http:
                    -> Controller:
                        -> Central unit of Model and View
                    -> Middleware:
                    -> Kernel:
                        -> to register middleware
                -> Models:
                    -> All database related model
                -> Providers:
                    -> Authorization provider
            -> bootstrap:
                -> to load/bootstrap the laravel app
            -> config:
                -> app configuration
                -> database configuration
                -> caching configuration
                -> login configuration
                -> session configuration
            -> database:
                -> migrations
            -> public:
                -> external css
                -> bootstrap css
                -> index.php (first loader)
                -> .htaccess
                    -> server configuration
                    -> user configuration
            -> resources:
                -> un-compiled js, css, view files
                -> write blade template html view
            -> routes:
                -> api routes
                -> channel routes
                -> web routes
            -> storage:
            -> test:
            -> vendor:
                -> contain all the packages and dependencies
            -> artisan
                -> autoload artisan command
            -> package.json
                -> application detail
            -> phpunit.xml
                -> for unit test
            -> composer.json
                -> contain list of dependencies for the project

    */
