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
            'unit_id' => 1,
            'title' => "Daily Greetings"
        ]);
        Point::create([
            'unit_id' => 1,
            'title' => 'Take care, be careful!'
        ]);
        Point::create([
            'unit_id' => 1,
            'title' => 'Get Well Soon!'
        ]);
        Point::create([
            'unit_id' => 1,
            'title' => 'Learning Evaluation'
        ]);

        Point::create([
            'unit_id' => 2,
            'title' => 'Getting Around the City'
        ]);
        Point::create([
            'unit_id' => 2,
            'title' => 'Ordering Food'
        ]);
        Point::create([
            'unit_id' => 2,
            'title' => 'Asking for Directions'
        ]);
        Point::create([
            'unit_id' => 2,
            'title' => 'Learning Evaluation'
        ]);

        Point::create([
            'unit_id' => 3,
            'title' => 'What day is it?'
        ]);
        Point::create([
            'unit_id' => 3,
            'title' => 'Yesterday, Tomorrow, and Next Week'
        ]);
        Point::create([
            'unit_id' => 3,
            'title' => 'Happy New Year'
        ]);
        Point::create([
            'unit_id' => 3,
            'title' => 'Learning Evaluation'
        ]);
    }
}
