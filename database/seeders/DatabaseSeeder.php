<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        // User::factory(10)->create();

       //User::factory()->create([
         //   'name' => 'Test User',
         //   'email' => 'test@example.com',
        //]);

        Listing::factory(6)->create();
        Post::factory(6)->for($user)->create(['user_id' => $user->id]);
    }
}
