<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-18 03:26:06',
                'id' => 1,
                'is_active' => 1,
                'job_title' => 'Owner',
                'name' => 'Hamit Domingues',
                'updated_at' => '2022-03-18 03:27:42',
            ),
        ));
        
        
    }
}