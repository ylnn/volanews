<?php

use App\Content;
use App\Category;
use Illuminate\Database\Seeder;

class ContentsFactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $categories->each(function($item,$key){
            $contents = factory(Content::class, 20)->make();
            $item->contents()->saveMany($contents);
        });
    }
}
