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
                'address' => '921 County Street',
                'city_id' => 21029,
                'created_at' => NULL,
                'description' => 'At Bella\'s Landscape & Irrigation , we\'re dedicated to create and maintain healthy, beautiful lawns in Oklahoma city and Surrounding Cities.',
                'email' => 'bellaslandscapeokc@icloud.com',
                'facebook' => 'https://www.facebook.com/Bellaslandscape',
                'faveicon' => NULL,
                'id' => 1,
                'instagram' => 'https://www.instagram.com/hamitdominguez/',
                'keywords' => '',
                'logo' => 'assets/img/hXPzzaXTS0NIU6RFt2gI1aQhplxfea1Q5pZ16EWi.png',
                'tiktok' => 'https://www.tiktok.com/@hamitdominguez',
                'title' => 'Bellas Landscape & Concrete',
                'twitter' => '',
                'updated_at' => '2022-03-29 00:44:13',
            'whatsapp' => '(405) 655-4295',
                'youtube' => '',
                'zip_code' => '72935',
            ),
        ));
        
        
    }
}