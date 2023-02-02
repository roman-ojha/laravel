<?php

    /*
        *) What is Controller
            -> Central Unit
            -> Connect View, Model & Routing
            -> When we have to access database we use 'Model' and take it to controller and after that we will pass that data into View
            -> We call Controller from Routing
            -> Controller Decide Which page to open on which routing
        *) Make controller
            -> Command to create new controller
            -> php artisan make:controller UserController
        *) Make function in controller
            -> we will create function of controller in './app/Http/Controllers/userControllers.php'
        *) Call controller from routing
            -> to call controller function we have to create a route on 'web.php'
        *) Passing Params with URL
            -> we can even pass parameter with URL routing and can be able to access that params into controller
            -> we will do that in 'web.php' route
    */
