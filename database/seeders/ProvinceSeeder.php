<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['name' => 'Aceh'],
            ['name' => 'Bali'],
            ['name' => 'Bangka Belitung Islands'],
            ['name' => 'Banten'],
            ['name' => 'Bengkulu'],
            ['name' => 'Central Java'],
            ['name' => 'Central Kalimantan'],
            ['name' => 'Central Sulawesi'],
            ['name' => 'East Java'],
            ['name' => 'East Kalimantan'],
            ['name' => 'East Nusa Tenggara'],
            ['name' => 'Gorontalo'],
            ['name' => 'Jakarta Special Capital Region (DKI Jakarta)'],
            ['name' => 'Jambi'],
            ['name' => 'Lampung'],
            ['name' => 'Maluku'],
            ['name' => 'North Kalimantan'],
            ['name' => 'North Maluku'],
            ['name' => 'North Sulawesi'],
            ['name' => 'North Sumatra'],
            ['name' => 'Papua'],
            ['name' => 'Riau'],
            ['name' => 'Riau Islands'],
            ['name' => 'South Kalimantan'],
            ['name' => 'South Sulawesi'],
            ['name' => 'South Sumatra'],
            ['name' => 'Southeast Sulawesi'],
            ['name' => 'West Java'],
            ['name' => 'West Kalimantan'],
            ['name' => 'West Nusa Tenggara'],
            ['name' => 'West Papua'],
            ['name' => 'West Sulawesi'],
            ['name' => 'West Sumatra'],
            ['name' => 'Yogyakarta Special Region'],
        ];

        Province::insert($provinces);
    }
}
