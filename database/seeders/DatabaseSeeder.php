<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use App\Models\City;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // City::factory(20)->create();  //must befor clients
        // Client::factory(10)->create();
         // Create roles
         Role::factory(5)->create();

         // Create users and assign roles
         User::factory(10)->create()->each(function ($user) {
             // Assign random roles to each user
             $roles = Role::inRandomOrder()->take(rand(1, 3))->pluck('id');
             $user->roles()->attach($roles);
         });

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
