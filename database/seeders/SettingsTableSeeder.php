<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Bellas Landscape & Concrete',
                'keywords' => NULL,
                'description' => 'Bellas Landscape & Concrete',
                'logo' => 'logo.png',
                'faveicon' => NULL,
                'facebook' => 'https://www.facebook.com/Bellaslandscape',
                'twitter' => NULL,
                'instagram' => 'https://www.instagram.com/hamitdominguez/',
                'youtube' => NULL,
                'whatsapp' => NULL,
                'tiktok' => 'https://www.tiktok.com/@hamitdominguez',
                'city_id' => 20890,
                'address' => NULL,
                'zip_code' => '73107',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}