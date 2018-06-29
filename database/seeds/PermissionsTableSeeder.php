<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2018-06-23 10:56:19',
                'updated_at' => '2018-06-23 10:56:19',
            ),
            26 => 
            array (
                'id' => 37,
                'key' => 'browse_contents',
                'table_name' => 'contents',
                'created_at' => '2018-06-25 07:32:29',
                'updated_at' => '2018-06-25 07:32:29',
            ),
            27 => 
            array (
                'id' => 38,
                'key' => 'read_contents',
                'table_name' => 'contents',
                'created_at' => '2018-06-25 07:32:29',
                'updated_at' => '2018-06-25 07:32:29',
            ),
            28 => 
            array (
                'id' => 39,
                'key' => 'edit_contents',
                'table_name' => 'contents',
                'created_at' => '2018-06-25 07:32:29',
                'updated_at' => '2018-06-25 07:32:29',
            ),
            29 => 
            array (
                'id' => 40,
                'key' => 'add_contents',
                'table_name' => 'contents',
                'created_at' => '2018-06-25 07:32:29',
                'updated_at' => '2018-06-25 07:32:29',
            ),
            30 => 
            array (
                'id' => 41,
                'key' => 'delete_contents',
                'table_name' => 'contents',
                'created_at' => '2018-06-25 07:32:29',
                'updated_at' => '2018-06-25 07:32:29',
            ),
            31 => 
            array (
                'id' => 62,
                'key' => 'browse_adsections',
                'table_name' => 'adsections',
                'created_at' => '2018-06-27 16:18:32',
                'updated_at' => '2018-06-27 16:18:32',
            ),
            32 => 
            array (
                'id' => 63,
                'key' => 'read_adsections',
                'table_name' => 'adsections',
                'created_at' => '2018-06-27 16:18:32',
                'updated_at' => '2018-06-27 16:18:32',
            ),
            33 => 
            array (
                'id' => 64,
                'key' => 'edit_adsections',
                'table_name' => 'adsections',
                'created_at' => '2018-06-27 16:18:32',
                'updated_at' => '2018-06-27 16:18:32',
            ),
            34 => 
            array (
                'id' => 65,
                'key' => 'add_adsections',
                'table_name' => 'adsections',
                'created_at' => '2018-06-27 16:18:32',
                'updated_at' => '2018-06-27 16:18:32',
            ),
            35 => 
            array (
                'id' => 66,
                'key' => 'delete_adsections',
                'table_name' => 'adsections',
                'created_at' => '2018-06-27 16:18:32',
                'updated_at' => '2018-06-27 16:18:32',
            ),
            36 => 
            array (
                'id' => 67,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2018-06-27 16:31:03',
                'updated_at' => '2018-06-27 16:31:03',
            ),
            37 => 
            array (
                'id' => 68,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2018-06-27 16:31:03',
                'updated_at' => '2018-06-27 16:31:03',
            ),
            38 => 
            array (
                'id' => 69,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2018-06-27 16:31:03',
                'updated_at' => '2018-06-27 16:31:03',
            ),
            39 => 
            array (
                'id' => 70,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2018-06-27 16:31:03',
                'updated_at' => '2018-06-27 16:31:03',
            ),
            40 => 
            array (
                'id' => 71,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2018-06-27 16:31:03',
                'updated_at' => '2018-06-27 16:31:03',
            ),
            41 => 
            array (
                'id' => 72,
                'key' => 'browse_main_contents',
                'table_name' => 'main_contents',
                'created_at' => '2018-06-27 16:47:10',
                'updated_at' => '2018-06-27 16:47:10',
            ),
            42 => 
            array (
                'id' => 73,
                'key' => 'read_main_contents',
                'table_name' => 'main_contents',
                'created_at' => '2018-06-27 16:47:10',
                'updated_at' => '2018-06-27 16:47:10',
            ),
            43 => 
            array (
                'id' => 74,
                'key' => 'edit_main_contents',
                'table_name' => 'main_contents',
                'created_at' => '2018-06-27 16:47:10',
                'updated_at' => '2018-06-27 16:47:10',
            ),
            44 => 
            array (
                'id' => 75,
                'key' => 'add_main_contents',
                'table_name' => 'main_contents',
                'created_at' => '2018-06-27 16:47:10',
                'updated_at' => '2018-06-27 16:47:10',
            ),
            45 => 
            array (
                'id' => 76,
                'key' => 'delete_main_contents',
                'table_name' => 'main_contents',
                'created_at' => '2018-06-27 16:47:10',
                'updated_at' => '2018-06-27 16:47:10',
            ),
        ));
        
        
    }
}