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
                'created_at' => NULL,
                'description' => NULL,
                'facebook' => NULL,
                'faveicon' => NULL,
                'id' => 1,
                'instagram' => NULL,
                'keywords' => NULL,
                'logo' => 'gmo3.png',
                'title' => 'GMO Cookies Shop',
                'twitter' => NULL,
                'updated_at' => NULL,
                'youtube' => NULL,
            ),
        ));
        
        
    }
}