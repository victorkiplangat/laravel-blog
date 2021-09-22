<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        $politics =  Category::factory()->create([
           "name" => 'politics',
           "slug"=>'politics'
       ]);

        $family =  Category::factory()->create([
           "name" => 'family',
           "slug"=>'family'
       ]);

        $technology =  Category::factory()->create([
           "name" => 'technology',
           "slug"=>'technology'
       ]);

        $john = User::factory()->create([
            "username" => "john_doe",
            "fullname" => "John Doe"
        ]);
        $allison = User::factory()->create([
         "username" => "allison_west",
         "fullname" => "Allison West"
        ]);



        Post::factory(5)->create([
            "category_id" => $politics->id,
            "user_id" => $john->id
        ]);

        Post::factory(3)->create([
            "category_id" => $politics->id,
            "user_id" => $allison->id
        ]);

        Post::factory(2)->create([
            "category_id" => $family->id,
              "user_id" => $allison->id
        ]);
        Post::factory(3)->create([
            "category_id" => $family->id,
              "user_id" => $john->id
        ]);

        Post::factory(5)->create([
            "category_id" => $technology->id,
             "user_id" => $allison->id
        ]);
        Post::factory(5)->create([
            "category_id" => $technology->id,
             "user_id" => $john->id
        ]);
    }
}
