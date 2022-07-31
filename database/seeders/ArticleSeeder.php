<?php

namespace Database\Seeders;

use App\Article;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i <= 100; $i++) {
            Article::create([
                'title'                => $faker->sentence(),
                'body'       => $faker->text(),
                'tags'          => collect(['php', 'ruby', 'java', 'javascript', 'bash'])
                ->random(2)
                ->values()
                ->all(),
            ]);
        }
    }
}
