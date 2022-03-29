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
                'created_at' => '2022-01-05 17:28:12',
                'email' => 'super@super.com',
                'email_verified_at' => '2022-01-05 17:28:12',
                'facebook_id' => NULL,
                'first_name' => 'Super',
                'google_id' => NULL,
                'id' => 1,
                'is_active' => 1,
                'last_name' => 'Mario',
                'password' => '$2y$10$ceG2Lvq.3sZLPal6/QcNdOZDcEGKoL54HXbhOGkQCNzYXCjkH9lmq',
                'remember_token' => NULL,
                'stripe_customer_id' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => '0',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2022-03-29 01:07:24',
                'email' => 'bellaslandscapeokc@icloud.com',
                'email_verified_at' => NULL,
                'facebook_id' => NULL,
                'first_name' => 'Hamit',
                'google_id' => NULL,
                'id' => 2,
                'is_active' => 1,
                'last_name' => 'Domingues',
                'password' => '$2y$10$agMVGns0H241de.R71gWUuKrEf6fLq8OGX6ZjQvO1Zkph9/bVynHK',
                'remember_token' => NULL,
                'stripe_customer_id' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_secret' => NULL,
                'updated_at' => '2022-03-29 01:11:41',
            ),
        ));
        
        
    }
}