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
                'alt' => 'Cachorro',
                'created_at' => '2022-01-12 20:06:51',
                'id' => 1,
                'imageable_id' => 1,
                'imageable_type' => 'App\\Models\\Product',
                'name' => 'Cachorro',
                'src' => 'r1.jpeg',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'alt' => 'Cachorro',
                'created_at' => '2022-01-17 20:06:49',
                'id' => 2,
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\Product',
                'name' => 'Cachorro',
                'src' => 'r2.jpeg',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'alt' => 'Logo',
                'created_at' => '2022-01-16 17:03:02',
                'id' => 3,
                'imageable_id' => 1,
                'imageable_type' => 'App\\Models\\User',
                'name' => 'Logo',
                'src' => 'assets/img/user/1edc586ed7b9dc06a9ecbf964902a5d0.jpg',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'alt' => 'About Us',
                'created_at' => '2022-03-18 04:11:39',
                'id' => 22,
                'imageable_id' => 3,
                'imageable_type' => 'App\\Models\\Page',
                'name' => 'About Us',
                'src' => 'assets/img/page/I1uqc0BVf4niXPkHJcxwOP2T00IqJ3x8SlL2634O.jpg',
                'updated_at' => '2022-03-18 04:11:39',
            ),
            4 => 
            array (
                'alt' => 'Hamit Domingues',
                'created_at' => '2022-03-18 04:11:47',
                'id' => 23,
                'imageable_id' => 1,
                'imageable_type' => 'App\\Models\\Team',
                'name' => 'Hamit Domingues',
                'src' => 'assets/img/team/5qMzxppDPR71jaBBBB4VKc9554CRez3gvvexXHOl.png',
                'updated_at' => '2022-03-18 04:11:47',
            ),
            5 => 
            array (
                'alt' => 'Landscape',
                'created_at' => '2022-03-18 22:26:42',
                'id' => 24,
                'imageable_id' => 1,
                'imageable_type' => 'App\\Models\\Service',
                'name' => 'Landscape',
                'src' => 'assets/img/service/gNpK2h6i2GEOYg5oigPlO9paQEy0dkQNtY9YwEYA.jpg',
                'updated_at' => '2022-03-18 22:26:42',
            ),
            6 => 
            array (
                'alt' => 'Irrigation',
                'created_at' => '2022-03-18 22:26:50',
                'id' => 25,
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\Service',
                'name' => 'Irrigation',
                'src' => 'assets/img/service/wZLQc5mKKTNYAOmArNGM0oPSG0r4KGiE2w2gzS3q.jpg',
                'updated_at' => '2022-03-18 22:26:50',
            ),
            7 => 
            array (
                'alt' => 'Concrete Jobs',
                'created_at' => '2022-03-18 22:27:30',
                'id' => 26,
                'imageable_id' => 3,
                'imageable_type' => 'App\\Models\\Service',
                'name' => 'Concrete Jobs',
                'src' => 'assets/img/service/4gjNwfyLOAuPby5EBHUM3KdY5ZBuNh8gHyybFVyV.jpg',
                'updated_at' => '2022-03-18 22:27:30',
            ),
            8 => 
            array (
                'alt' => 'teste',
                'created_at' => '2022-03-19 02:18:58',
                'id' => 30,
                'imageable_id' => 1,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'teste',
                'src' => 'assets/img/portfolio/Dr1YeODAJZTLZjS8VedFuCsASUdl58U4GJD5NRJL.jpg',
                'updated_at' => '2022-03-19 02:18:58',
            ),
            9 => 
            array (
                'alt' => 'Sprinkler Irrigation',
                'created_at' => '2022-03-19 02:22:32',
                'id' => 32,
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'Sprinkler Irrigation',
                'src' => 'assets/img/portfolio/q2D6ezPcF5Blls3ePNRXmG2r7pAKaVGbb0BenoIs.jpg',
                'updated_at' => '2022-03-19 02:22:32',
            ),
            10 => 
            array (
                'alt' => 'Flowerbad',
                'created_at' => '2022-03-19 02:23:59',
                'id' => 34,
                'imageable_id' => 3,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'Flowerbad',
                'src' => 'assets/img/portfolio/dQbFVSSN2SBD92djZpwAg7zEGfmtDhDaPiZZUxHP.jpg',
                'updated_at' => '2022-03-19 02:23:59',
            ),
            11 => 
            array (
                'alt' => 'Joao Domingues',
                'created_at' => '2022-03-19 19:05:20',
                'id' => 37,
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\Team',
                'name' => 'Joao Domingues',
                'src' => 'assets/img/team/PVEBHjlkqXFYTAoC9asekFt3wqFYMdV5CibjhRJr.png',
                'updated_at' => '2022-03-19 19:05:20',
            ),
            12 => 
            array (
                'alt' => 'Carlos Domingues',
                'created_at' => '2022-03-19 19:05:33',
                'id' => 38,
                'imageable_id' => 3,
                'imageable_type' => 'App\\Models\\Team',
                'name' => 'Carlos Domingues',
                'src' => 'assets/img/team/a54V8MoHrtXXUK9i36sz6zdJYiTihoNDQzY7pPWX.png',
                'updated_at' => '2022-03-19 19:05:33',
            ),
            13 => 
            array (
                'alt' => 'Henrique',
                'created_at' => '2022-03-19 19:06:30',
                'id' => 39,
                'imageable_id' => 4,
                'imageable_type' => 'App\\Models\\Team',
                'name' => 'Henrique',
                'src' => 'assets/img/team/eHK94zCWpFZnG3MiZtc4N8s0upXz4oKKTpVl607O.png',
                'updated_at' => '2022-03-19 19:06:30',
            ),
            14 => 
            array (
                'alt' => 'Evans Domingues',
                'created_at' => '2022-03-19 19:07:57',
                'id' => 40,
                'imageable_id' => 5,
                'imageable_type' => 'App\\Models\\Team',
                'name' => 'Evans Domingues',
                'src' => 'assets/img/team/2tRjOW5T2WKCnTwqYuG5MOw7isR2KIYGuXFd4bm1.png',
                'updated_at' => '2022-03-19 19:07:57',
            ),
            15 => 
            array (
                'alt' => 'Flowerbad',
                'created_at' => '2022-03-19 20:37:53',
                'id' => 45,
                'imageable_id' => 3,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'Flowerbad',
                'src' => 'assets/img/portfolio/iup5DfkPBIFQjrPpmUrBuul2Fb8er4pxniq0nKsM.jpg',
                'updated_at' => '2022-03-19 20:37:53',
            ),
            16 => 
            array (
                'alt' => 'Flowerbad',
                'created_at' => '2022-03-19 20:37:56',
                'id' => 46,
                'imageable_id' => 3,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'Flowerbad',
                'src' => 'assets/img/portfolio/vLNUtDvR0VHOr5VU3y1Kv5aEFM8jEvkC7dQOaqKj.jpg',
                'updated_at' => '2022-03-19 20:37:56',
            ),
            17 => 
            array (
                'alt' => 'Retaining Wall',
                'created_at' => '2022-03-19 20:39:03',
                'id' => 47,
                'imageable_id' => 4,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'Retaining Wall',
                'src' => 'assets/img/portfolio/iToTysnjbxWIyaHpqvkZt1EK4WI0m0vSV9ldxW1X.jpg',
                'updated_at' => '2022-03-19 20:39:03',
            ),
            18 => 
            array (
                'alt' => 'Retaining Wall',
                'created_at' => '2022-03-19 20:39:06',
                'id' => 48,
                'imageable_id' => 4,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'Retaining Wall',
                'src' => 'assets/img/portfolio/wGiZyA1FL5hMXAMC39n9JZX7yxjxnIBRFDYPz3h8.jpg',
                'updated_at' => '2022-03-19 20:39:06',
            ),
            19 => 
            array (
                'alt' => 'Retaining Wall',
                'created_at' => '2022-03-19 20:39:09',
                'id' => 49,
                'imageable_id' => 4,
                'imageable_type' => 'App\\Models\\Portfolio',
                'name' => 'Retaining Wall',
                'src' => 'assets/img/portfolio/O7HRhLA6gNBnt7WMFysdeEUHaAC6esAPEbm04nyq.jpg',
                'updated_at' => '2022-03-19 20:39:09',
            ),
            20 => 
            array (
                'alt' => 'Hamit Domingues',
                'created_at' => '2022-03-29 01:09:15',
                'id' => 50,
                'imageable_id' => 2,
                'imageable_type' => 'App\\Models\\User',
                'name' => 'Hamit Domingues',
                'src' => 'assets/img/user/XgqtMqGmT4he59EUtcArSHDxZsCYwaVnDjOQ7XLq.png',
                'updated_at' => '2022-03-29 01:09:15',
            ),
        ));
        
        
    }
}