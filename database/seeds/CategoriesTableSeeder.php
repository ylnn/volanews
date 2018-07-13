<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'status' => 1,
                'order' => 1,
                'title' => 'Assumenda',
                'body' => NULL,
                'url_slug' => 'assumenda',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:32:08',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'status' => 1,
                'order' => 3,
                'title' => 'Aut',
                'body' => NULL,
                'url_slug' => 'aut',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'status' => 1,
                'order' => 4,
                'title' => 'Sint',
                'body' => NULL,
                'url_slug' => 'sint',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'status' => 1,
                'order' => 5,
                'title' => 'Sit',
                'body' => NULL,
                'url_slug' => 'sit',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'status' => 1,
                'order' => 6,
                'title' => 'Suscipit',
                'body' => NULL,
                'url_slug' => 'suscipit',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'status' => 1,
                'order' => 7,
                'title' => 'Libero',
                'body' => NULL,
                'url_slug' => 'libero',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'status' => 1,
                'order' => 8,
                'title' => 'Doloremque',
                'body' => NULL,
                'url_slug' => 'doloremque',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'status' => 1,
                'order' => 9,
                'title' => 'Magnam',
                'body' => NULL,
                'url_slug' => 'magnam',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'status' => 1,
                'order' => 10,
                'title' => 'Aut',
                'body' => NULL,
                'url_slug' => 'aut',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'status' => 1,
                'order' => 11,
                'title' => 'Tempora',
                'body' => NULL,
                'url_slug' => 'tempora',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:05',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'status' => 1,
                'order' => 2,
                'title' => 'Aspernatur',
                'body' => NULL,
                'url_slug' => 'aspernatur',
                'seo_title' => NULL,
                'seo_desc' => NULL,
                'seo_keywords' => NULL,
                'created_at' => '2018-06-27 16:32:15',
                'updated_at' => '2018-06-27 16:36:47',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}