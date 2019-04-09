<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, rand(4,7))->create()->each(function($category) {
            $category->article()->saveMany(factory(App\Article::class, rand(5,15))->make());
        });

    }
}
