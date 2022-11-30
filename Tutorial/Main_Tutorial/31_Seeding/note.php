<?php

    /*
        *) Seeding
            -> to make entry data dummy data using laravel
            -> so, while creating the project we some time have to insert the dummy data into database
            -> in that case rather then manually inserting the data into table we will use seeding
        *) How to Generate Seeder file
            -> php artisan make:seeder <seeder_name>
            -> EX:
                -> php artisan make:seeder StudentsSeeder
            -> it will get generated on './database/seeders/<seeder_name>.php
        *) Data Seeding
            -> write code to seed the data into database on that seeder file
        *) Run Seeding for database
            -> php artisan db:seed --class=<seeder_class_name>
            -> EX:
                -> php artisan db:seed --class=StudentsSeeder
            -> this command will seed the data into database
        *) Use Faker Package:
            -> use faker package to generate random valid data to insert while seeding
            -> if you didn't get the faker package by default while installing laravel then you have to manually install it
            -> https://github.com/fzaninotto/Faker
        *) Question:
            1. how we can seed data into database of multiple table?
    */
