<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
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
        User::create([
            'role_id' => 3,
            'name' => 'admin',
            'username' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        Role::create([
            'name' => 'Operator'
        ]);
        Role::create([
            'name' => 'Verifikator',
        ]);
        Role::create([
            'name' => 'SuperAdmin',
        ]);
        Role::create([
            'name' => 'Owner',
        ]);

        City::factory(10)->create();
        District::factory(20)->create();
    }
}
