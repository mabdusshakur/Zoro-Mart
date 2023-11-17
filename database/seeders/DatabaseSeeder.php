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

        \App\Models\User::create([
            'first_name' => 'The',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin1'),
            'is_admin' => '1',
        ]);
        
    }
}
