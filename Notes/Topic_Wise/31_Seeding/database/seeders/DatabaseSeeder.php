<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // we will add the './StudentsSeeder.php' class 'run' function to see the data into database
        $this->call([
            // we will call 'call' method and add list of class that we want to run when we will run the command seed
            StudentsSeeder::class,
        ]);
    }
}
