<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            3 => 
            array (
                'id' => 7,
                'name' => 'contents',
                'slug' => 'contents',
                'display_name_singular' => 'Content',
                'display_name_plural' => 'Contents',
                'icon' => NULL,
                'model_name' => 'App\\Content',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-06-25 07:32:29',
                'updated_at' => '2018-06-25 07:32:29',
            ),
            4 => 
            array (
                'id' => 13,
                'name' => 'adsections',
                'slug' => 'adsections',
                'display_name_singular' => 'Adsection',
                'display_name_plural' => 'Adsections',
                'icon' => NULL,
                'model_name' => 'App\\Adsection',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-06-27 16:18:32',
                'updated_at' => '2018-06-27 16:18:32',
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => NULL,
                'model_name' => 'App\\Category',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":"order","order_display_column":"title"}',
                'created_at' => '2018-06-27 16:31:03',
                'updated_at' => '2018-06-27 16:36:39',
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'main_contents',
                'slug' => 'main-contents',
                'display_name_singular' => 'Main Content',
                'display_name_plural' => 'Main Contents',
                'icon' => NULL,
                'model_name' => 'App\\MainContent',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-06-27 16:47:10',
                'updated_at' => '2018-06-27 16:47:10',
            ),
        ));
        
        
    }
}