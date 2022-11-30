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
        *) How to reset migration
            -> php artisan migrate:reset
            -> to remove the table that is create from the migration we will use reset command
        *) Rollback Migration
            -> php artisan migrate:rollback
            -> to remove the specific migration
            -> EX: let's say that we had did migration 7 times then if we use rollback command then it can remove the last migrated migration
            -> so for that we will fist migrate the table for the first time and the add new table and again we will migrate for the second time
            -> so if we will use 'reset' command then all the table will get removed
            -> but if we will use rollback then only the last migration table will get removed
        *) Rollback steps
            -> if we want to remove multiple table as per given table that get migrated from first to last then we have to use this:
            -> php artisan migrate:rollback --step <number_of_table>
        *) Refresh
            -> php artisan migrate:refresh
            -> when we will change the database structure or change or manipulate the tables in that case we have to again refresh
            -> it will first rollback all the table that get migrated and then will again migrate the table
        *) Single File Migration
            -> If you just want to migrate single table then we can use this:
            -> php artisan migrate --path=/database/migrations/<filename>.php
            -> EX:
                -> php artisan migrate --path=/database/migrations/2022_11_19_135216_create_test_table.php
        *) Migration to Drop column:
            -> EX: php artisan make:migration dropping_price_ram_from_mobile --table=mobile
        *) Migration to create column index:
            -> php artisan make:migration create_tid_unique_index_from_teacher --table=teachers
        *) Migration to Drop column index:
            -> php artisan make:migration drop_tid_unique_index_from_teachers --table=teachers
        *) Migration to add foreign key:
            -> create different migration file to add foreign key constraint rather then adding it while creating the table because in future we can remove that foreign key constraint using that migration file
            ->
        *) Question
            1. How we can migrate 2 table at once
    */
