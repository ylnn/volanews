<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/June2018/2GZql4Lp5Vfu4aogGB4B.jpeg',
                'password' => '$2y$10$5H8WqCjkFpPC4DpbGWkGzuKWutmMMKHFSqU5xkxVufHgIRi6LLAca',
                'remember_token' => NULL,
                'settings' => '{"locale":"en"}',
                'created_at' => '2018-06-13 11:18:40',
                'updated_at' => '2018-06-23 11:13:33',
            ),
        ));
        
        
    }
}