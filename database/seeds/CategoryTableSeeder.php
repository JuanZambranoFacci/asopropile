<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('categoties')->insert([
            'name' => Str::random(10),
            'slug' => Str::random(10),
            'body' => Str::random(10),
        ]);

    }
}
