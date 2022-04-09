<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imageable_type' => 'App\\Models\\Product',
                'imageable_id' => 1,
                'name' => 'Cachorro',
                'alt' => 'Cachorro',
                'src' => 'r1.jpeg',
                'created_at' => '2022-01-12 20:06:51',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'imageable_type' => 'App\\Models\\Product',
                'imageable_id' => 2,
                'name' => 'Cachorro',
                'alt' => 'Cachorro',
                'src' => 'r2.jpeg',
                'created_at' => '2022-01-17 20:06:49',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'imageable_type' => 'App\\Models\\User',
                'imageable_id' => 1,
                'name' => 'Logo',
                'alt' => 'Logo',
                'src' => 'assets/img/user/1edc586ed7b9dc06a9ecbf964902a5d0.jpg',
                'created_at' => '2022-01-16 17:03:02',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 24,
                'imageable_type' => 'App\\Models\\Service',
                'imageable_id' => 1,
                'name' => 'Landscape',
                'alt' => 'Landscape',
                'src' => 'assets/img/service/gNpK2h6i2GEOYg5oigPlO9paQEy0dkQNtY9YwEYA.jpg',
                'created_at' => '2022-03-18 22:26:42',
                'updated_at' => '2022-03-18 22:26:42',
            ),
            4 => 
            array (
                'id' => 25,
                'imageable_type' => 'App\\Models\\Service',
                'imageable_id' => 2,
                'name' => 'Irrigation',
                'alt' => 'Irrigation',
                'src' => 'assets/img/service/wZLQc5mKKTNYAOmArNGM0oPSG0r4KGiE2w2gzS3q.jpg',
                'created_at' => '2022-03-18 22:26:50',
                'updated_at' => '2022-03-18 22:26:50',
            ),
            5 => 
            array (
                'id' => 26,
                'imageable_type' => 'App\\Models\\Service',
                'imageable_id' => 3,
                'name' => 'Concrete Jobs',
                'alt' => 'Concrete Jobs',
                'src' => 'assets/img/service/4gjNwfyLOAuPby5EBHUM3KdY5ZBuNh8gHyybFVyV.jpg',
                'created_at' => '2022-03-18 22:27:30',
                'updated_at' => '2022-03-18 22:27:30',
            ),
            6 => 
            array (
                'id' => 32,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 2,
                'name' => 'Sprinkler Irrigation',
                'alt' => 'Sprinkler Irrigation',
                'src' => 'assets/img/portfolio/q2D6ezPcF5Blls3ePNRXmG2r7pAKaVGbb0BenoIs.jpg',
                'created_at' => '2022-03-19 02:22:32',
                'updated_at' => '2022-03-19 02:22:32',
            ),
            7 => 
            array (
                'id' => 34,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 3,
                'name' => 'Flowerbad',
                'alt' => 'Flowerbad',
                'src' => 'assets/img/portfolio/dQbFVSSN2SBD92djZpwAg7zEGfmtDhDaPiZZUxHP.jpg',
                'created_at' => '2022-03-19 02:23:59',
                'updated_at' => '2022-03-19 02:23:59',
            ),
            8 => 
            array (
                'id' => 45,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 3,
                'name' => 'Flowerbad',
                'alt' => 'Flowerbad',
                'src' => 'assets/img/portfolio/iup5DfkPBIFQjrPpmUrBuul2Fb8er4pxniq0nKsM.jpg',
                'created_at' => '2022-03-19 20:37:53',
                'updated_at' => '2022-03-19 20:37:53',
            ),
            9 => 
            array (
                'id' => 46,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 3,
                'name' => 'Flowerbad',
                'alt' => 'Flowerbad',
                'src' => 'assets/img/portfolio/vLNUtDvR0VHOr5VU3y1Kv5aEFM8jEvkC7dQOaqKj.jpg',
                'created_at' => '2022-03-19 20:37:56',
                'updated_at' => '2022-03-19 20:37:56',
            ),
            10 => 
            array (
                'id' => 47,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 4,
                'name' => 'Retaining Wall',
                'alt' => 'Retaining Wall',
                'src' => 'assets/img/portfolio/iToTysnjbxWIyaHpqvkZt1EK4WI0m0vSV9ldxW1X.jpg',
                'created_at' => '2022-03-19 20:39:03',
                'updated_at' => '2022-03-19 20:39:03',
            ),
            11 => 
            array (
                'id' => 48,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 4,
                'name' => 'Retaining Wall',
                'alt' => 'Retaining Wall',
                'src' => 'assets/img/portfolio/wGiZyA1FL5hMXAMC39n9JZX7yxjxnIBRFDYPz3h8.jpg',
                'created_at' => '2022-03-19 20:39:06',
                'updated_at' => '2022-03-19 20:39:06',
            ),
            12 => 
            array (
                'id' => 49,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 4,
                'name' => 'Retaining Wall',
                'alt' => 'Retaining Wall',
                'src' => 'assets/img/portfolio/O7HRhLA6gNBnt7WMFysdeEUHaAC6esAPEbm04nyq.jpg',
                'created_at' => '2022-03-19 20:39:09',
                'updated_at' => '2022-03-19 20:39:09',
            ),
            13 => 
            array (
                'id' => 53,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 4,
                'name' => 'Retaining Wall',
                'alt' => 'Retaining Wall',
                'src' => 'assets/img/portfolio/tM07uzeWFLYuXtdpcWw899Hem8BPYkvLgbS8Rqs8.jpg',
                'created_at' => '2022-04-08 02:32:25',
                'updated_at' => '2022-04-08 02:32:25',
            ),
            14 => 
            array (
                'id' => 54,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 3,
                'name' => 'Flowerbad',
                'alt' => 'Flowerbad',
                'src' => 'assets/img/portfolio/LCrerK5p0tg6GftT3nIh8Lvo2lBsRzAobQ21UQVp.jpg',
                'created_at' => '2022-04-08 02:33:19',
                'updated_at' => '2022-04-08 02:33:19',
            ),
            15 => 
            array (
                'id' => 55,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 3,
                'name' => 'Landscape',
                'alt' => 'Landscape',
                'src' => 'assets/img/portfolio/vX1E9KkcjPsk9YpqfVcqh7ceGQq3Sctn0YcvWWMD.jpg',
                'created_at' => '2022-04-08 02:35:06',
                'updated_at' => '2022-04-08 02:35:06',
            ),
            16 => 
            array (
                'id' => 56,
                'imageable_type' => 'App\\Models\\Service',
                'imageable_id' => 4,
                'name' => 'Retaining Wall',
                'alt' => 'Retaining Wall',
                'src' => 'assets/img/service/kQnLazGs28x5wMtnj1A1XazRsRkehFe1YprOkjCy.jpg',
                'created_at' => '2022-04-08 02:35:59',
                'updated_at' => '2022-04-08 02:35:59',
            ),
            17 => 
            array (
                'id' => 60,
                'imageable_type' => 'App\\Models\\User',
                'imageable_id' => 2,
                'name' => 'Sindy Dominguez',
                'alt' => 'Sindy Dominguez',
                'src' => 'assets/img/user/1tIgr4mgKjLeofVCrEzhlwaVDqPO3tVfgLfwdmwI.jpg',
                'created_at' => '2022-04-08 04:17:56',
                'updated_at' => '2022-04-08 04:17:56',
            ),
            18 => 
            array (
                'id' => 61,
                'imageable_type' => 'App\\Models\\Page',
                'imageable_id' => 3,
                'name' => 'About Us',
                'alt' => 'About Us',
                'src' => 'assets/img/page/QyY5BnNrGTm9OcOzasIggVI9SyhEEbp7BCBDPWbH.png',
                'created_at' => '2022-04-08 15:54:59',
                'updated_at' => '2022-04-08 15:54:59',
            ),
            19 => 
            array (
                'id' => 62,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 5,
                'name' => 'stain concrete',
                'alt' => 'stain concrete',
                'src' => 'assets/img/portfolio/h4fQWYl0PZl8ocawkrDxxxqRgLf9diHo0ApLVx7O.jpg',
                'created_at' => '2022-04-08 16:05:45',
                'updated_at' => '2022-04-08 16:05:45',
            ),
            20 => 
            array (
                'id' => 63,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 5,
                'name' => 'stain concrete',
                'alt' => 'stain concrete',
                'src' => 'assets/img/portfolio/0cwaBZ9MhB9z76XXaw8yv7TX5FDXQccOODKOxIQy.jpg',
                'created_at' => '2022-04-08 16:06:17',
                'updated_at' => '2022-04-08 16:06:17',
            ),
            21 => 
            array (
                'id' => 64,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 5,
                'name' => 'stain concrete',
                'alt' => 'stain concrete',
                'src' => 'assets/img/portfolio/I0xVPPMJw6ziX8KzhygGLHpuuZuX3xdXfiKBXry0.jpg',
                'created_at' => '2022-04-08 16:06:41',
                'updated_at' => '2022-04-08 16:06:41',
            ),
            22 => 
            array (
                'id' => 65,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 5,
                'name' => 'stain concrete',
                'alt' => 'stain concrete',
                'src' => 'assets/img/portfolio/RbdGH3DyfoYMVOw1BNAMWkxsrzxd0ueiPof33phV.jpg',
                'created_at' => '2022-04-08 16:06:51',
                'updated_at' => '2022-04-08 16:06:51',
            ),
            23 => 
            array (
                'id' => 67,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 3,
                'name' => 'Landscape',
                'alt' => 'Landscape',
                'src' => 'assets/img/portfolio/hJpc0JiW25JPZbXmM14kFsd8UXBiULAvkOVDglNN.jpg',
                'created_at' => '2022-04-08 16:21:34',
                'updated_at' => '2022-04-08 16:21:34',
            ),
            24 => 
            array (
                'id' => 68,
                'imageable_type' => 'App\\Models\\Service',
                'imageable_id' => 5,
                'name' => 'French Drains',
                'alt' => 'French Drains',
                'src' => 'assets/img/service/n8VaIr1KmiOfbwsTyloOqKxVs7yr7vKLdc5oAKxp.jpg',
                'created_at' => '2022-04-08 16:28:45',
                'updated_at' => '2022-04-08 16:28:45',
            ),
            25 => 
            array (
                'id' => 69,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 6,
                'name' => 'French Drains',
                'alt' => 'French Drains',
                'src' => 'assets/img/portfolio/wTbsWtMDnHSuFwwmJx3jyjvYgRsAus94PxFF5aOo.jpg',
                'created_at' => '2022-04-08 16:29:26',
                'updated_at' => '2022-04-08 16:29:26',
            ),
            26 => 
            array (
                'id' => 73,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 6,
                'name' => 'French Drains',
                'alt' => 'French Drains',
                'src' => 'assets/img/portfolio/YL2Y1L0ezmqLwoH1aZfm97AbEZ2LVqevLQ5ekNYp.jpg',
                'created_at' => '2022-04-08 16:43:44',
                'updated_at' => '2022-04-08 16:43:44',
            ),
            27 => 
            array (
                'id' => 74,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 6,
                'name' => 'French Drains',
                'alt' => 'French Drains',
                'src' => 'assets/img/portfolio/qB7F4b0iPAHfT3OMRqYJIltg58xPA5vRc7comorJ.jpg',
                'created_at' => '2022-04-08 16:43:52',
                'updated_at' => '2022-04-08 16:43:52',
            ),
            28 => 
            array (
                'id' => 75,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 6,
                'name' => 'French Drains',
                'alt' => 'French Drains',
                'src' => 'assets/img/portfolio/EUiBI4iSQ6SfnvzWizXo9VXLmhwUQdVUsrt6PffX.jpg',
                'created_at' => '2022-04-08 16:44:14',
                'updated_at' => '2022-04-08 16:44:14',
            ),
            29 => 
            array (
                'id' => 76,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 6,
                'name' => 'French Drains',
                'alt' => 'French Drains',
                'src' => 'assets/img/portfolio/eJGZc4X0zBAadGo7X09cvVK6hYl4AgCzBBqeGmrn.jpg',
                'created_at' => '2022-04-08 16:56:48',
                'updated_at' => '2022-04-08 16:56:48',
            ),
            30 => 
            array (
                'id' => 77,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 6,
                'name' => 'French Drains',
                'alt' => 'French Drains',
                'src' => 'assets/img/portfolio/g7Um4DIxTIfPZq02aeLRQ9LFE9PRUHxSVS4Nxp22.jpg',
                'created_at' => '2022-04-08 16:57:29',
                'updated_at' => '2022-04-08 16:57:29',
            ),
            31 => 
            array (
                'id' => 78,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 2,
                'name' => 'Sprinkler Irrigation',
                'alt' => 'Sprinkler Irrigation',
                'src' => 'assets/img/portfolio/3S2zJfwgNRea639j5MgyiUGm7XTIkJ6aTwLbLtWD.jpg',
                'created_at' => '2022-04-08 17:03:20',
                'updated_at' => '2022-04-08 17:03:20',
            ),
            32 => 
            array (
                'id' => 79,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 2,
                'name' => 'Sprinkler Irrigation',
                'alt' => 'Sprinkler Irrigation',
                'src' => 'assets/img/portfolio/4q8DaolLmacnIgtBYkaHgnYcLrMjdLC7vQe3P5Za.jpg',
                'created_at' => '2022-04-08 17:03:26',
                'updated_at' => '2022-04-08 17:03:26',
            ),
            33 => 
            array (
                'id' => 80,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 2,
                'name' => 'Sprinkler Irrigation',
                'alt' => 'Sprinkler Irrigation',
                'src' => 'assets/img/portfolio/TLj2HHtoyrTKfXMpP2isxrX0MFK78sYjvXC4Q4lO.jpg',
                'created_at' => '2022-04-08 17:06:02',
                'updated_at' => '2022-04-08 17:06:02',
            ),
            34 => 
            array (
                'id' => 81,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 2,
                'name' => 'Sprinkler Irrigation',
                'alt' => 'Sprinkler Irrigation',
                'src' => 'assets/img/portfolio/jny2u3QBKZEWWesNmIzpLtwxflfoyBfmvpbHgEZX.jpg',
                'created_at' => '2022-04-08 17:06:10',
                'updated_at' => '2022-04-08 17:06:10',
            ),
            35 => 
            array (
                'id' => 82,
                'imageable_type' => 'App\\Models\\Team',
                'imageable_id' => 1,
                'name' => 'Hamit Dominguez',
                'alt' => 'Hamit Dominguez',
                'src' => 'assets/img/team/ev30YcCEVfqEpXmTAIUzENiLytTbFKGfIgZCiutv.jpg',
                'created_at' => '2022-04-08 17:21:35',
                'updated_at' => '2022-04-08 17:21:35',
            ),
        ));
        
        
    }
}