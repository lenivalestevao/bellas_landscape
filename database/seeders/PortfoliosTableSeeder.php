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
                'id' => 2,
                'service_id' => 2,
                'title' => 'Sprinkler Irrigation',
                'is_active' => 1,
                'created_at' => '2022-03-19 02:22:12',
                'updated_at' => '2022-03-19 02:22:12',
            ),
            1 => 
            array (
                'id' => 3,
                'service_id' => 1,
                'title' => 'Landscape',
                'is_active' => 1,
                'created_at' => '2022-03-19 02:23:55',
                'updated_at' => '2022-04-08 02:33:40',
            ),
            2 => 
            array (
                'id' => 4,
                'service_id' => 4,
                'title' => 'Retaining Wall',
                'is_active' => 1,
                'created_at' => '2022-03-19 20:38:12',
                'updated_at' => '2022-04-08 02:36:14',
            ),
            3 => 
            array (
                'id' => 5,
                'service_id' => 3,
                'title' => 'Concrete',
                'is_active' => 1,
                'created_at' => '2022-04-07 18:40:51',
                'updated_at' => '2022-04-08 16:07:06',
            ),
            4 => 
            array (
                'id' => 6,
                'service_id' => 5,
                'title' => 'French Drains',
                'is_active' => 1,
                'created_at' => '2022-04-08 16:29:14',
                'updated_at' => '2022-04-08 16:29:14',
            ),
        ));
        
        
    }
}