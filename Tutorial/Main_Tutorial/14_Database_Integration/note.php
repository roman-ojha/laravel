<?php

    /*
        *) Configure Database
            -> by default laravel & php have best integration with MySQL database so we will use the same database here
            -> now change the value of database environment variable inside .env file as per you environment:
                DB_CONNECTION=mysql
                DB_HOST=127.0.0.1
                DB_PORT=3306
                DB_DATABASE=larave_tut
                DB_USERNAME=root
                DB_PASSWORD=
        *) Checkout Database
            -> we can see the database configuration on './config/database.php' file
            -> 'default' => env('DB_CONNECTION', 'mysql'),
                -> env('<env_value>','<if_didn't_find_env_value>')
            -> you can see all the config that is happening in that file
        *) Import DB class
        *) Fetch Data from mysql
            -> Create a controller and route it to that controller to get access
            -> then we will write required code on that 'UserController.php' file
        *) Question
            1. Can we ues MongoDB, Postgres Sql into laravel server?
    */
