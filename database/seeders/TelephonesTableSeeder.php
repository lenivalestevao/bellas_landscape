<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TelephonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('telephones')->delete();
        
        \DB::table('telephones')->insert(array (
            0 => 
            array (
                'carrier' => 'tmobile',
                'created_at' => '2022-04-08 21:33:51',
                'id' => 1,
                'number' => '4056550159',
                'title' => 'Sindy',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'carrier' => 'tmobile',
                'created_at' => '2022-04-08 21:33:51',
                'id' => 2,
                'number' => '4056554295',
                'title' => 'Hamit',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}