<?php

    /*
        *) What is Middleware
            -> to add some specific set of rule like authentication, authorization, parser, session handler etc...
            -> write one time use it anywhere
        *) Middleware Type
            1. Global Middleware
                -> apply for every request
            2. Grouped Middleware
                -> apply for some pages and request
            3. Route Middleware
                -> apply for specific route
        *) Make Middleware
            -> php artisan make:middleware <middleware_name>
            -> here we will create 'checkAge' middleware:
                -> php artisan make:middleware checkAge
            -> which is get generate on './app/Http/Middleware'
            -> and add condition to that middleware
        *) Apply Middleware
            -> on './app/Http/Kernel.php' apply the newly created global middleware middleware
                protected $middleware = [
                    \App\Http\Middleware\checkAge::class,
                ];
            -> inside 'Kernel.php' we can find all 'global', 'grouped', 'route' middleware
        *) Check middleware:
                -> to check the middleware you can go to this url:
                    -> http://127.0.0.1:8000/?age=19
        *) Interview Question
                1. can we apply middleware in controller?
    */
