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
                'keywords' => 'sprinklers, concrete, french drains,retaining wall, landscape',
                'description' => 'At Bella\'s Landscape & Irrigation , we focus on providing the highest quality services with integrity and costumer satisfaction for all your outdoor projects.',
                'logo' => 'assets/img/r1UvRMz9fsfhw5L60I4vBH2Hwjc5iUoXcrwgZPBT.png',
                'faveicon' => NULL,
                'email' => 'bellaslandscapeokc@icloud.com',
                'facebook' => 'https://www.facebook.com/Bellaslandscape',
                'twitter' => '',
                'instagram' => '',
                'youtube' => '',
            'whatsapp' => '(405) 655-4295',
                'tiktok' => '',
                'city_id' => 21029,
                'address' => '921 County Street 2935',
                'zip_code' => '73089',
                'created_at' => NULL,
                'updated_at' => '2022-04-08 04:24:55',
            ),
        ));
        
        
    }
}