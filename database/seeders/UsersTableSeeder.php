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
        ));
        
        
    }
}