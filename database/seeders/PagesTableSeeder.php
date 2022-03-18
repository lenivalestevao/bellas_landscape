<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'html' => NULL,
                'is_active' => 0,
                'created_at' => NULL,
                'updated_at' => '2022-03-18 19:33:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Terms of Service',
                'slug' => 'terms-of-service',
                'html' => NULL,
                'is_active' => 0,
                'created_at' => NULL,
                'updated_at' => '2022-03-18 19:34:42',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'About Us',
                'slug' => 'about-us',
                'html' => '<p><span style="background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px">At </span><strong>Bella&#39;s Landscape &amp; Irrigation</strong><span style="background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px"> , we&#39;re dedicated to create and maintain healthy, beautiful lawns in Oklahoma city and Surrounding Cities.</span></p>

<p><strong>Lorem Ipsum</strong><span style="background-color:#ffffff; color:#000000; font-family:&quot;Open Sans&quot;,Arial,sans-serif; font-size:14px">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => '2022-03-18 04:11:39',
            ),
        ));
        
        
    }
}