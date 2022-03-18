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
                'id' => 13,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 13,
                'name' => 'Grinder',
                'alt' => 'Grinder',
                'src' => 'assets/img/category/tsLLSecH6654O38u9vaECzPESDjcDyuNhNGRnnZl.png',
                'created_at' => '2022-01-21 17:22:13',
                'updated_at' => '2022-01-21 17:22:13',
            ),
            4 => 
            array (
                'id' => 14,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 14,
                'name' => 'Glass Bowl',
                'alt' => 'Glass Bowl',
                'src' => 'assets/img/category/P1lbOQqz2JtkQon2LqOXm1NgWVlXWutKU6EN5tC6.png',
                'created_at' => '2022-01-21 17:30:17',
                'updated_at' => '2022-01-21 17:30:17',
            ),
            5 => 
            array (
                'id' => 15,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 15,
                'name' => 'Smoke Pipe',
                'alt' => 'Smoke Pipe',
                'src' => 'assets/img/category/9LOaVYfjTQHus3j7BgMtwyhIEXRCG7R75VKqzsrf.png',
                'created_at' => '2022-01-21 17:33:04',
                'updated_at' => '2022-01-21 17:33:04',
            ),
            6 => 
            array (
                'id' => 16,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 16,
                'name' => 'Smoke Glass Pipe',
                'alt' => 'Smoke Glass Pipe',
                'src' => 'assets/img/category/vmQ8R1qK50MLrb7PzBgHCaGShSjAr24wvEdHpweM.png',
                'created_at' => '2022-01-21 17:34:25',
                'updated_at' => '2022-01-21 17:34:25',
            ),
            7 => 
            array (
                'id' => 17,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 17,
                'name' => 'Rolling Tray',
                'alt' => 'Rolling Tray',
                'src' => 'assets/img/category/RLCcFYlQHKYAmttIiHmDuCeDJheGFHtlg3f0bMpM.png',
                'created_at' => '2022-01-21 17:37:31',
                'updated_at' => '2022-01-21 17:37:31',
            ),
            8 => 
            array (
                'id' => 18,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 18,
                'name' => 'Cleaning Brushes',
                'alt' => 'Cleaning Brushes',
                'src' => 'assets/img/category/XByRQ0uJ2vnBN05v9vhY0cm4Jb6UuEeUoya9JY4G.png',
                'created_at' => '2022-01-21 17:42:17',
                'updated_at' => '2022-01-21 17:42:17',
            ),
            9 => 
            array (
                'id' => 19,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 19,
                'name' => 'Classic papers',
                'alt' => 'Classic papers',
                'src' => 'assets/img/category/AN1SOqro6crCy9vH71nwoPl4CKod564sy8hJ0UJe.png',
                'created_at' => '2022-01-21 17:45:17',
                'updated_at' => '2022-01-21 17:45:17',
            ),
            10 => 
            array (
                'id' => 20,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 20,
                'name' => 'Organic  Papers',
                'alt' => 'Organic  Papers',
                'src' => 'assets/img/category/Lko0rr0MX1B1onQyfssOMeJFrdItUedksDcbqiHY.png',
                'created_at' => '2022-01-21 17:46:22',
                'updated_at' => '2022-01-21 17:46:22',
            ),
            11 => 
            array (
                'id' => 21,
                'imageable_type' => 'App\\Models\\Category',
                'imageable_id' => 21,
                'name' => 'Classic PreRoll Cone',
                'alt' => 'Classic PreRoll Cone',
                'src' => 'assets/img/category/lEGMBDbjoiDLKuQwseDPwowU41wJREutSx3Iz1sU.jpg',
                'created_at' => '2022-01-21 17:47:37',
                'updated_at' => '2022-01-21 17:47:37',
            ),
            12 => 
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
            13 => 
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
        ));
        
        
    }
}