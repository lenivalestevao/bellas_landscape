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
                'html' => '<p style="text-align:center"><span style="color:#95a5a6"><span style="background-color:#ffffff">We are a family owned business, located in Tuttle Oklahoma. We have more than 10 years of experience and continue learn to give you the best service.&nbsp; </span>With an integrated mix of services, we are able to provide complete care of your landscape needs. Our staff works throughout the year to provide you with the highest level of service to maximize your value. Continual improvement in our systems and a commitment to developing our team gives us a sustainable competitive advantage when it comes to caring for our customers and their landscapes.</span></p>',
                'is_active' => 1,
                'created_at' => NULL,
                'updated_at' => '2022-04-08 16:02:04',
            ),
        ));
        
        
    }
}