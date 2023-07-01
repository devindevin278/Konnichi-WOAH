<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Article::create([
            'author_id' => '1',
            'title' => 'hi1',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi1',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '2',
            'title' => 'hi2',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi2',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '3',
            'title' => 'hi3',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi3',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '4',
            'title' => 'hi4',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi4',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);

        Article::create([
            'author_id' => '2',
            'title' => 'hi5',
            'jpntitle' => 'konichiwa',
            'articlepublish' => '2022-02-02',
            'slug' => 'hi5',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit...',
            'jpnbody' => 'JPN Lorem ipsum dolor sit amet, consectetur adipisicing elit...'
        ]);
    }
}
