<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'rolename' => 'Admin',
            'description' => 'Admin Role',
            'valid_status' => 1,
        ]);

        Role::create([
            'rolename' => 'Alumni',
            'description' => 'Alumni Role',
            'valid_status' => 1,
        ]);
    }
}
