<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listings;
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
        $user = User::factory()->create([
            'name' => 'Jefferson',
            'email' => 'jeff@gmail.com'
        ]);

        Listings::factory(10)->create([
            'user_id' => $user->id
        ]);
    }
}
