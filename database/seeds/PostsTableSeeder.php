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
            $new_post_create->title = $faker->sentence();
            $new_post_create->content = $faker->text(500);
            $slug = Str::slug($new_post_create->title);
            $slug_base = $slug;
            $post_presente = Post::where('slug', $slug)->first();
            $contatore = 1;

            while($post_presente) {

                $slug = $slug_base . '-' . $contatore;
                $contatore++;
                $post_presente = Post::where('slug', $slug)->first();
            }

            $new_post_create->slug = $slug;
            $new_post_create->save();
        };

    }
}
