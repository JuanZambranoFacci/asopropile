<?php

use App\User;
use App\Post;
use App\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(User::class, 10)->create()->each(function($user){
        	factory(Post::class, 10)->create([
        		'user_id' => $user->id,
        	]);
        		
        });
        
        factory(Category::class, 10)->create()->each(function($Category){
        	factory(Post::class, 10)->create([
        		'category_id' => $category_id,
        	]);
        		
        });

    }
}
