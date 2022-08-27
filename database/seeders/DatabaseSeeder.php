<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
     $user= \App\Models\User::factory()->create([
        'name' => 'Test User',
             'email' => 'test@example.com'

     ]);
     \App\Models\blog::factory(17)->create([
        'user_id'=>2
     ]);
    }
}
