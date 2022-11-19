<?php

    /*
        *) What is Maintenance Mode
            -> when we update the application it could be on database or view etc..
            -> in that case we have to put our website into maintenance mode
        *) Start Maintenance Mode
            -> php artisan down
            -> to start maintenance mode
        *) Bypass Maintenance Mode
            -> if we start the maintenance mode but we want to see how our site is performing on maintenance mode in that case we can use bypass
            -> also if we want to give access to some of the user on maintenance mode in that case we can use bypass
            -> in that case we will generate the secret key
            -> php artisan down --secret="<secret_key>"
            -> now if we will go to url : http://localhost:8000/<secret_key>
            -> then we can access the site
        *) Disable Maintenance Mode
            -> php artisan up
            -> to disable maintenance mode
        *) Question:
            1. how can we design our own maintenance mode page?
    */
