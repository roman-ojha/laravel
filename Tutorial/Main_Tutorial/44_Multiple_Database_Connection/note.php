<?php

    /*
        *) DB config
            ->  first we have to add multiple environment variable for multiple database connection
            -> so we have to add another env variable for database
                DB_CONNECTION_2=mysql
                DB_HOST_2=127.0.0.1
                DB_PORT_2=3306
                DB_DATABASE_2=larave_tut
                DB_USERNAME_2=root
                DB_PASSWORD_2=
            -> now we have to go to './config/database.php' and add new database in this case we are adding 'mysql2' database

        *) Make Controller and Model
        *) Multiple DB with Query Builder
            -> we can define which db we want to chose for Query Builder inside Controller
        *) Multiple DB with Model
            -> But In case of Model we have to define which Model correspond to which Database for that we have to go to Model files
            -> So, we will connect to another database for 'Student.php' Model
        *) Question
            1. can we do Join Operation on different database tables?
    */
