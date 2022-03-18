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
                'description' => 'At Bella\'s Landscape & Irrigation , we\'re dedicated to create and maintain healthy, beautiful lawns in Oklahoma city and Surrounding Cities.',
                'logo' => 'logo.png',
                'faveicon' => NULL,
                'email' => 'bellaslandscapeokc@icloud.com',
                'facebook' => 'https://www.facebook.com/Bellaslandscape',
                'twitter' => NULL,
                'instagram' => 'https://www.instagram.com/hamitdominguez/',
                'youtube' => NULL,
            'whatsapp' => '(405) 655-4295',
                'tiktok' => 'https://www.tiktok.com/@hamitdominguez',
                'city_id' => 21029,
                'address' => '921 County Street',
                'zip_code' => '2935',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}