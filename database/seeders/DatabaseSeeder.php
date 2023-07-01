<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Page;

use App\Models\Unit;
use App\Models\User;
use App\Models\Point;
use App\Models\Author;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            ArticleSeeder::class,
            UnitSeeder::class,
            PointSeeder::class,
            PageSeeder::class,
            NotebookSeeder::class,
            BubblechatSeeder::class
        ]);


        $this->call(ArticleSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
    }
}
