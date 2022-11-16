<?php

    /*
        *) What is Model
            -> Map Database table with Laravel Class Name
            -> EX:
                if database table name is 'users' then we will create model 'user',
                -> 'employees' table map to 'employee' model
            -> NOTE: database name should be plural & model name should be singular
            -> Define Database Structure
            -> Write Business Logic
            -> previously we fetch database data from Class on Controller
            -> But now we will use Model to access data
        *) Make Model
            -> we will create a new model from scratch
            -> NOTE: because I am trying to create model of 'students' table so I will create model name "Student"
            -> command to create model:
                -> php artisan make:model <model_name>
                -> php artisan make:model <model_name>
        *) Fetch Data from Model
        *) Show Data
            -> we will use 'UserController' to access model and fetch data
        *) Modify Model:
            -> we will modify some stuff as per our requirement on './app/Models/Student.php'
        *) Question
            1. can we fetch two table data from one Model?
    */
