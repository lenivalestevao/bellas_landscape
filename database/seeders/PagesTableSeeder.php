<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'created_at' => NULL,
                'html' => NULL,
                'id' => 1,
                'is_active' => 1,
                'name' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => NULL,
                'html' => NULL,
                'id' => 2,
                'is_active' => 1,
                'name' => 'Terms of Service',
                'slug' => 'terms-of-service',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'created_at' => NULL,
                'html' => NULL,
                'id' => 3,
                'is_active' => 1,
                'name' => 'About Us',
                'slug' => 'about-us',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}