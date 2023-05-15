<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Author;
use App\Models\Article;
use App\Models\Unit;
use App\Models\Point;
use App\Models\Page;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Author::create([
            'name' => 'devin'
        ]);
        Author::create([
            'name' => 'hasna'
        ]);
        Author::create([
            'name' => 'hansen'
        ]);
        Author::create([
            'name' => 'mike'
        ]);

        Article::create([
            'author_id' => '1',
            'title' => 'test',
            'articlepublish' => '2022-02-02',
            'slug' => 'test',
            'image' => 'post-images/lraBrlhW1pWbgOPgpqXfV4IQH7uGJRDbfxjSE3nn.png',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum officiis laboriosam repellendus eligendi accusamus, earum nemo hic, adipisci unde minima impedit labore assumenda voluptatem. Sequi dolorum libero similique consequuntur, sint in est eligendi ex rem eaque velit voluptates? Dignissimos assumenda, asperiores atque nostrum, nesciunt sint fugiat quasi ducimus dolores aut voluptatum ipsa enim. Cum porro fugit aspernatur, praesentium corporis laborum cupiditate temporibus laboriosam tempora facilis, natus aut magni saepe ipsum neque quisquam blanditiis nihil dolor adipisci maxime. Iure obcaecati consequatur saepe eos. Ullam accusantium officia non, cum dignissimos consectetur necessitatibus fugit alias eligendi ad. Iusto quia mollitia, sapiente, molestiae numquam veritatis molestias vel, atque illo hic corrupti modi saepe architecto tempora. Blanditiis impedit dolorem architecto ipsam dignissimos nemo ullam reiciendis, obcaecati sapiente similique aperiam fuga dolor beatae tenetur cupiditate nostrum at facilis! Laboriosam sint hic minima perferendis rem recusandae quia quo eaque. Amet numquam fugit ex at nulla nihil minus veritatis facilis quia earum reiciendis perferendis ipsam, natus quod doloribus omnis voluptate unde sequi sunt aliquid, quas laudantium quis tenetur! Corporis quaerat esse nihil consectetur dignissimos dolore ab delectus illo, nam sunt ipsa corrupti laborum amet voluptatem nemo quo cum, veniam, quam optio inventore repellendus voluptate voluptates quos ea. Ad fugiat voluptatem dicta rerum, pariatur earum. Provident quaerat quae eos nulla in corporis repellendus laboriosam sed deserunt illo iure repudiandae, exercitationem odit! Ea molestiae explicabo quae blanditiis ex, aliquam voluptatum obcaecati optio temporibus veniam quas sunt dignissimos sint tenetur iusto, suscipit inventore esse doloribus enim autem. Quisquam dolore optio tempora rem voluptatum maiores qui aspernatur at nostrum pariatur? Velit libero corporis dolore, enim aliquid distinctio non quas? Iste optio exercitationem fugit harum quod, mollitia eveniet illum accusantium sequi molestias ad deleniti odio recusandae autem incidunt consequuntur velit esse. Consequatur eum molestias saepe tempora cum ipsa voluptates sunt sed excepturi repellat?',
        ]);

        Unit::create([
            'Content' => 'Greeting people and Introducing yourself',
            'color' => '#58CC02'
        ]);
        Unit::create([
            'Content' => 'Asking for direction and get around the city',
            'color' => '#CE82FF'
        ]);
        Unit::create([
            'Content' => 'Order food and drink',
            'color' => '#00CD9C'
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

        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-1',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-2',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-3',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-4',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-5',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-6',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-7',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-8',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-9',
            'pointxp' => 10
        ]);
        Page::create([
            'point_id' => 1,
            'page_name' => 'question1-10',
            'pointxp' => 10
        ]);
    }
}
