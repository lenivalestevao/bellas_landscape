<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Landscape',
                'slug' => 'landscape',
                'description' => NULL,
                'html' => NULL,
                'is_active' => 1,
                'created_at' => '2022-03-18 18:57:51',
                'updated_at' => '2022-03-18 22:26:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Irrigation',
                'slug' => 'irrigation',
                'description' => NULL,
                'html' => NULL,
                'is_active' => 1,
                'created_at' => '2022-03-18 18:58:06',
                'updated_at' => '2022-03-18 22:26:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Concrete Jobs',
                'slug' => 'concrete-jobs',
                'description' => NULL,
                'html' => NULL,
                'is_active' => 1,
                'created_at' => '2022-03-18 18:58:24',
                'updated_at' => '2022-03-18 22:27:30',
            ),
        ));
        
        
    }
}