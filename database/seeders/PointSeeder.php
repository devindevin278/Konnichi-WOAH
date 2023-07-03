<?php

namespace Database\Seeders;

use App\Models\Point;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 1
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 2
        ]);
        Point::create([
            'unit_id' => 3
        ]);
        Point::create([
            'unit_id' => 3
        ]);
        Point::create([
            'unit_id' => 3
        ]);
        Point::create([
            'unit_id' => 3
        ]);
    }
}
