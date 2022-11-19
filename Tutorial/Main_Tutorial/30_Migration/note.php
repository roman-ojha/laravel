<?php

    /*
        *) What is Migration
            -> Using Migration we can generate Database table Dynamically with laravel code
            -> We don't need to create the Database Table Manually
            -> we will use migration while developing the project so that other developer can create the same table and it's column as per the migration
        *) Make Table with Migration
            -> php artisan make:migration create_<table_name>_table
            -> EX:
                -> php artisan make:migration create_test_table
            -> it will create the migration file inside './database/migrations/<filename>
            -> it will create two function inside the migration:
                1. up()
                    -> to create the new table in the database
                2. down()
                    -> to delete table from the database
        *) Write code for Column Field
            -> inside up() function on creating table we can add multiple field as much as we want
                Schema::create('test', function (Blueprint $table) {
                    $table->id();
                    $table->string('name');
                    $table->string('address');
                    $table->timestamps();
                });
        *) Migrate Database
                -> php artisan migrate
                -> it will create extra table like 'migrations' table
                -> 'migrations' table is create by the laravel to maintain the information about the migration that we did in the project
        *) Interview Question
            1.
    */
