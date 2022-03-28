<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AlertsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('alerts')->delete();
        
        \DB::table('alerts')->insert(array (
            0 => 
            array (
                'created_at' => '2022-03-27 18:55:20',
                'id' => 1,
                'is_active' => 1,
                'msg' => 'Our<code>Website</code> is under construction. If you need any-help or estimate Please call us at: <code>%PHONE_NUMBER%</code>',
                'title' => 'UNDER CONSTRUCTION',
                'type_msg' => 3,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}