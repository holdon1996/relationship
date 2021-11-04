<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        RoleUser::create([
            'role_id' => 1,
            'user_id' => 1,
            'status' => 1
        ]);

        RoleUser::create([
            'role_id' => 2,
            'user_id' => 1,
            'status' => 1
        ]);

        RoleUser::create([
            'role_id' => 1,
            'user_id' => 2,
            'status' => 0
        ]);

        RoleUser::create([
            'role_id' => 2,
            'user_id' => 3,
            'status' => 1
        ]);

        RoleUser::create([
            'role_id' => 1,
            'user_id' => 4,
            'status' => 0
        ]);
    }
}
