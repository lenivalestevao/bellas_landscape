<?php

namespace Database\Seeders;

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
                'active' => 1,
                'created_at' => '2022-01-21 17:22:13',
                'id' => 13,
                'slug' => 'grinder',
                'title' => 'Grinder',
                'updated_at' => '2022-01-21 17:22:13',
            ),
            1 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:30:17',
                'id' => 14,
                'slug' => 'glass-bowl',
                'title' => 'Glass Bowl',
                'updated_at' => '2022-01-21 17:30:17',
            ),
            2 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:33:04',
                'id' => 15,
                'slug' => 'smoke-pipe',
                'title' => 'Smoke Pipe',
                'updated_at' => '2022-01-21 17:33:04',
            ),
            3 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:34:25',
                'id' => 16,
                'slug' => 'smoke-glass-pipe',
                'title' => 'Smoke Glass Pipe',
                'updated_at' => '2022-01-21 17:34:25',
            ),
            4 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:37:31',
                'id' => 17,
                'slug' => 'rolling-tray',
                'title' => 'Rolling Tray',
                'updated_at' => '2022-01-21 17:37:31',
            ),
            5 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:42:17',
                'id' => 18,
                'slug' => 'cleaning-brushes',
                'title' => 'Cleaning Brushes',
                'updated_at' => '2022-01-21 17:42:17',
            ),
            6 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:45:17',
                'id' => 19,
                'slug' => 'classic-papers',
                'title' => 'Classic papers',
                'updated_at' => '2022-01-21 17:45:17',
            ),
            7 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:46:22',
                'id' => 20,
                'slug' => 'organic-papers',
                'title' => 'Organic  Papers',
                'updated_at' => '2022-01-21 17:46:22',
            ),
            8 => 
            array (
                'active' => 1,
                'created_at' => '2022-01-21 17:47:37',
                'id' => 21,
                'slug' => 'classic-preroll-cone',
                'title' => 'Classic PreRoll Cone',
                'updated_at' => '2022-01-21 17:47:37',
            ),
        ));
        
        
    }
}