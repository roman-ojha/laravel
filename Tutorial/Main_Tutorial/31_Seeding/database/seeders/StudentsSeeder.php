<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// First importing DB
use Illuminate\Support\Facades\DB;

// importing package to generate random string
use Illuminate\Support\Str;

// import package to hash password
use Illuminate\Support\Facades\Hash;

use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // this function will get call using two way
        // 1. call this function inside './DatabaseSeeder.php' class
        // 2. calling specific class
        DB::table('students')->insert([
            'sname'=>"roman",
            'saddress'=>"kathmandu",
            'sphone'=>"4321123",
            'sclass'=>2,
            // if you will have the column that you should hash then you will use this: ex: 'password'
            // 'password'=>Hash::make('Roman'),
            // Note here we are hashing it manually but in future we will learn to hash when we are register user account
        ]);

        // also we can generate the random value and then add the data into it
        foreach (range(1, 5) as $value) {
            // Generating 5 Students Data
            DB::table('students')->insert([
                // inserting random data
                'sname'=>Str::random(10),
                // random(<number_of_character>)
                'saddress'=>Str::random(10),
                'sphone'=>Str::random(10),
                'sclass'=>rand(1, 4),
            ]);
        }

        // Using Faker package
        // first we will create a fake data
        $faker = Faker::create();
        error_log($faker->phoneNumber());
        DB::table('students')->insert([
            'sname'=>$faker->name(),
            'saddress'=>$faker->address(),
            'sphone'=>substr($faker->phoneNumber(), 0, 9),
            'sclass'=>rand(1, 4),
            // if you have email
            // email will be unique
            // 'email'=>$faker->unique()->safeEmail(),
        ]);
    }
}
