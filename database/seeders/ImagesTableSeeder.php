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
                'alt' => 'Grinder',
                'created_at' => '2022-01-21 17:22:13',
                'id' => 13,
                'imageable_id' => 13,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Grinder',
                'src' => 'assets/img/category/tsLLSecH6654O38u9vaECzPESDjcDyuNhNGRnnZl.png',
                'updated_at' => '2022-01-21 17:22:13',
            ),
            4 => 
            array (
                'alt' => 'Glass Bowl',
                'created_at' => '2022-01-21 17:30:17',
                'id' => 14,
                'imageable_id' => 14,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Glass Bowl',
                'src' => 'assets/img/category/P1lbOQqz2JtkQon2LqOXm1NgWVlXWutKU6EN5tC6.png',
                'updated_at' => '2022-01-21 17:30:17',
            ),
            5 => 
            array (
                'alt' => 'Smoke Pipe',
                'created_at' => '2022-01-21 17:33:04',
                'id' => 15,
                'imageable_id' => 15,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Smoke Pipe',
                'src' => 'assets/img/category/9LOaVYfjTQHus3j7BgMtwyhIEXRCG7R75VKqzsrf.png',
                'updated_at' => '2022-01-21 17:33:04',
            ),
            6 => 
            array (
                'alt' => 'Smoke Glass Pipe',
                'created_at' => '2022-01-21 17:34:25',
                'id' => 16,
                'imageable_id' => 16,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Smoke Glass Pipe',
                'src' => 'assets/img/category/vmQ8R1qK50MLrb7PzBgHCaGShSjAr24wvEdHpweM.png',
                'updated_at' => '2022-01-21 17:34:25',
            ),
            7 => 
            array (
                'alt' => 'Rolling Tray',
                'created_at' => '2022-01-21 17:37:31',
                'id' => 17,
                'imageable_id' => 17,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Rolling Tray',
                'src' => 'assets/img/category/RLCcFYlQHKYAmttIiHmDuCeDJheGFHtlg3f0bMpM.png',
                'updated_at' => '2022-01-21 17:37:31',
            ),
            8 => 
            array (
                'alt' => 'Cleaning Brushes',
                'created_at' => '2022-01-21 17:42:17',
                'id' => 18,
                'imageable_id' => 18,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Cleaning Brushes',
                'src' => 'assets/img/category/XByRQ0uJ2vnBN05v9vhY0cm4Jb6UuEeUoya9JY4G.png',
                'updated_at' => '2022-01-21 17:42:17',
            ),
            9 => 
            array (
                'alt' => 'Classic papers',
                'created_at' => '2022-01-21 17:45:17',
                'id' => 19,
                'imageable_id' => 19,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Classic papers',
                'src' => 'assets/img/category/AN1SOqro6crCy9vH71nwoPl4CKod564sy8hJ0UJe.png',
                'updated_at' => '2022-01-21 17:45:17',
            ),
            10 => 
            array (
                'alt' => 'Organic  Papers',
                'created_at' => '2022-01-21 17:46:22',
                'id' => 20,
                'imageable_id' => 20,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Organic  Papers',
                'src' => 'assets/img/category/Lko0rr0MX1B1onQyfssOMeJFrdItUedksDcbqiHY.png',
                'updated_at' => '2022-01-21 17:46:22',
            ),
            11 => 
            array (
                'alt' => 'Classic PreRoll Cone',
                'created_at' => '2022-01-21 17:47:37',
                'id' => 21,
                'imageable_id' => 21,
                'imageable_type' => 'App\\Models\\Category',
                'name' => 'Classic PreRoll Cone',
                'src' => 'assets/img/category/lEGMBDbjoiDLKuQwseDPwowU41wJREutSx3Iz1sU.jpg',
                'updated_at' => '2022-01-21 17:47:37',
            ),
        ));
        
        
    }
}