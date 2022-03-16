<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'AK',
                'name' => 'Alaska',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'AL',
                'name' => 'Alabama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'AR',
                'name' => 'Arkansas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'AZ',
                'name' => 'Arizona',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'CA',
                'name' => 'California',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'CO',
                'name' => 'Colorado',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'CT',
                'name' => 'Connecticut',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'DC',
                'name' => 'District of Columbia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'DE',
                'name' => 'Delaware',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'FL',
                'name' => 'Florida',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'GA',
                'name' => 'Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'HI',
                'name' => 'Hawaii',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'IA',
                'name' => 'Iowa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'ID',
                'name' => 'Idaho',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'IL',
                'name' => 'Illinois',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'IN',
                'name' => 'Indiana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'KS',
                'name' => 'Kansas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'KY',
                'name' => 'Kentucky',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'LA',
                'name' => 'Louisiana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'MA',
                'name' => 'Massachusetts',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => 'MD',
                'name' => 'Maryland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => 'ME',
                'name' => 'Maine',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => 'MI',
                'name' => 'Michigan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => 'MN',
                'name' => 'Minnesota',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => 'MO',
                'name' => 'Missouri',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => 'MS',
                'name' => 'Mississippi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => 'MT',
                'name' => 'Montana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => 'NC',
                'name' => 'North Carolina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => 'ND',
                'name' => 'North Dakota',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => 'NE',
                'name' => 'Nebraska',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => 'NH',
                'name' => 'New Hampshire',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => 'NJ',
                'name' => 'New Jersey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => 'NM',
                'name' => 'New Mexico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => 'NV',
                'name' => 'Nevada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => 'NY',
                'name' => 'New York',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => 'OH',
                'name' => 'Ohio',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => 'OK',
                'name' => 'Oklahoma',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => 'OR',
                'name' => 'Oregon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => 'PA',
                'name' => 'Pennsylvania',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => 'RI',
                'name' => 'Rhode Island',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => 'SC',
                'name' => 'South Carolina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => 'SD',
                'name' => 'South Dakota',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => 'TN',
                'name' => 'Tennessee',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => 'TX',
                'name' => 'Texas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => 'UT',
                'name' => 'Utah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => 'VA',
                'name' => 'Virginia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => 'VT',
                'name' => 'Vermont',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => 'WA',
                'name' => 'Washington',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => 'WI',
                'name' => 'Wisconsin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => 'WV',
                'name' => 'West Virginia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => 'WY',
                'name' => 'Wyoming',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}