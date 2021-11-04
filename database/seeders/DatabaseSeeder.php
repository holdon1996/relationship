<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory()->create();
        $this->call(UsersTableSeeder::class);
        $this->call(PhonesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
