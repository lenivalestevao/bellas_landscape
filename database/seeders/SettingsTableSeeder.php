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
                'logo' => NULL,
                'faveicon' => NULL,
                'facebook' => NULL,
                'twitter' => NULL,
                'instagram' => NULL,
                'youtube' => NULL,
                'whatsapp' => NULL,
                'city_id' => 20890,
                'address' => NULL,
                'zip_code' => '73179',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}