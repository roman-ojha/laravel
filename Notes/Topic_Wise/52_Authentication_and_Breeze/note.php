<?php

    /*
        -> After Initialized Breeze Auth it will create a Routes, Controller, Request, Lang, Views, Provider etc..
        -> also by default it uses the 'User' Model
        -> also laravel already had defined the migration for the User Model
        -> if you want to change the error message provided by laravel auth then you can go to './lang/en/**' file

        *) Login Throttle
            -> when you will try to login but if password did not match and you try to login for number of times then it will stop you to login for certain second
            -> Laravel by default uses Login Throttle
            -> you can change the number of times on './app/Http/Controllers/Requests/Auth/LoginRequest.php'
            -> by default it will evaluate the time to throttle using user email

        *) Email configuration:
                -> for that you have to fill environment variable on '.env' file
                MAIL_MAILER=smtp
                MAIL_HOST=mailhog
                MAIL_PORT=1025
                MAIL_USERNAME=null
                MAIL_PASSWORD=null
                MAIL_ENCRYPTION=null
                MAIL_FROM_ADDRESS="hello@example.com"
                MAIL_FROM_NAME="${APP_NAME}"

    */
