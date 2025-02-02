<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrator',
        ]);

        Role::create([
            'name' => 'Employee',
        ]);

        Role::create([
            'name' => 'Client',
        ]);
    }
}
