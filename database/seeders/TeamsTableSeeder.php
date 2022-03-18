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
                'id' => 1,
                'name' => 'Hamit Domingues',
                'job_title' => 'Owner',
                'is_active' => 1,
                'created_at' => '2022-03-18 03:26:06',
                'updated_at' => '2022-03-18 03:27:42',
            ),
        ));
        
        
    }
}