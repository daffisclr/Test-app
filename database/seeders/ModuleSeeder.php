<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\Role;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::create([
            'name' => "home",
            'url' => "admin/home",
            'icon' => 'fa-home',
            'description' => 'Home Module',
            'valid_status' => 1
        ]);

        Module::create([
            'name' => "profile",
            'url' => "admin/profile",
            'icon' => 'fa-user',
            'description' => 'Profile Module',
            'valid_status' => 1
        ]);

        $modules = Module::all();

        Role::all()->each(function ($role) use ($modules) {
            $role->modules()->attach(
                $modules->pluck('id')->toArray(),
                ['valid' => 1, 'C' => 1, 'R' => 1, 'U' => 1, 'D' => 1,]
            );
        });
    }
}
