<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'route' => 'admin.categories',
                'title' => 'Categories',
                'is_order' => 1,
                'is_active' => 0,
                'created_at' => '2022-03-18 17:13:56',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'route' => 'admin.colors',
                'title' => 'Color',
                'is_order' => 2,
                'is_active' => 0,
                'created_at' => '2022-03-18 17:17:19',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'route' => 'admin.sizes',
                'title' => 'Size',
                'is_order' => 3,
                'is_active' => 0,
                'created_at' => '2022-03-18 17:17:19',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'route' => 'admin.users',
                'title' => 'Users',
                'is_order' => 4,
                'is_active' => 1,
                'created_at' => '2022-03-18 17:18:09',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'route' => 'admin.pages',
                'title' => 'Pages',
                'is_order' => 5,
                'is_active' => 1,
                'created_at' => '2022-03-18 17:18:09',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'route' => 'admin.services',
                'title' => 'Services',
                'is_order' => 6,
                'is_active' => 1,
                'created_at' => '2022-03-18 17:19:09',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'route' => 'admin.teams',
                'title' => 'Our Team',
                'is_order' => 7,
                'is_active' => 1,
                'created_at' => '2022-03-18 17:19:09',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'route' => 'admin.portfolio',
                'title' => 'Portfolio',
                'is_order' => 8,
                'is_active' => 1,
                'created_at' => '2022-03-18 17:22:21',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'route' => 'admin.products',
                'title' => 'Products',
                'is_order' => 9,
                'is_active' => 0,
                'created_at' => '2022-03-18 17:22:21',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}