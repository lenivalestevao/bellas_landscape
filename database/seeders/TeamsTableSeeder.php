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
            1 => 
            array (
                'id' => 2,
                'name' => 'Luiz Domingues',
                'job_title' => 'Helper',
                'is_active' => 1,
                'created_at' => '2022-03-19 19:05:20',
                'updated_at' => '2022-03-19 19:06:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Carlos Domingues',
                'job_title' => 'Helper',
                'is_active' => 1,
                'created_at' => '2022-03-19 19:05:33',
                'updated_at' => '2022-03-19 19:05:33',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dionel Domingues',
                'job_title' => 'Helper',
                'is_active' => 1,
                'created_at' => '2022-03-19 19:06:30',
                'updated_at' => '2022-03-19 19:07:38',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Evans Domingues',
                'job_title' => 'Helper',
                'is_active' => 1,
                'created_at' => '2022-03-19 19:07:57',
                'updated_at' => '2022-03-19 19:07:57',
            ),
        ));
        
        
    }
}