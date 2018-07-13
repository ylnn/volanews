<?php

use Illuminate\Database\Seeder;

class MainContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('main_contents')->delete();
        
        \DB::table('main_contents')->insert(array (
            0 => 
            array (
                'id' => 1,
                'content_id' => 16,
                'order' => 1,
                'created_at' => '2018-06-27 16:48:29',
                'updated_at' => '2018-06-27 16:48:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'content_id' => 17,
                'order' => 2,
                'created_at' => '2018-06-27 16:48:38',
                'updated_at' => '2018-06-27 16:48:38',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'content_id' => 18,
                'order' => 3,
                'created_at' => '2018-06-27 16:48:47',
                'updated_at' => '2018-06-27 16:48:47',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'content_id' => 19,
                'order' => 4,
                'created_at' => '2018-06-27 16:48:57',
                'updated_at' => '2018-06-27 16:48:57',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'content_id' => 21,
                'order' => 5,
                'created_at' => '2018-06-27 16:49:00',
                'updated_at' => '2018-06-27 16:49:20',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}