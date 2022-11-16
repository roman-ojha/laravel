<?php

    /*
        *) What is Route Middleware:
            -> add middleware for specific route only
        *) Make Middleware:
            -> we will create 'routeAgeCheck' middleware name
            -> php artisan make:middleware <middleware_name>
        *) Register it
            -> we will create 'checkAge' route middleware where we will add the newly created middleware in 'Kernel.php'
                protected $routeMiddleware = [
                    '<middleware_name>' => \App\Http\Middleware\routeAgeCheck::class,
                ];
        *) Apply Middleware
            -> now we will apply that middleware on 'web.php' routes
                Route::view('/', 'home')->middleware('checkAge');
        *) Check middleware:
                -> to check the middleware you can go to this url:
                    -> http://127.0.0.1:8000?age=19
        *) Question
                1. can we apply two middleware on same route using route middleware
    */
