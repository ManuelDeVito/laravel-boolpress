<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        
        for ($i=1; $i <= 10 ; $i++) {
            $new_post_create = new Post();
            $new_post_create->name = $faker->firstname();
            $new_post_create->lastname = $faker->lastname();
            $new_post_create->description = $faker->text(100);
            $new_post_create->save();
        };

    }
}
