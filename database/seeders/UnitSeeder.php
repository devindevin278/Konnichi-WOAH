<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Unit::create([
            'Content' => 'Greeting people and introducing yourself',
            'color' => '#58CC02'
        ]);
        Unit::create([
            'Content' => 'Order food and drink',
            'color' => '#CE82FF'
        ]);
        Unit::create([
            'Content' => 'Asking for direction and get around the city',
            'color' => '#00CD9C'
        ]);
    }
}
