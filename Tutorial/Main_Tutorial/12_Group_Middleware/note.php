<?php

    /*
        *) What is Group Middleware:
            -> add middleware for some pages and routes
        *) Make Middleware:
            -> we will create 'groupCheckAge' middleware name
            -> php artisan make:middleware <middleware_name>
        *) Register it
            -> we will create 'checkUser' group where we will add the newly created middleware in 'Kernel.php'
                protected $middlewareGroups = [
                    'checkUser'=>[
                        \App\Http\Middleware\checkAge::class,
                    ]
                ];
        *) Apply Middleware
            -> now we will apply that middleware on 'web.php' routes
                Route::group(['middleware' =>['<name_of_middleware_group>']], function () {
                    Route::view('/user', 'users');
                });
        *) Check middleware:
                -> to check the middleware you can go to this url:
                    -> http://127.0.0.1:8000/user?age=19
        *) Question
    */
