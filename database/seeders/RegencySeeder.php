<?php

namespace Database\Seeders;

use App\Models\Regency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $csvFile = fopen(base_path("database/data/regencies.csv"), "r");

        $firstline = true;

        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {

            if (!$firstline) {
                Regency::create([
                    "id" => $data['0'],
                    "province_id" => $data['1'],
                    "regency_name" => $data['2']
                ]);
            }

            $firstline = false;
        }

        fclose($csvFile);
    }
}
