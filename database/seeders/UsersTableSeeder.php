<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Super',
                'last_name' => 'Mario',
                'email' => 'super@super.com',
                'email_verified_at' => '2022-01-05 17:28:12',
                'password' => '$2y$10$ceG2Lvq.3sZLPal6/QcNdOZDcEGKoL54HXbhOGkQCNzYXCjkH9lmq',
                'two_factor_secret' => '0',
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'is_active' => 1,
                'stripe_customer_id' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'created_at' => '2022-01-05 17:28:12',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Sindy',
                'last_name' => 'Dominguez',
                'email' => 'Sindyhamit@icloud.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cX18E6h0gAeQhIqUugZg8uylzSX/YaJfp4dhTaSi0/Tt65C8/IuOm',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'is_active' => 1,
                'stripe_customer_id' => NULL,
                'facebook_id' => NULL,
                'google_id' => NULL,
                'created_at' => '2022-03-29 01:07:24',
                'updated_at' => '2022-04-08 04:17:56',
            ),
        ));
        
        
    }
}