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
                'id' => 22,
                'imageable_type' => 'App\\Models\\Page',
                'imageable_id' => 3,
                'name' => 'About Us',
                'alt' => 'About Us',
                'src' => 'assets/img/page/I1uqc0BVf4niXPkHJcxwOP2T00IqJ3x8SlL2634O.jpg',
                'created_at' => '2022-03-18 04:11:39',
                'updated_at' => '2022-03-18 04:11:39',
            ),
            4 => 
            array (
                'id' => 23,
                'imageable_type' => 'App\\Models\\Team',
                'imageable_id' => 1,
                'name' => 'Hamit Domingues',
                'alt' => 'Hamit Domingues',
                'src' => 'assets/img/team/5qMzxppDPR71jaBBBB4VKc9554CRez3gvvexXHOl.png',
                'created_at' => '2022-03-18 04:11:47',
                'updated_at' => '2022-03-18 04:11:47',
            ),
            5 => 
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
            6 => 
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
            7 => 
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
            8 => 
            array (
                'id' => 30,
                'imageable_type' => 'App\\Models\\Portfolio',
                'imageable_id' => 1,
                'name' => 'teste',
                'alt' => 'teste',
                'src' => 'assets/img/portfolio/Dr1YeODAJZTLZjS8VedFuCsASUdl58U4GJD5NRJL.jpg',
                'created_at' => '2022-03-19 02:18:58',
                'updated_at' => '2022-03-19 02:18:58',
            ),
            9 => 
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
            10 => 
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
            11 => 
            array (
                'id' => 37,
                'imageable_type' => 'App\\Models\\Team',
                'imageable_id' => 2,
                'name' => 'Joao Domingues',
                'alt' => 'Joao Domingues',
                'src' => 'assets/img/team/PVEBHjlkqXFYTAoC9asekFt3wqFYMdV5CibjhRJr.png',
                'created_at' => '2022-03-19 19:05:20',
                'updated_at' => '2022-03-19 19:05:20',
            ),
            12 => 
            array (
                'id' => 38,
                'imageable_type' => 'App\\Models\\Team',
                'imageable_id' => 3,
                'name' => 'Carlos Domingues',
                'alt' => 'Carlos Domingues',
                'src' => 'assets/img/team/a54V8MoHrtXXUK9i36sz6zdJYiTihoNDQzY7pPWX.png',
                'created_at' => '2022-03-19 19:05:33',
                'updated_at' => '2022-03-19 19:05:33',
            ),
            13 => 
            array (
                'id' => 39,
                'imageable_type' => 'App\\Models\\Team',
                'imageable_id' => 4,
                'name' => 'Henrique',
                'alt' => 'Henrique',
                'src' => 'assets/img/team/eHK94zCWpFZnG3MiZtc4N8s0upXz4oKKTpVl607O.png',
                'created_at' => '2022-03-19 19:06:30',
                'updated_at' => '2022-03-19 19:06:30',
            ),
            14 => 
            array (
                'id' => 40,
                'imageable_type' => 'App\\Models\\Team',
                'imageable_id' => 5,
                'name' => 'Evans Domingues',
                'alt' => 'Evans Domingues',
                'src' => 'assets/img/team/2tRjOW5T2WKCnTwqYuG5MOw7isR2KIYGuXFd4bm1.png',
                'created_at' => '2022-03-19 19:07:57',
                'updated_at' => '2022-03-19 19:07:57',
            ),
            15 => 
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
            16 => 
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
            17 => 
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
            18 => 
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
            19 => 
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
        ));
        
        
    }
}