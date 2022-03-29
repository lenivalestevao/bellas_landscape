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
                'created_at' => '2022-03-18 17:13:56',
                'id' => 1,
                'is_active' => 0,
                'is_order' => 1,
                'route' => 'admin.categories',
                'title' => 'Categories',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2022-03-18 17:17:19',
                'id' => 2,
                'is_active' => 0,
                'is_order' => 2,
                'route' => 'admin.colors',
                'title' => 'Color',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => '2022-03-18 17:17:19',
                'id' => 3,
                'is_active' => 0,
                'is_order' => 3,
                'route' => 'admin.sizes',
                'title' => 'Size',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'created_at' => '2022-03-18 17:18:09',
                'id' => 4,
                'is_active' => 1,
                'is_order' => 4,
                'route' => 'admin.users',
                'title' => 'Users',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => '2022-03-18 17:18:09',
                'id' => 5,
                'is_active' => 1,
                'is_order' => 5,
                'route' => 'admin.pages',
                'title' => 'Pages',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => '2022-03-18 17:19:09',
                'id' => 6,
                'is_active' => 1,
                'is_order' => 6,
                'route' => 'admin.services',
                'title' => 'Services',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => '2022-03-18 17:19:09',
                'id' => 7,
                'is_active' => 1,
                'is_order' => 7,
                'route' => 'admin.teams',
                'title' => 'Our Team',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => '2022-03-18 17:22:21',
                'id' => 8,
                'is_active' => 1,
                'is_order' => 8,
                'route' => 'admin.portfolio',
                'title' => 'Portfolio',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => '2022-03-18 17:22:21',
                'id' => 9,
                'is_active' => 0,
                'is_order' => 9,
                'route' => 'admin.products',
                'title' => 'Products',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => '2022-03-28 20:26:01',
                'id' => 10,
                'is_active' => 1,
                'is_order' => 10,
                'route' => 'admin.alerts',
                'title' => 'Alerts',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}