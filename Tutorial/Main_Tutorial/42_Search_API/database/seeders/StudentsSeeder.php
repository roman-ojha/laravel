<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// First importing DB
use Illuminate\Support\Facades\DB;

// importing package to generate random string
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0;$i<5;$i++) {
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
    }
}
