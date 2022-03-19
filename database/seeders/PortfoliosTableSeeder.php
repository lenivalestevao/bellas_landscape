<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portfolios')->delete();
        
        \DB::table('portfolios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'service_id' => 3,
                'title' => 'wood concrete',
                'is_active' => 1,
                'created_at' => '2022-03-18 23:20:33',
                'updated_at' => '2022-03-19 02:20:42',
            ),
            1 => 
            array (
                'id' => 2,
                'service_id' => 2,
                'title' => 'Sprinkler Irrigation',
                'is_active' => 1,
                'created_at' => '2022-03-19 02:22:12',
                'updated_at' => '2022-03-19 02:22:12',
            ),
            2 => 
            array (
                'id' => 3,
                'service_id' => 1,
                'title' => 'Flowerbad',
                'is_active' => 1,
                'created_at' => '2022-03-19 02:23:55',
                'updated_at' => '2022-03-19 02:23:55',
            ),
        ));
        
        
    }
}