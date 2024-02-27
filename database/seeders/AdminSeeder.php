<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@email.com',
            'phone' => '0812134567',
            'password' => Hash::make('12345')
        ]);

        Admin::create([
            'name' => 'Admin1',
            'username' => 'admin1',
            'email' => 'admin@email1.com',
            'phone' => '0812134567',
            'password' => Hash::make('12345')
        ]);

        Admin::create([
            'name' => 'Admin2',
            'username' => 'admin2',
            'email' => 'admin@email2.com',
            'phone' => '0812134567',
            'password' => Hash::make('12345')
        ]);
    }
}
