<?php

namespace Database\Seeders;

use App\Models\Notebook;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NotebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        for($i=0; $i<20; $i++) {
            Notebook::create([
                'unit_id' => 1
            ]);
        }
        for($i=0; $i<10; $i++) {
            Notebook::create([
                'unit_id' => 2
            ]);
        }

        for($i=0; $i<10; $i++) {
            Notebook::create([
                'unit_id' => 3
            ]);
        }

    }
}
