<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZipcodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zipcodes')->delete();
        
        \DB::table('zipcodes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'zip_code' => '01778',
                'city_id' => 10481,
                'created_at' => '2022-01-04 13:27:00',
                'updated_at' => '2022-01-04 13:27:00',
            ),
            1 => 
            array (
                'id' => 2,
                'zip_code' => '73528',
                'city_id' => 20596,
                'created_at' => '2022-01-04 13:27:00',
                'updated_at' => '2022-01-04 13:27:00',
            ),
            2 => 
            array (
                'id' => 3,
                'zip_code' => '76131',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:27:00',
                'updated_at' => '2022-01-04 13:27:00',
            ),
            3 => 
            array (
                'id' => 4,
                'zip_code' => '73110',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:27:00',
                'updated_at' => '2022-01-04 13:27:00',
            ),
            4 => 
            array (
                'id' => 5,
                'zip_code' => '73108',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:27:00',
                'updated_at' => '2022-01-04 13:27:00',
            ),
            5 => 
            array (
                'id' => 6,
                'zip_code' => '67735',
                'city_id' => 8346,
                'created_at' => '2022-01-04 13:27:01',
                'updated_at' => '2022-01-04 13:27:01',
            ),
            6 => 
            array (
                'id' => 7,
                'zip_code' => '73938',
                'city_id' => 20689,
                'created_at' => '2022-01-04 13:27:01',
                'updated_at' => '2022-01-04 13:27:01',
            ),
            7 => 
            array (
                'id' => 8,
                'zip_code' => '73018',
                'city_id' => 20602,
                'created_at' => '2022-01-04 13:27:01',
                'updated_at' => '2022-01-04 13:27:01',
            ),
            8 => 
            array (
                'id' => 9,
                'zip_code' => '26378',
                'city_id' => 29150,
                'created_at' => '2022-01-04 13:27:01',
                'updated_at' => '2022-01-04 13:27:01',
            ),
            9 => 
            array (
                'id' => 10,
                'zip_code' => '67124',
                'city_id' => 8606,
                'created_at' => '2022-01-04 13:27:02',
                'updated_at' => '2022-01-04 13:27:02',
            ),
            10 => 
            array (
                'id' => 11,
                'zip_code' => '74857',
                'city_id' => 20872,
                'created_at' => '2022-01-04 13:27:02',
                'updated_at' => '2022-01-04 13:27:02',
            ),
            11 => 
            array (
                'id' => 12,
                'zip_code' => '71457',
                'city_id' => 9876,
                'created_at' => '2022-01-04 13:27:02',
                'updated_at' => '2022-01-04 13:27:02',
            ),
            12 => 
            array (
                'id' => 13,
                'zip_code' => '72065',
                'city_id' => 1065,
                'created_at' => '2022-01-04 13:27:02',
                'updated_at' => '2022-01-04 13:27:02',
            ),
            13 => 
            array (
                'id' => 14,
                'zip_code' => '23701',
                'city_id' => 27037,
                'created_at' => '2022-01-04 13:27:03',
                'updated_at' => '2022-01-04 13:27:03',
            ),
            14 => 
            array (
                'id' => 15,
                'zip_code' => '78046',
                'city_id' => 25442,
                'created_at' => '2022-01-04 13:27:03',
                'updated_at' => '2022-01-04 13:27:03',
            ),
            15 => 
            array (
                'id' => 16,
                'zip_code' => '73939',
                'city_id' => 20714,
                'created_at' => '2022-01-04 13:27:03',
                'updated_at' => '2022-01-04 13:27:03',
            ),
            16 => 
            array (
                'id' => 17,
                'zip_code' => '74023',
                'city_id' => 20634,
                'created_at' => '2022-01-04 13:27:03',
                'updated_at' => '2022-01-04 13:27:03',
            ),
            17 => 
            array (
                'id' => 18,
                'zip_code' => '73099',
                'city_id' => 21081,
                'created_at' => '2022-01-04 13:27:03',
                'updated_at' => '2022-01-04 13:27:03',
            ),
            18 => 
            array (
                'id' => 19,
                'zip_code' => '74437',
                'city_id' => 20745,
                'created_at' => '2022-01-04 13:27:04',
                'updated_at' => '2022-01-04 13:27:04',
            ),
            19 => 
            array (
                'id' => 20,
                'zip_code' => '75482',
                'city_id' => 26002,
                'created_at' => '2022-01-04 13:27:04',
                'updated_at' => '2022-01-04 13:27:04',
            ),
            20 => 
            array (
                'id' => 21,
                'zip_code' => '74851',
                'city_id' => 20839,
                'created_at' => '2022-01-04 13:27:04',
                'updated_at' => '2022-01-04 13:27:04',
            ),
            21 => 
            array (
                'id' => 22,
                'zip_code' => '71032',
                'city_id' => 9739,
                'created_at' => '2022-01-04 13:27:04',
                'updated_at' => '2022-01-04 13:27:04',
            ),
            22 => 
            array (
                'id' => 23,
                'zip_code' => '76111',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:27:04',
                'updated_at' => '2022-01-04 13:27:04',
            ),
            23 => 
            array (
                'id' => 24,
                'zip_code' => '26508',
                'city_id' => 29267,
                'created_at' => '2022-01-04 13:27:05',
                'updated_at' => '2022-01-04 13:27:05',
            ),
            24 => 
            array (
                'id' => 25,
                'zip_code' => '74014',
                'city_id' => 20561,
                'created_at' => '2022-01-04 13:27:05',
                'updated_at' => '2022-01-04 13:27:05',
            ),
            25 => 
            array (
                'id' => 26,
                'zip_code' => '26501',
                'city_id' => 29267,
                'created_at' => '2022-01-04 13:27:05',
                'updated_at' => '2022-01-04 13:27:05',
            ),
            26 => 
            array (
                'id' => 27,
                'zip_code' => '39661',
                'city_id' => 14399,
                'created_at' => '2022-01-04 13:27:05',
                'updated_at' => '2022-01-04 13:27:05',
            ),
            27 => 
            array (
                'id' => 28,
                'zip_code' => '74451',
                'city_id' => 20905,
                'created_at' => '2022-01-04 13:27:05',
                'updated_at' => '2022-01-04 13:27:05',
            ),
            28 => 
            array (
                'id' => 29,
                'zip_code' => '43230',
                'city_id' => 19635,
                'created_at' => '2022-01-04 13:27:06',
                'updated_at' => '2022-01-04 13:27:06',
            ),
            29 => 
            array (
                'id' => 30,
                'zip_code' => '76240',
                'city_id' => 25204,
                'created_at' => '2022-01-04 13:27:06',
                'updated_at' => '2022-01-04 13:27:06',
            ),
            30 => 
            array (
                'id' => 31,
                'zip_code' => '76389',
                'city_id' => 26160,
                'created_at' => '2022-01-04 13:27:06',
                'updated_at' => '2022-01-04 13:27:06',
            ),
            31 => 
            array (
                'id' => 32,
                'zip_code' => '72956',
                'city_id' => 1361,
                'created_at' => '2022-01-04 13:27:06',
                'updated_at' => '2022-01-04 13:27:06',
            ),
            32 => 
            array (
                'id' => 33,
                'zip_code' => '65068',
                'city_id' => 13835,
                'created_at' => '2022-01-04 13:27:06',
                'updated_at' => '2022-01-04 13:27:06',
            ),
            33 => 
            array (
                'id' => 34,
                'zip_code' => '43031',
                'city_id' => 19874,
                'created_at' => '2022-01-04 13:27:07',
                'updated_at' => '2022-01-04 13:27:07',
            ),
            34 => 
            array (
                'id' => 35,
                'zip_code' => '67526',
                'city_id' => 8288,
                'created_at' => '2022-01-04 13:27:07',
                'updated_at' => '2022-01-04 13:27:07',
            ),
            35 => 
            array (
                'id' => 36,
                'zip_code' => '74953',
                'city_id' => 20923,
                'created_at' => '2022-01-04 13:27:07',
                'updated_at' => '2022-01-04 13:27:07',
            ),
            36 => 
            array (
                'id' => 37,
                'zip_code' => '73654',
                'city_id' => 20801,
                'created_at' => '2022-01-04 13:27:07',
                'updated_at' => '2022-01-04 13:27:07',
            ),
            37 => 
            array (
                'id' => 38,
                'zip_code' => '74855',
                'city_id' => 20843,
                'created_at' => '2022-01-04 13:27:08',
                'updated_at' => '2022-01-04 13:27:08',
            ),
            38 => 
            array (
                'id' => 39,
                'zip_code' => '39520',
                'city_id' => 14091,
                'created_at' => '2022-01-04 13:27:08',
                'updated_at' => '2022-01-04 13:27:08',
            ),
            39 => 
            array (
                'id' => 40,
                'zip_code' => '84004',
                'city_id' => 26187,
                'created_at' => '2022-01-04 13:27:08',
                'updated_at' => '2022-01-04 13:27:08',
            ),
            40 => 
            array (
                'id' => 41,
                'zip_code' => '26415',
                'city_id' => 29335,
                'created_at' => '2022-01-04 13:27:08',
                'updated_at' => '2022-01-04 13:27:08',
            ),
            41 => 
            array (
                'id' => 42,
                'zip_code' => '76427',
                'city_id' => 24887,
                'created_at' => '2022-01-04 13:27:09',
                'updated_at' => '2022-01-04 13:27:09',
            ),
            42 => 
            array (
                'id' => 43,
                'zip_code' => '71929',
                'city_id' => 860,
                'created_at' => '2022-01-04 13:27:09',
                'updated_at' => '2022-01-04 13:27:09',
            ),
            43 => 
            array (
                'id' => 44,
                'zip_code' => '73647',
                'city_id' => 20695,
                'created_at' => '2022-01-04 13:27:09',
                'updated_at' => '2022-01-04 13:27:09',
            ),
            44 => 
            array (
                'id' => 45,
                'zip_code' => '76309',
                'city_id' => 26149,
                'created_at' => '2022-01-04 13:27:09',
                'updated_at' => '2022-01-04 13:27:09',
            ),
            45 => 
            array (
                'id' => 46,
                'zip_code' => '73098',
                'city_id' => 21078,
                'created_at' => '2022-01-04 13:27:09',
                'updated_at' => '2022-01-04 13:27:09',
            ),
            46 => 
            array (
                'id' => 47,
                'zip_code' => '34471',
                'city_id' => 3992,
                'created_at' => '2022-01-04 13:27:10',
                'updated_at' => '2022-01-04 13:27:10',
            ),
            47 => 
            array (
                'id' => 48,
                'zip_code' => '73020',
                'city_id' => 20603,
                'created_at' => '2022-01-04 13:27:10',
                'updated_at' => '2022-01-04 13:27:10',
            ),
            48 => 
            array (
                'id' => 49,
                'zip_code' => '76255',
                'city_id' => 25661,
                'created_at' => '2022-01-04 13:27:10',
                'updated_at' => '2022-01-04 13:27:10',
            ),
            49 => 
            array (
                'id' => 50,
                'zip_code' => '74831',
                'city_id' => 20571,
                'created_at' => '2022-01-04 13:27:10',
                'updated_at' => '2022-01-04 13:27:10',
            ),
            50 => 
            array (
                'id' => 51,
                'zip_code' => '74462',
                'city_id' => 20993,
                'created_at' => '2022-01-04 13:27:10',
                'updated_at' => '2022-01-04 13:27:10',
            ),
            51 => 
            array (
                'id' => 52,
                'zip_code' => '72855',
                'city_id' => 1230,
                'created_at' => '2022-01-04 13:27:11',
                'updated_at' => '2022-01-04 13:27:11',
            ),
            52 => 
            array (
                'id' => 53,
                'zip_code' => '76248',
                'city_id' => 25381,
                'created_at' => '2022-01-04 13:27:11',
                'updated_at' => '2022-01-04 13:27:11',
            ),
            53 => 
            array (
                'id' => 54,
                'zip_code' => '74538',
                'city_id' => 20611,
                'created_at' => '2022-01-04 13:27:11',
                'updated_at' => '2022-01-04 13:27:11',
            ),
            54 => 
            array (
                'id' => 55,
                'zip_code' => '72847',
                'city_id' => 1138,
                'created_at' => '2022-01-04 13:27:16',
                'updated_at' => '2022-01-04 13:27:16',
            ),
            55 => 
            array (
                'id' => 56,
                'zip_code' => '73075',
                'city_id' => 20906,
                'created_at' => '2022-01-04 13:27:16',
                'updated_at' => '2022-01-04 13:27:16',
            ),
            56 => 
            array (
                'id' => 57,
                'zip_code' => '31313',
                'city_id' => 4438,
                'created_at' => '2022-01-04 13:27:17',
                'updated_at' => '2022-01-04 13:27:17',
            ),
            57 => 
            array (
                'id' => 58,
                'zip_code' => '73559',
                'city_id' => 20860,
                'created_at' => '2022-01-04 13:27:17',
                'updated_at' => '2022-01-04 13:27:17',
            ),
            58 => 
            array (
                'id' => 59,
                'zip_code' => '73116',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:27:17',
                'updated_at' => '2022-01-04 13:27:17',
            ),
            59 => 
            array (
                'id' => 60,
                'zip_code' => '73662',
                'city_id' => 20966,
                'created_at' => '2022-01-04 13:27:17',
                'updated_at' => '2022-01-04 13:27:17',
            ),
            60 => 
            array (
                'id' => 61,
                'zip_code' => '71467',
                'city_id' => 9917,
                'created_at' => '2022-01-04 13:27:18',
                'updated_at' => '2022-01-04 13:27:18',
            ),
            61 => 
            array (
                'id' => 62,
                'zip_code' => '73078',
                'city_id' => 20914,
                'created_at' => '2022-01-04 13:27:18',
                'updated_at' => '2022-01-04 13:27:18',
            ),
            62 => 
            array (
                'id' => 63,
                'zip_code' => '76179',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:27:18',
                'updated_at' => '2022-01-04 13:27:18',
            ),
            63 => 
            array (
                'id' => 64,
                'zip_code' => '73115',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:27:18',
                'updated_at' => '2022-01-04 13:27:18',
            ),
            64 => 
            array (
                'id' => 65,
                'zip_code' => '74432',
                'city_id' => 20674,
                'created_at' => '2022-01-04 13:27:18',
                'updated_at' => '2022-01-04 13:27:18',
            ),
            65 => 
            array (
                'id' => 66,
                'zip_code' => '73080',
                'city_id' => 20929,
                'created_at' => '2022-01-04 13:27:18',
                'updated_at' => '2022-01-04 13:27:18',
            ),
            66 => 
            array (
                'id' => 67,
                'zip_code' => '78227',
                'city_id' => 25892,
                'created_at' => '2022-01-04 13:27:19',
                'updated_at' => '2022-01-04 13:27:19',
            ),
            67 => 
            array (
                'id' => 68,
                'zip_code' => '73639',
                'city_id' => 20635,
                'created_at' => '2022-01-04 13:27:19',
                'updated_at' => '2022-01-04 13:27:19',
            ),
            68 => 
            array (
                'id' => 69,
                'zip_code' => '67846',
                'city_id' => 8328,
                'created_at' => '2022-01-04 13:27:19',
                'updated_at' => '2022-01-04 13:27:19',
            ),
            69 => 
            array (
                'id' => 70,
                'zip_code' => '76134',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:27:19',
                'updated_at' => '2022-01-04 13:27:19',
            ),
            70 => 
            array (
                'id' => 71,
                'zip_code' => '58854',
                'city_id' => 15988,
                'created_at' => '2022-01-04 13:27:19',
                'updated_at' => '2022-01-04 13:27:19',
            ),
            71 => 
            array (
                'id' => 72,
                'zip_code' => '76302',
                'city_id' => 26149,
                'created_at' => '2022-01-04 13:27:20',
                'updated_at' => '2022-01-04 13:27:20',
            ),
            72 => 
            array (
                'id' => 73,
                'zip_code' => '76210',
                'city_id' => 25063,
                'created_at' => '2022-01-04 13:27:20',
                'updated_at' => '2022-01-04 13:27:20',
            ),
            73 => 
            array (
                'id' => 74,
                'zip_code' => '59840',
                'city_id' => 14656,
                'created_at' => '2022-01-04 13:27:20',
                'updated_at' => '2022-01-04 13:27:20',
            ),
            74 => 
            array (
                'id' => 75,
                'zip_code' => '72543',
                'city_id' => 1061,
                'created_at' => '2022-01-04 13:27:20',
                'updated_at' => '2022-01-04 13:27:20',
            ),
            75 => 
            array (
                'id' => 76,
                'zip_code' => '73112',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:27:21',
                'updated_at' => '2022-01-04 13:27:21',
            ),
            76 => 
            array (
                'id' => 77,
                'zip_code' => '75791',
                'city_id' => 26142,
                'created_at' => '2022-01-04 13:27:21',
                'updated_at' => '2022-01-04 13:27:21',
            ),
            77 => 
            array (
                'id' => 78,
                'zip_code' => '73801',
                'city_id' => 21075,
                'created_at' => '2022-01-04 13:27:21',
                'updated_at' => '2022-01-04 13:27:21',
            ),
            78 => 
            array (
                'id' => 79,
                'zip_code' => '76028',
                'city_id' => 24900,
                'created_at' => '2022-01-04 13:27:21',
                'updated_at' => '2022-01-04 13:27:21',
            ),
            79 => 
            array (
                'id' => 80,
                'zip_code' => '76140',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:27:21',
                'updated_at' => '2022-01-04 13:27:21',
            ),
            80 => 
            array (
                'id' => 81,
                'zip_code' => '76354',
                'city_id' => 24897,
                'created_at' => '2022-01-04 13:27:22',
                'updated_at' => '2022-01-04 13:27:22',
            ),
            81 => 
            array (
                'id' => 82,
                'zip_code' => '71301',
                'city_id' => 9563,
                'created_at' => '2022-01-04 13:27:22',
                'updated_at' => '2022-01-04 13:27:22',
            ),
            82 => 
            array (
                'id' => 83,
                'zip_code' => '72943',
                'city_id' => 1147,
                'created_at' => '2022-01-04 13:27:22',
                'updated_at' => '2022-01-04 13:27:22',
            ),
            83 => 
            array (
                'id' => 84,
                'zip_code' => '39330',
                'city_id' => 14185,
                'created_at' => '2022-01-04 13:27:22',
                'updated_at' => '2022-01-04 13:27:22',
            ),
            84 => 
            array (
                'id' => 85,
                'zip_code' => '23322',
                'city_id' => 26582,
                'created_at' => '2022-01-04 13:27:23',
                'updated_at' => '2022-01-04 13:27:23',
            ),
            85 => 
            array (
                'id' => 86,
                'zip_code' => '74549',
                'city_id' => 29739,
                'created_at' => '2022-01-04 13:27:23',
                'updated_at' => '2022-01-04 13:27:23',
            ),
            86 => 
            array (
                'id' => 87,
                'zip_code' => '73773',
                'city_id' => 21055,
                'created_at' => '2022-01-04 13:27:23',
                'updated_at' => '2022-01-04 13:27:23',
            ),
            87 => 
            array (
                'id' => 88,
                'zip_code' => '84655',
                'city_id' => 26394,
                'created_at' => '2022-01-04 13:27:23',
                'updated_at' => '2022-01-04 13:27:23',
            ),
            88 => 
            array (
                'id' => 89,
                'zip_code' => '27041',
                'city_id' => 15385,
                'created_at' => '2022-01-04 13:29:40',
                'updated_at' => '2022-01-04 13:29:40',
            ),
            89 => 
            array (
                'id' => 90,
                'zip_code' => '45735',
                'city_id' => 19797,
                'created_at' => '2022-01-04 13:29:40',
                'updated_at' => '2022-01-04 13:29:40',
            ),
            90 => 
            array (
                'id' => 91,
                'zip_code' => '73162',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:29:40',
                'updated_at' => '2022-01-04 13:29:40',
            ),
            91 => 
            array (
                'id' => 92,
                'zip_code' => '73527',
                'city_id' => 20572,
                'created_at' => '2022-01-04 13:29:41',
                'updated_at' => '2022-01-04 13:29:41',
            ),
            92 => 
            array (
                'id' => 93,
                'zip_code' => '98229',
                'city_id' => 27591,
                'created_at' => '2022-01-04 13:29:41',
                'updated_at' => '2022-01-04 13:29:41',
            ),
            93 => 
            array (
                'id' => 94,
                'zip_code' => '73772',
                'city_id' => 21052,
                'created_at' => '2022-01-04 13:29:41',
                'updated_at' => '2022-01-04 13:29:41',
            ),
            94 => 
            array (
                'id' => 95,
                'zip_code' => '75938',
                'city_id' => 24987,
                'created_at' => '2022-01-04 13:29:41',
                'updated_at' => '2022-01-04 13:29:41',
            ),
            95 => 
            array (
                'id' => 96,
                'zip_code' => '74832',
                'city_id' => 20586,
                'created_at' => '2022-01-04 13:29:42',
                'updated_at' => '2022-01-04 13:29:42',
            ),
            96 => 
            array (
                'id' => 97,
                'zip_code' => '79065',
                'city_id' => 25713,
                'created_at' => '2022-01-04 13:29:42',
                'updated_at' => '2022-01-04 13:29:42',
            ),
            97 => 
            array (
                'id' => 98,
                'zip_code' => '73626',
                'city_id' => 20582,
                'created_at' => '2022-01-04 13:29:42',
                'updated_at' => '2022-01-04 13:29:42',
            ),
            98 => 
            array (
                'id' => 99,
                'zip_code' => '74578',
                'city_id' => 21071,
                'created_at' => '2022-01-04 13:29:42',
                'updated_at' => '2022-01-04 13:29:42',
            ),
            99 => 
            array (
                'id' => 100,
                'zip_code' => '72106',
                'city_id' => 1163,
                'created_at' => '2022-01-04 13:29:42',
                'updated_at' => '2022-01-04 13:29:42',
            ),
            100 => 
            array (
                'id' => 101,
                'zip_code' => '79057',
                'city_id' => 25564,
                'created_at' => '2022-01-04 13:29:43',
                'updated_at' => '2022-01-04 13:29:43',
            ),
            101 => 
            array (
                'id' => 102,
                'zip_code' => '76105',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:29:43',
                'updated_at' => '2022-01-04 13:29:43',
            ),
            102 => 
            array (
                'id' => 103,
                'zip_code' => '74872',
                'city_id' => 20998,
                'created_at' => '2022-01-04 13:29:43',
                'updated_at' => '2022-01-04 13:29:43',
            ),
            103 => 
            array (
                'id' => 104,
                'zip_code' => '72124',
                'city_id' => 1209,
                'created_at' => '2022-01-04 13:29:43',
                'updated_at' => '2022-01-04 13:29:43',
            ),
            104 => 
            array (
                'id' => 105,
                'zip_code' => '79118',
                'city_id' => 24748,
                'created_at' => '2022-01-04 13:29:43',
                'updated_at' => '2022-01-04 13:29:43',
            ),
            105 => 
            array (
                'id' => 106,
                'zip_code' => '73013',
                'city_id' => 20664,
                'created_at' => '2022-01-04 13:29:44',
                'updated_at' => '2022-01-04 13:29:44',
            ),
            106 => 
            array (
                'id' => 107,
                'zip_code' => '71429',
                'city_id' => 9707,
                'created_at' => '2022-01-04 13:29:44',
                'updated_at' => '2022-01-04 13:29:44',
            ),
            107 => 
            array (
                'id' => 108,
                'zip_code' => '69001',
                'city_id' => 16315,
                'created_at' => '2022-01-04 13:29:44',
                'updated_at' => '2022-01-04 13:29:44',
            ),
            108 => 
            array (
                'id' => 109,
                'zip_code' => '74955',
                'city_id' => 20960,
                'created_at' => '2022-01-04 13:29:44',
                'updated_at' => '2022-01-04 13:29:44',
            ),
            109 => 
            array (
                'id' => 110,
                'zip_code' => '72751',
                'city_id' => 1237,
                'created_at' => '2022-01-04 13:29:44',
                'updated_at' => '2022-01-04 13:29:44',
            ),
            110 => 
            array (
                'id' => 111,
                'zip_code' => '73010',
                'city_id' => 20546,
                'created_at' => '2022-01-04 13:29:45',
                'updated_at' => '2022-01-04 13:29:45',
            ),
            111 => 
            array (
                'id' => 112,
                'zip_code' => '76023',
                'city_id' => 24859,
                'created_at' => '2022-01-04 13:29:45',
                'updated_at' => '2022-01-04 13:29:45',
            ),
            112 => 
            array (
                'id' => 113,
                'zip_code' => '76065',
                'city_id' => 25588,
                'created_at' => '2022-01-04 13:29:45',
                'updated_at' => '2022-01-04 13:29:45',
            ),
            113 => 
            array (
                'id' => 114,
                'zip_code' => '74647',
                'city_id' => 20874,
                'created_at' => '2022-01-04 13:29:45',
                'updated_at' => '2022-01-04 13:29:45',
            ),
            114 => 
            array (
                'id' => 115,
                'zip_code' => '73750',
                'city_id' => 20785,
                'created_at' => '2022-01-04 13:29:46',
                'updated_at' => '2022-01-04 13:29:46',
            ),
            115 => 
            array (
                'id' => 116,
                'zip_code' => '78801',
                'city_id' => 26074,
                'created_at' => '2022-01-04 13:29:46',
                'updated_at' => '2022-01-04 13:29:46',
            ),
            116 => 
            array (
                'id' => 117,
                'zip_code' => '73071',
                'city_id' => 20878,
                'created_at' => '2022-01-04 13:29:46',
                'updated_at' => '2022-01-04 13:29:46',
            ),
            117 => 
            array (
                'id' => 118,
                'zip_code' => '71107',
                'city_id' => 9963,
                'created_at' => '2022-01-04 13:29:46',
                'updated_at' => '2022-01-04 13:29:46',
            ),
            118 => 
            array (
                'id' => 119,
                'zip_code' => '73067',
                'city_id' => 20876,
                'created_at' => '2022-01-04 13:29:47',
                'updated_at' => '2022-01-04 13:29:47',
            ),
            119 => 
            array (
                'id' => 120,
                'zip_code' => '73130',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:29:47',
                'updated_at' => '2022-01-04 13:29:47',
            ),
            120 => 
            array (
                'id' => 121,
                'zip_code' => '78052',
                'city_id' => 25517,
                'created_at' => '2022-01-04 13:29:47',
                'updated_at' => '2022-01-04 13:29:47',
            ),
            121 => 
            array (
                'id' => 122,
                'zip_code' => '76044',
                'city_id' => 25232,
                'created_at' => '2022-01-04 13:29:47',
                'updated_at' => '2022-01-04 13:29:47',
            ),
            122 => 
            array (
                'id' => 123,
                'zip_code' => '73401',
                'city_id' => 20522,
                'created_at' => '2022-01-04 13:29:47',
                'updated_at' => '2022-01-04 13:29:47',
            ),
            123 => 
            array (
                'id' => 124,
                'zip_code' => '73052',
                'city_id' => 20809,
                'created_at' => '2022-01-04 13:29:48',
                'updated_at' => '2022-01-04 13:29:48',
            ),
            124 => 
            array (
                'id' => 125,
                'zip_code' => '74947',
                'city_id' => 20854,
                'created_at' => '2022-01-04 13:29:48',
                'updated_at' => '2022-01-04 13:29:48',
            ),
            125 => 
            array (
                'id' => 126,
                'zip_code' => '73074',
                'city_id' => 20904,
                'created_at' => '2022-01-04 13:29:48',
                'updated_at' => '2022-01-04 13:29:48',
            ),
            126 => 
            array (
                'id' => 127,
                'zip_code' => '57703',
                'city_id' => 24072,
                'created_at' => '2022-01-04 13:29:48',
                'updated_at' => '2022-01-04 13:29:48',
            ),
            127 => 
            array (
                'id' => 128,
                'zip_code' => '74941',
                'city_id' => 20780,
                'created_at' => '2022-01-04 13:29:48',
                'updated_at' => '2022-01-04 13:29:48',
            ),
            128 => 
            array (
                'id' => 129,
                'zip_code' => '72933',
                'city_id' => 907,
                'created_at' => '2022-01-04 13:29:49',
                'updated_at' => '2022-01-04 13:29:49',
            ),
            129 => 
            array (
                'id' => 130,
                'zip_code' => '72903',
                'city_id' => 1000,
                'created_at' => '2022-01-04 13:29:49',
                'updated_at' => '2022-01-04 13:29:49',
            ),
            130 => 
            array (
                'id' => 131,
                'zip_code' => '73120',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:29:49',
                'updated_at' => '2022-01-04 13:29:49',
            ),
            131 => 
            array (
                'id' => 132,
                'zip_code' => '76137',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:29:49',
                'updated_at' => '2022-01-04 13:29:49',
            ),
            132 => 
            array (
                'id' => 133,
                'zip_code' => '78615',
                'city_id' => 25013,
                'created_at' => '2022-01-04 13:29:50',
                'updated_at' => '2022-01-04 13:29:50',
            ),
            133 => 
            array (
                'id' => 134,
                'zip_code' => '76148',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:29:50',
                'updated_at' => '2022-01-04 13:29:50',
            ),
            134 => 
            array (
                'id' => 135,
                'zip_code' => '78005',
                'city_id' => 24832,
                'created_at' => '2022-01-04 13:29:50',
                'updated_at' => '2022-01-04 13:29:50',
            ),
            135 => 
            array (
                'id' => 136,
                'zip_code' => '65742',
                'city_id' => 13880,
                'created_at' => '2022-01-04 13:29:50',
                'updated_at' => '2022-01-04 13:29:50',
            ),
            136 => 
            array (
                'id' => 137,
                'zip_code' => '73742',
                'city_id' => 20744,
                'created_at' => '2022-01-04 13:29:50',
                'updated_at' => '2022-01-04 13:29:50',
            ),
            137 => 
            array (
                'id' => 138,
                'zip_code' => '74572',
                'city_id' => 21025,
                'created_at' => '2022-01-04 13:29:51',
                'updated_at' => '2022-01-04 13:29:51',
            ),
            138 => 
            array (
                'id' => 139,
                'zip_code' => '73541',
                'city_id' => 20688,
                'created_at' => '2022-01-04 13:29:51',
                'updated_at' => '2022-01-04 13:29:51',
            ),
            139 => 
            array (
                'id' => 140,
                'zip_code' => '76241',
                'city_id' => 25204,
                'created_at' => '2022-01-04 13:29:51',
                'updated_at' => '2022-01-04 13:29:51',
            ),
            140 => 
            array (
                'id' => 141,
                'zip_code' => '74873',
                'city_id' => 21011,
                'created_at' => '2022-01-04 13:29:51',
                'updated_at' => '2022-01-04 13:29:51',
            ),
            141 => 
            array (
                'id' => 142,
                'zip_code' => '73008',
                'city_id' => 20537,
                'created_at' => '2022-01-04 13:29:52',
                'updated_at' => '2022-01-04 13:29:52',
            ),
            142 => 
            array (
                'id' => 143,
                'zip_code' => '31636',
                'city_id' => 4478,
                'created_at' => '2022-01-04 13:29:52',
                'updated_at' => '2022-01-04 13:29:52',
            ),
            143 => 
            array (
                'id' => 144,
                'zip_code' => '76117',
                'city_id' => 25273,
                'created_at' => '2022-01-04 13:29:52',
                'updated_at' => '2022-01-04 13:29:52',
            ),
            144 => 
            array (
                'id' => 145,
                'zip_code' => '26554',
                'city_id' => 29027,
                'created_at' => '2022-01-04 13:29:52',
                'updated_at' => '2022-01-04 13:29:52',
            ),
            145 => 
            array (
                'id' => 146,
                'zip_code' => '74434',
                'city_id' => 20691,
                'created_at' => '2022-01-04 13:29:52',
                'updated_at' => '2022-01-04 13:29:52',
            ),
            146 => 
            array (
                'id' => 147,
                'zip_code' => '79735',
                'city_id' => 25183,
                'created_at' => '2022-01-04 13:29:53',
                'updated_at' => '2022-01-04 13:29:53',
            ),
            147 => 
            array (
                'id' => 148,
                'zip_code' => '73132',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:29:53',
                'updated_at' => '2022-01-04 13:29:53',
            ),
            148 => 
            array (
                'id' => 149,
                'zip_code' => '72143',
                'city_id' => 1305,
                'created_at' => '2022-01-04 13:29:53',
                'updated_at' => '2022-01-04 13:29:53',
            ),
            149 => 
            array (
                'id' => 150,
                'zip_code' => '12019',
                'city_id' => 17895,
                'created_at' => '2022-01-04 13:29:53',
                'updated_at' => '2022-01-04 13:29:53',
            ),
            150 => 
            array (
                'id' => 151,
                'zip_code' => '75859',
                'city_id' => 25996,
                'created_at' => '2022-01-04 13:29:54',
                'updated_at' => '2022-01-04 13:29:54',
            ),
            151 => 
            array (
                'id' => 152,
                'zip_code' => '74570',
                'city_id' => 21001,
                'created_at' => '2022-01-04 13:29:54',
                'updated_at' => '2022-01-04 13:29:54',
            ),
            152 => 
            array (
                'id' => 153,
                'zip_code' => '26431',
                'city_id' => 29434,
                'created_at' => '2022-01-04 13:29:54',
                'updated_at' => '2022-01-04 13:29:54',
            ),
            153 => 
            array (
                'id' => 154,
                'zip_code' => '76936',
                'city_id' => 25123,
                'created_at' => '2022-01-04 13:29:54',
                'updated_at' => '2022-01-04 13:29:54',
            ),
            154 => 
            array (
                'id' => 155,
                'zip_code' => '73945',
                'city_id' => 20756,
                'created_at' => '2022-01-04 13:29:54',
                'updated_at' => '2022-01-04 13:29:54',
            ),
            155 => 
            array (
                'id' => 156,
                'zip_code' => '78840',
                'city_id' => 25057,
                'created_at' => '2022-01-04 13:29:54',
                'updated_at' => '2022-01-04 13:29:54',
            ),
            156 => 
            array (
                'id' => 157,
                'zip_code' => '76903',
                'city_id' => 25891,
                'created_at' => '2022-01-04 13:29:55',
                'updated_at' => '2022-01-04 13:29:55',
            ),
            157 => 
            array (
                'id' => 158,
                'zip_code' => '75639',
                'city_id' => 25051,
                'created_at' => '2022-01-04 13:29:55',
                'updated_at' => '2022-01-04 13:29:55',
            ),
            158 => 
            array (
                'id' => 159,
                'zip_code' => '67138',
                'city_id' => 8657,
                'created_at' => '2022-01-04 13:29:55',
                'updated_at' => '2022-01-04 13:29:55',
            ),
            159 => 
            array (
                'id' => 160,
                'zip_code' => '75644',
                'city_id' => 25224,
                'created_at' => '2022-01-04 13:29:55',
                'updated_at' => '2022-01-04 13:29:55',
            ),
            160 => 
            array (
                'id' => 161,
                'zip_code' => '25541',
                'city_id' => 29256,
                'created_at' => '2022-01-04 13:29:56',
                'updated_at' => '2022-01-04 13:29:56',
            ),
            161 => 
            array (
                'id' => 162,
                'zip_code' => '78374',
                'city_id' => 25774,
                'created_at' => '2022-01-04 13:29:56',
                'updated_at' => '2022-01-04 13:29:56',
            ),
            162 => 
            array (
                'id' => 163,
                'zip_code' => '76126',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:29:56',
                'updated_at' => '2022-01-04 13:29:56',
            ),
            163 => 
            array (
                'id' => 164,
                'zip_code' => '97850',
                'city_id' => 21266,
                'created_at' => '2022-01-04 13:29:56',
                'updated_at' => '2022-01-04 13:29:56',
            ),
            164 => 
            array (
                'id' => 165,
                'zip_code' => '66086',
                'city_id' => 8690,
                'created_at' => '2022-01-04 13:29:57',
                'updated_at' => '2022-01-04 13:29:57',
            ),
            165 => 
            array (
                'id' => 166,
                'zip_code' => '73107',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:29:57',
                'updated_at' => '2022-01-04 13:29:57',
            ),
            166 => 
            array (
                'id' => 167,
                'zip_code' => '35085',
                'city_id' => 523,
                'created_at' => '2022-01-04 13:29:57',
                'updated_at' => '2022-01-04 13:29:57',
            ),
            167 => 
            array (
                'id' => 168,
                'zip_code' => '67901',
                'city_id' => 8453,
                'created_at' => '2022-01-04 13:29:58',
                'updated_at' => '2022-01-04 13:29:58',
            ),
            168 => 
            array (
                'id' => 169,
                'zip_code' => '73065',
                'city_id' => 20873,
                'created_at' => '2022-01-04 13:29:58',
                'updated_at' => '2022-01-04 13:29:58',
            ),
            169 => 
            array (
                'id' => 170,
                'zip_code' => '26175',
                'city_id' => 29442,
                'created_at' => '2022-01-04 13:29:58',
                'updated_at' => '2022-01-04 13:29:58',
            ),
            170 => 
            array (
                'id' => 171,
                'zip_code' => '74804',
                'city_id' => 20975,
                'created_at' => '2022-01-04 13:29:58',
                'updated_at' => '2022-01-04 13:29:58',
            ),
            171 => 
            array (
                'id' => 172,
                'zip_code' => '72905',
                'city_id' => 1000,
                'created_at' => '2022-01-04 13:29:58',
                'updated_at' => '2022-01-04 13:29:58',
            ),
            172 => 
            array (
                'id' => 173,
                'zip_code' => '78413',
                'city_id' => 25007,
                'created_at' => '2022-01-04 13:29:59',
                'updated_at' => '2022-01-04 13:29:59',
            ),
            173 => 
            array (
                'id' => 174,
                'zip_code' => '75494',
                'city_id' => 26165,
                'created_at' => '2022-01-04 13:29:59',
                'updated_at' => '2022-01-04 13:29:59',
            ),
            174 => 
            array (
                'id' => 175,
                'zip_code' => '75052',
                'city_id' => 25249,
                'created_at' => '2022-01-04 13:29:59',
                'updated_at' => '2022-01-04 13:29:59',
            ),
            175 => 
            array (
                'id' => 176,
                'zip_code' => '75001',
                'city_id' => 24726,
                'created_at' => '2022-01-04 13:30:00',
                'updated_at' => '2022-01-04 13:30:00',
            ),
            176 => 
            array (
                'id' => 177,
                'zip_code' => '75455',
                'city_id' => 25623,
                'created_at' => '2022-01-04 13:30:00',
                'updated_at' => '2022-01-04 13:30:00',
            ),
            177 => 
            array (
                'id' => 178,
                'zip_code' => '26301',
                'city_id' => 28940,
                'created_at' => '2022-01-04 13:30:00',
                'updated_at' => '2022-01-04 13:30:00',
            ),
            178 => 
            array (
                'id' => 179,
                'zip_code' => '76234',
                'city_id' => 25055,
                'created_at' => '2022-01-04 13:30:00',
                'updated_at' => '2022-01-04 13:30:00',
            ),
            179 => 
            array (
                'id' => 180,
                'zip_code' => '67758',
                'city_id' => 8658,
                'created_at' => '2022-01-04 13:30:00',
                'updated_at' => '2022-01-04 13:30:00',
            ),
            180 => 
            array (
                'id' => 181,
                'zip_code' => '78119',
                'city_id' => 25387,
                'created_at' => '2022-01-04 13:30:01',
                'updated_at' => '2022-01-04 13:30:01',
            ),
            181 => 
            array (
                'id' => 182,
                'zip_code' => '84525',
                'city_id' => 26267,
                'created_at' => '2022-01-04 13:30:01',
                'updated_at' => '2022-01-04 13:30:01',
            ),
            182 => 
            array (
                'id' => 183,
                'zip_code' => '74547',
                'city_id' => 20734,
                'created_at' => '2022-01-04 13:30:01',
                'updated_at' => '2022-01-04 13:30:01',
            ),
            183 => 
            array (
                'id' => 184,
                'zip_code' => '75661',
                'city_id' => 25376,
                'created_at' => '2022-01-04 13:30:01',
                'updated_at' => '2022-01-04 13:30:01',
            ),
            184 => 
            array (
                'id' => 185,
                'zip_code' => '74937',
                'city_id' => 20740,
                'created_at' => '2022-01-04 13:30:03',
                'updated_at' => '2022-01-04 13:30:03',
            ),
            185 => 
            array (
                'id' => 186,
                'zip_code' => '65625',
                'city_id' => 13282,
                'created_at' => '2022-01-04 13:30:04',
                'updated_at' => '2022-01-04 13:30:04',
            ),
            186 => 
            array (
                'id' => 187,
                'zip_code' => '73542',
                'city_id' => 20700,
                'created_at' => '2022-01-04 13:30:04',
                'updated_at' => '2022-01-04 13:30:04',
            ),
            187 => 
            array (
                'id' => 188,
                'zip_code' => '74864',
                'city_id' => 20924,
                'created_at' => '2022-01-04 13:30:04',
                'updated_at' => '2022-01-04 13:30:04',
            ),
            188 => 
            array (
                'id' => 189,
                'zip_code' => '67235',
                'city_id' => 8738,
                'created_at' => '2022-01-04 13:30:04',
                'updated_at' => '2022-01-04 13:30:04',
            ),
            189 => 
            array (
                'id' => 190,
                'zip_code' => '73448',
                'city_id' => 20829,
                'created_at' => '2022-01-04 13:30:05',
                'updated_at' => '2022-01-04 13:30:05',
            ),
            190 => 
            array (
                'id' => 191,
                'zip_code' => '79070',
                'city_id' => 25737,
                'created_at' => '2022-01-04 13:30:05',
                'updated_at' => '2022-01-04 13:30:05',
            ),
            191 => 
            array (
                'id' => 192,
                'zip_code' => '67880',
                'city_id' => 8700,
                'created_at' => '2022-01-04 13:30:05',
                'updated_at' => '2022-01-04 13:30:05',
            ),
            192 => 
            array (
                'id' => 193,
                'zip_code' => '76112',
                'city_id' => 25184,
                'created_at' => '2022-01-04 13:30:05',
                'updated_at' => '2022-01-04 13:30:05',
            ),
            193 => 
            array (
                'id' => 194,
                'zip_code' => '73134',
                'city_id' => 20890,
                'created_at' => '2022-01-04 13:30:05',
                'updated_at' => '2022-01-04 13:30:05',
            ),
            194 => 
            array (
                'id' => 195,
                'zip_code' => '26611',
                'city_id' => 28927,
                'created_at' => '2022-01-04 13:30:06',
                'updated_at' => '2022-01-04 13:30:06',
            ),
            195 => 
            array (
                'id' => 196,
                'zip_code' => '71111',
                'city_id' => 9604,
                'created_at' => '2022-01-04 13:30:06',
                'updated_at' => '2022-01-04 13:30:06',
            ),
            196 => 
            array (
                'id' => 197,
                'zip_code' => '25235',
                'city_id' => 28938,
                'created_at' => '2022-01-04 13:30:06',
                'updated_at' => '2022-01-04 13:30:06',
            ),
            197 => 
            array (
                'id' => 198,
                'zip_code' => '74066',
                'city_id' => 20962,
                'created_at' => '2022-01-04 13:30:06',
                'updated_at' => '2022-01-04 13:30:06',
            ),
            198 => 
            array (
                'id' => 199,
                'zip_code' => '73057',
                'city_id' => 20836,
                'created_at' => '2022-01-04 13:30:06',
                'updated_at' => '2022-01-04 13:30:06',
            ),
            199 => 
            array (
                'id' => 200,
                'zip_code' => '75076',
                'city_id' => 25778,
                'created_at' => '2022-01-04 13:30:07',
                'updated_at' => '2022-01-04 13:30:07',
            ),
            200 => 
            array (
                'id' => 201,
                'zip_code' => '74563',
                'city_id' => 20939,
                'created_at' => '2022-01-04 13:30:07',
                'updated_at' => '2022-01-04 13:30:07',
            ),
            201 => 
            array (
                'id' => 202,
                'zip_code' => '73743',
                'city_id' => 20746,
                'created_at' => '2022-01-04 13:30:07',
                'updated_at' => '2022-01-04 13:30:07',
            ),
            202 => 
            array (
                'id' => 203,
                'zip_code' => '52217',
                'city_id' => 5057,
                'created_at' => '2022-01-04 13:30:08',
                'updated_at' => '2022-01-04 13:30:08',
            ),
            203 => 
            array (
                'id' => 204,
                'zip_code' => '84770',
                'city_id' => 26388,
                'created_at' => '2022-01-04 13:30:08',
                'updated_at' => '2022-01-04 13:30:08',
            ),
            204 => 
            array (
                'id' => 205,
                'zip_code' => '73044',
                'city_id' => 20726,
                'created_at' => '2022-01-04 13:30:08',
                'updated_at' => '2022-01-04 13:30:08',
            ),
            205 => 
            array (
                'id' => 206,
                'zip_code' => '74035',
                'city_id' => 20755,
                'created_at' => '2022-01-04 13:30:08',
                'updated_at' => '2022-01-04 13:30:08',
            ),
            206 => 
            array (
                'id' => 207,
                'zip_code' => '74868',
                'city_id' => 20969,
                'created_at' => '2022-01-04 13:30:08',
                'updated_at' => '2022-01-04 13:30:08',
            ),
            207 => 
            array (
                'id' => 208,
                'zip_code' => '74021',
                'city_id' => 20615,
                'created_at' => '2022-01-04 13:30:09',
                'updated_at' => '2022-01-04 13:30:09',
            ),
            208 => 
            array (
                'id' => 209,
                'zip_code' => '73859',
                'city_id' => 21038,
                'created_at' => '2022-01-04 13:30:09',
                'updated_at' => '2022-01-04 13:30:09',
            ),
            209 => 
            array (
                'id' => 210,
                'zip_code' => '72058',
                'city_id' => 1033,
                'created_at' => '2022-01-04 13:30:40',
                'updated_at' => '2022-01-04 13:30:40',
            ),
            210 => 
            array (
                'id' => 211,
                'zip_code' => '76450',
                'city_id' => 25247,
                'created_at' => '2022-01-04 13:30:41',
                'updated_at' => '2022-01-04 13:30:41',
            ),
            211 => 
            array (
                'id' => 212,
                'zip_code' => '15317',
                'city_id' => 21680,
                'created_at' => '2022-01-04 13:30:41',
                'updated_at' => '2022-01-04 13:30:41',
            ),
            212 => 
            array (
                'id' => 213,
                'zip_code' => '78412',
                'city_id' => 25007,
                'created_at' => '2022-01-04 13:30:41',
                'updated_at' => '2022-01-04 13:30:41',
            ),
            213 => 
            array (
                'id' => 214,
                'zip_code' => '73089',
                'city_id' => 21029,
                'created_at' => '2022-01-04 13:30:41',
                'updated_at' => '2022-01-04 13:30:41',
            ),
            214 => 
            array (
                'id' => 215,
                'zip_code' => '73062',
                'city_id' => 20861,
                'created_at' => '2022-01-04 13:30:41',
                'updated_at' => '2022-01-04 13:30:41',
            ),
            215 => 
            array (
                'id' => 216,
                'zip_code' => '73051',
                'city_id' => 20808,
                'created_at' => '2022-01-04 13:30:42',
                'updated_at' => '2022-01-04 13:30:42',
            ),
            216 => 
            array (
                'id' => 217,
                'zip_code' => '26578',
                'city_id' => 29175,
                'created_at' => '2022-01-04 13:30:42',
                'updated_at' => '2022-01-04 13:30:42',
            ),
            217 => 
            array (
                'id' => 218,
                'zip_code' => '28358',
                'city_id' => 15269,
                'created_at' => '2022-01-04 13:30:42',
                'updated_at' => '2022-01-04 13:30:42',
            ),
            218 => 
            array (
                'id' => 219,
                'zip_code' => '73045',
                'city_id' => 20733,
                'created_at' => '2022-01-04 13:30:42',
                'updated_at' => '2022-01-04 13:30:42',
            ),
            219 => 
            array (
                'id' => 220,
                'zip_code' => '77044',
                'city_id' => 25323,
                'created_at' => '2022-01-04 13:30:43',
                'updated_at' => '2022-01-04 13:30:43',
            ),
            220 => 
            array (
                'id' => 221,
                'zip_code' => '65803',
                'city_id' => 13942,
                'created_at' => '2022-01-04 13:30:43',
                'updated_at' => '2022-01-04 13:30:43',
            ),
            221 => 
            array (
                'id' => 222,
                'zip_code' => '74944',
                'city_id' => 20838,
                'created_at' => '2022-01-04 13:30:43',
                'updated_at' => '2022-01-04 13:30:43',
            ),
            222 => 
            array (
                'id' => 223,
                'zip_code' => '70638',
                'city_id' => 9684,
                'created_at' => '2022-01-04 13:30:43',
                'updated_at' => '2022-01-04 13:30:43',
            ),
            223 => 
            array (
                'id' => 224,
                'zip_code' => '72949',
                'city_id' => 1225,
                'created_at' => '2022-01-04 13:30:44',
                'updated_at' => '2022-01-04 13:30:44',
            ),
            224 => 
            array (
                'id' => 225,
                'zip_code' => '43950',
                'city_id' => 20268,
                'created_at' => '2022-01-05 11:51:51',
                'updated_at' => '2022-01-05 11:51:51',
            ),
            225 => 
            array (
                'id' => 226,
                'zip_code' => '73122',
                'city_id' => 20890,
                'created_at' => '2022-01-05 11:51:57',
                'updated_at' => '2022-01-05 11:51:57',
            ),
            226 => 
            array (
                'id' => 227,
                'zip_code' => '71953',
                'city_id' => 1174,
                'created_at' => '2022-01-05 11:52:02',
                'updated_at' => '2022-01-05 11:52:02',
            ),
            227 => 
            array (
                'id' => 228,
                'zip_code' => '78336',
                'city_id' => 24761,
                'created_at' => '2022-01-05 11:52:07',
                'updated_at' => '2022-01-05 11:52:07',
            ),
            228 => 
            array (
                'id' => 229,
                'zip_code' => '71109',
                'city_id' => 9963,
                'created_at' => '2022-01-05 11:52:12',
                'updated_at' => '2022-01-05 11:52:12',
            ),
            229 => 
            array (
                'id' => 230,
                'zip_code' => '73135',
                'city_id' => 20890,
                'created_at' => '2022-01-05 11:52:17',
                'updated_at' => '2022-01-05 11:52:17',
            ),
            230 => 
            array (
                'id' => 231,
                'zip_code' => '73086',
                'city_id' => 21002,
                'created_at' => '2022-01-05 11:52:23',
                'updated_at' => '2022-01-05 11:52:23',
            ),
            231 => 
            array (
                'id' => 232,
                'zip_code' => '76266',
                'city_id' => 25907,
                'created_at' => '2022-01-05 11:52:28',
                'updated_at' => '2022-01-05 11:52:28',
            ),
            232 => 
            array (
                'id' => 233,
                'zip_code' => '73667',
                'city_id' => 21009,
                'created_at' => '2022-01-05 11:52:33',
                'updated_at' => '2022-01-05 11:52:33',
            ),
            233 => 
            array (
                'id' => 234,
                'zip_code' => '73005',
                'city_id' => 20517,
                'created_at' => '2022-01-05 11:52:38',
                'updated_at' => '2022-01-05 11:52:38',
            ),
            234 => 
            array (
                'id' => 235,
                'zip_code' => '72007',
                'city_id' => 831,
                'created_at' => '2022-01-05 11:52:44',
                'updated_at' => '2022-01-05 11:52:44',
            ),
            235 => 
            array (
                'id' => 236,
                'zip_code' => '74829',
                'city_id' => 20553,
                'created_at' => '2022-01-05 11:52:49',
                'updated_at' => '2022-01-05 11:52:49',
            ),
            236 => 
            array (
                'id' => 237,
                'zip_code' => '84721',
                'city_id' => 26214,
                'created_at' => '2022-01-05 11:52:54',
                'updated_at' => '2022-01-05 11:52:54',
            ),
            237 => 
            array (
                'id' => 238,
                'zip_code' => '72157',
                'city_id' => 1320,
                'created_at' => '2022-01-05 11:52:59',
                'updated_at' => '2022-01-05 11:52:59',
            ),
            238 => 
            array (
                'id' => 239,
                'zip_code' => '73728',
                'city_id' => 20599,
                'created_at' => '2022-01-05 11:53:04',
                'updated_at' => '2022-01-05 11:53:04',
            ),
            239 => 
            array (
                'id' => 240,
                'zip_code' => '73651',
                'city_id' => 20750,
                'created_at' => '2022-01-05 11:53:10',
                'updated_at' => '2022-01-05 11:53:10',
            ),
            240 => 
            array (
                'id' => 241,
                'zip_code' => '46231',
                'city_id' => 7683,
                'created_at' => '2022-01-05 11:53:15',
                'updated_at' => '2022-01-05 11:53:15',
            ),
            241 => 
            array (
                'id' => 242,
                'zip_code' => '74020',
                'city_id' => 20609,
                'created_at' => '2022-01-05 11:53:20',
                'updated_at' => '2022-01-05 11:53:20',
            ),
            242 => 
            array (
                'id' => 243,
                'zip_code' => '80758',
                'city_id' => 3312,
                'created_at' => '2022-01-05 11:53:25',
                'updated_at' => '2022-01-05 11:53:25',
            ),
            243 => 
            array (
                'id' => 244,
                'zip_code' => '63139',
                'city_id' => 13900,
                'created_at' => '2022-01-05 11:53:31',
                'updated_at' => '2022-01-05 11:53:31',
            ),
            244 => 
            array (
                'id' => 245,
                'zip_code' => '73537',
                'city_id' => 20666,
                'created_at' => '2022-01-05 11:53:36',
                'updated_at' => '2022-01-05 11:53:36',
            ),
            245 => 
            array (
                'id' => 246,
                'zip_code' => '71366',
                'city_id' => 9953,
                'created_at' => '2022-01-05 11:53:42',
                'updated_at' => '2022-01-05 11:53:42',
            ),
            246 => 
            array (
                'id' => 247,
                'zip_code' => '26534',
                'city_id' => 29088,
                'created_at' => '2022-01-05 11:53:47',
                'updated_at' => '2022-01-05 11:53:47',
            ),
            247 => 
            array (
                'id' => 248,
                'zip_code' => '15001',
                'city_id' => 21481,
                'created_at' => '2022-01-05 11:53:52',
                'updated_at' => '2022-01-05 11:53:52',
            ),
            248 => 
            array (
                'id' => 249,
                'zip_code' => '76262',
                'city_id' => 25840,
                'created_at' => '2022-01-05 11:53:57',
                'updated_at' => '2022-01-05 11:53:57',
            ),
            249 => 
            array (
                'id' => 250,
                'zip_code' => '76048',
                'city_id' => 25248,
                'created_at' => '2022-01-05 11:54:02',
                'updated_at' => '2022-01-05 11:54:02',
            ),
            250 => 
            array (
                'id' => 251,
                'zip_code' => '70537',
                'city_id' => 9697,
                'created_at' => '2022-01-05 11:54:08',
                'updated_at' => '2022-01-05 11:54:08',
            ),
            251 => 
            array (
                'id' => 252,
                'zip_code' => '73701',
                'city_id' => 20671,
                'created_at' => '2022-01-05 11:54:13',
                'updated_at' => '2022-01-05 11:54:13',
            ),
            252 => 
            array (
                'id' => 253,
                'zip_code' => '74053',
                'city_id' => 20895,
                'created_at' => '2022-01-05 11:54:18',
                'updated_at' => '2022-01-05 11:54:18',
            ),
            253 => 
            array (
                'id' => 254,
                'zip_code' => '78582',
                'city_id' => 25833,
                'created_at' => '2022-01-05 11:54:23',
                'updated_at' => '2022-01-05 11:54:23',
            ),
            254 => 
            array (
                'id' => 255,
                'zip_code' => '71486',
                'city_id' => 10034,
                'created_at' => '2022-01-05 11:54:29',
                'updated_at' => '2022-01-05 11:54:29',
            ),
            255 => 
            array (
                'id' => 256,
                'zip_code' => '76227',
                'city_id' => 24775,
                'created_at' => '2022-01-05 11:54:34',
                'updated_at' => '2022-01-05 11:54:34',
            ),
            256 => 
            array (
                'id' => 257,
                'zip_code' => '65542',
                'city_id' => 13639,
                'created_at' => '2022-01-05 11:54:39',
                'updated_at' => '2022-01-05 11:54:39',
            ),
            257 => 
            array (
                'id' => 258,
                'zip_code' => '73834',
                'city_id' => 20564,
                'created_at' => '2022-01-05 11:54:44',
                'updated_at' => '2022-01-05 11:54:44',
            ),
            258 => 
            array (
                'id' => 259,
                'zip_code' => '73533',
                'city_id' => 20657,
                'created_at' => '2022-01-05 11:54:50',
                'updated_at' => '2022-01-05 11:54:50',
            ),
            259 => 
            array (
                'id' => 260,
                'zip_code' => '73942',
                'city_id' => 20727,
                'created_at' => '2022-01-05 11:54:55',
                'updated_at' => '2022-01-05 11:54:55',
            ),
            260 => 
            array (
                'id' => 261,
                'zip_code' => '75126',
                'city_id' => 25176,
                'created_at' => '2022-01-05 11:55:00',
                'updated_at' => '2022-01-05 11:55:00',
            ),
            261 => 
            array (
                'id' => 262,
                'zip_code' => '15089',
                'city_id' => 23183,
                'created_at' => '2022-01-05 11:55:06',
                'updated_at' => '2022-01-05 11:55:06',
            ),
            262 => 
            array (
                'id' => 263,
                'zip_code' => '74051',
                'city_id' => 20884,
                'created_at' => '2022-01-05 11:55:11',
                'updated_at' => '2022-01-05 11:55:11',
            ),
            263 => 
            array (
                'id' => 264,
                'zip_code' => '79510',
                'city_id' => 24979,
                'created_at' => '2022-01-05 11:55:16',
                'updated_at' => '2022-01-05 11:55:16',
            ),
            264 => 
            array (
                'id' => 265,
                'zip_code' => '73036',
                'city_id' => 20665,
                'created_at' => '2022-01-05 11:55:21',
                'updated_at' => '2022-01-05 11:55:21',
            ),
            265 => 
            array (
                'id' => 266,
                'zip_code' => '74447',
                'city_id' => 20891,
                'created_at' => '2022-01-05 11:55:27',
                'updated_at' => '2022-01-05 11:55:27',
            ),
            266 => 
            array (
                'id' => 267,
                'zip_code' => '73741',
                'city_id' => 20741,
                'created_at' => '2022-01-05 11:55:32',
                'updated_at' => '2022-01-05 11:55:32',
            ),
            267 => 
            array (
                'id' => 268,
                'zip_code' => '73726',
                'city_id' => 20584,
                'created_at' => '2022-01-05 11:55:37',
                'updated_at' => '2022-01-05 11:55:37',
            ),
            268 => 
            array (
                'id' => 269,
                'zip_code' => '77381',
                'city_id' => 25977,
                'created_at' => '2022-01-05 11:55:43',
                'updated_at' => '2022-01-05 11:55:43',
            ),
            269 => 
            array (
                'id' => 270,
                'zip_code' => '44651',
                'city_id' => 20002,
                'created_at' => '2022-01-05 11:55:48',
                'updated_at' => '2022-01-05 11:55:48',
            ),
            270 => 
            array (
                'id' => 271,
                'zip_code' => '43906',
                'city_id' => 19491,
                'created_at' => '2022-01-05 11:55:53',
                'updated_at' => '2022-01-05 11:55:53',
            ),
            271 => 
            array (
                'id' => 272,
                'zip_code' => '78573',
                'city_id' => 25603,
                'created_at' => '2022-01-05 11:55:58',
                'updated_at' => '2022-01-05 11:55:58',
            ),
            272 => 
            array (
                'id' => 273,
                'zip_code' => '75065',
                'city_id' => 25432,
                'created_at' => '2022-01-05 11:56:04',
                'updated_at' => '2022-01-05 11:56:04',
            ),
            273 => 
            array (
                'id' => 274,
                'zip_code' => '71106',
                'city_id' => 9963,
                'created_at' => '2022-01-05 11:56:09',
                'updated_at' => '2022-01-05 11:56:09',
            ),
            274 => 
            array (
                'id' => 275,
                'zip_code' => '73601',
                'city_id' => 20610,
                'created_at' => '2022-01-05 11:56:14',
                'updated_at' => '2022-01-05 11:56:14',
            ),
            275 => 
            array (
                'id' => 276,
                'zip_code' => '73041',
                'city_id' => 20716,
                'created_at' => '2022-01-05 11:56:19',
                'updated_at' => '2022-01-05 11:56:19',
            ),
            276 => 
            array (
                'id' => 277,
                'zip_code' => '73140',
                'city_id' => 20890,
                'created_at' => '2022-01-05 11:56:25',
                'updated_at' => '2022-01-05 11:56:25',
            ),
            277 => 
            array (
                'id' => 278,
                'zip_code' => '26238',
                'city_id' => 29506,
                'created_at' => '2022-01-05 11:56:30',
                'updated_at' => '2022-01-05 11:56:30',
            ),
            278 => 
            array (
                'id' => 279,
                'zip_code' => '76310',
                'city_id' => 26149,
                'created_at' => '2022-01-05 11:56:35',
                'updated_at' => '2022-01-05 11:56:35',
            ),
            279 => 
            array (
                'id' => 280,
                'zip_code' => '78609',
                'city_id' => 24888,
                'created_at' => '2022-01-05 11:56:40',
                'updated_at' => '2022-01-05 11:56:40',
            ),
            280 => 
            array (
                'id' => 281,
                'zip_code' => '74026',
                'city_id' => 20639,
                'created_at' => '2022-01-05 11:56:45',
                'updated_at' => '2022-01-05 11:56:45',
            ),
            281 => 
            array (
                'id' => 282,
                'zip_code' => '73053',
                'city_id' => 20815,
                'created_at' => '2022-01-05 11:56:51',
                'updated_at' => '2022-01-05 11:56:51',
            ),
            282 => 
            array (
                'id' => 283,
                'zip_code' => '73950',
                'city_id' => 21026,
                'created_at' => '2022-01-05 11:56:56',
                'updated_at' => '2022-01-05 11:56:56',
            ),
            283 => 
            array (
                'id' => 284,
                'zip_code' => '75604',
                'city_id' => 25495,
                'created_at' => '2022-01-05 11:57:01',
                'updated_at' => '2022-01-05 11:57:01',
            ),
            284 => 
            array (
                'id' => 285,
                'zip_code' => '74867',
                'city_id' => 20963,
                'created_at' => '2022-01-05 11:57:06',
                'updated_at' => '2022-01-05 11:57:06',
            ),
            285 => 
            array (
                'id' => 286,
                'zip_code' => '43754',
                'city_id' => 19929,
                'created_at' => '2022-01-05 11:57:12',
                'updated_at' => '2022-01-05 11:57:12',
            ),
            286 => 
            array (
                'id' => 287,
                'zip_code' => '76426',
                'city_id' => 24870,
                'created_at' => '2022-01-05 11:57:17',
                'updated_at' => '2022-01-05 11:57:17',
            ),
            287 => 
            array (
                'id' => 288,
                'zip_code' => '65236',
                'city_id' => 13246,
                'created_at' => '2022-01-05 11:57:22',
                'updated_at' => '2022-01-05 11:57:22',
            ),
            288 => 
            array (
                'id' => 289,
                'zip_code' => '67005',
                'city_id' => 8140,
                'created_at' => '2022-01-05 11:57:27',
                'updated_at' => '2022-01-05 11:57:27',
            ),
            289 => 
            array (
                'id' => 290,
                'zip_code' => '73628',
                'city_id' => 20601,
                'created_at' => '2022-01-05 11:57:33',
                'updated_at' => '2022-01-05 11:57:33',
            ),
            290 => 
            array (
                'id' => 291,
                'zip_code' => '26170',
                'city_id' => 29414,
                'created_at' => '2022-01-05 11:57:38',
                'updated_at' => '2022-01-05 11:57:38',
            ),
            291 => 
            array (
                'id' => 292,
                'zip_code' => '36524',
                'city_id' => 345,
                'created_at' => '2022-01-05 11:57:43',
                'updated_at' => '2022-01-05 11:57:43',
            ),
            292 => 
            array (
                'id' => 293,
                'zip_code' => '67554',
                'city_id' => 8473,
                'created_at' => '2022-01-05 11:57:48',
                'updated_at' => '2022-01-05 11:57:48',
            ),
            293 => 
            array (
                'id' => 294,
                'zip_code' => '74871',
                'city_id' => 20996,
                'created_at' => '2022-01-05 11:57:53',
                'updated_at' => '2022-01-05 11:57:53',
            ),
            294 => 
            array (
                'id' => 295,
                'zip_code' => '73017',
                'city_id' => 20593,
                'created_at' => '2022-01-05 11:57:59',
                'updated_at' => '2022-01-05 11:57:59',
            ),
            295 => 
            array (
                'id' => 296,
                'zip_code' => '39466',
                'city_id' => 14363,
                'created_at' => '2022-01-05 11:58:04',
                'updated_at' => '2022-01-05 11:58:04',
            ),
            296 => 
            array (
                'id' => 297,
                'zip_code' => '76052',
                'city_id' => 25290,
                'created_at' => '2022-01-05 11:58:09',
                'updated_at' => '2022-01-05 11:58:09',
            ),
            297 => 
            array (
                'id' => 298,
                'zip_code' => '66748',
                'city_id' => 8400,
                'created_at' => '2022-01-05 11:58:14',
                'updated_at' => '2022-01-05 11:58:14',
            ),
            298 => 
            array (
                'id' => 299,
                'zip_code' => '78115',
                'city_id' => 25220,
                'created_at' => '2022-01-05 11:58:20',
                'updated_at' => '2022-01-05 11:58:20',
            ),
            299 => 
            array (
                'id' => 300,
                'zip_code' => '67207',
                'city_id' => 8738,
                'created_at' => '2022-01-05 11:58:25',
                'updated_at' => '2022-01-05 11:58:25',
            ),
            300 => 
            array (
                'id' => 301,
                'zip_code' => '77970',
                'city_id' => 25427,
                'created_at' => '2022-01-05 11:58:30',
                'updated_at' => '2022-01-05 11:58:30',
            ),
            301 => 
            array (
                'id' => 302,
                'zip_code' => '77541',
                'city_id' => 25192,
                'created_at' => '2022-01-05 11:58:35',
                'updated_at' => '2022-01-05 11:58:35',
            ),
            302 => 
            array (
                'id' => 303,
                'zip_code' => '73749',
                'city_id' => 20772,
                'created_at' => '2022-01-05 11:58:40',
                'updated_at' => '2022-01-05 11:58:40',
            ),
            303 => 
            array (
                'id' => 304,
                'zip_code' => '73103',
                'city_id' => 20890,
                'created_at' => '2022-01-05 11:58:46',
                'updated_at' => '2022-01-05 11:58:46',
            ),
            304 => 
            array (
                'id' => 305,
                'zip_code' => '98604',
                'city_id' => 27586,
                'created_at' => '2022-01-05 11:58:51',
                'updated_at' => '2022-01-05 11:58:51',
            ),
            305 => 
            array (
                'id' => 306,
                'zip_code' => '72455',
                'city_id' => 1255,
                'created_at' => '2022-01-05 11:58:56',
                'updated_at' => '2022-01-05 11:58:56',
            ),
            306 => 
            array (
                'id' => 307,
                'zip_code' => '72063',
                'city_id' => 1057,
                'created_at' => '2022-01-05 11:59:01',
                'updated_at' => '2022-01-05 11:59:01',
            ),
            307 => 
            array (
                'id' => 308,
                'zip_code' => '74735',
                'city_id' => 20694,
                'created_at' => '2022-01-05 11:59:07',
                'updated_at' => '2022-01-05 11:59:07',
            ),
            308 => 
            array (
                'id' => 309,
                'zip_code' => '67155',
                'city_id' => 8740,
                'created_at' => '2022-01-05 11:59:12',
                'updated_at' => '2022-01-05 11:59:12',
            ),
            309 => 
            array (
                'id' => 310,
                'zip_code' => '72662',
                'city_id' => 1219,
                'created_at' => '2022-01-05 11:59:17',
                'updated_at' => '2022-01-05 11:59:17',
            ),
            310 => 
            array (
                'id' => 311,
                'zip_code' => '79761',
                'city_id' => 25682,
                'created_at' => '2022-01-05 11:59:23',
                'updated_at' => '2022-01-05 11:59:23',
            ),
            311 => 
            array (
                'id' => 312,
                'zip_code' => '72921',
                'city_id' => 814,
                'created_at' => '2022-01-05 11:59:28',
                'updated_at' => '2022-01-05 11:59:28',
            ),
            312 => 
            array (
                'id' => 313,
                'zip_code' => '76108',
                'city_id' => 25184,
                'created_at' => '2022-01-05 11:59:33',
                'updated_at' => '2022-01-05 11:59:33',
            ),
            313 => 
            array (
                'id' => 314,
                'zip_code' => '29730',
                'city_id' => 23720,
                'created_at' => '2022-01-05 11:59:39',
                'updated_at' => '2022-01-05 11:59:39',
            ),
            314 => 
            array (
                'id' => 315,
                'zip_code' => '73055',
                'city_id' => 20831,
                'created_at' => '2022-01-05 11:59:44',
                'updated_at' => '2022-01-05 11:59:44',
            ),
            315 => 
            array (
                'id' => 316,
                'zip_code' => '73731',
                'city_id' => 20637,
                'created_at' => '2022-01-05 11:59:49',
                'updated_at' => '2022-01-05 11:59:49',
            ),
            316 => 
            array (
                'id' => 317,
                'zip_code' => '75051',
                'city_id' => 25249,
                'created_at' => '2022-01-05 11:59:54',
                'updated_at' => '2022-01-05 11:59:54',
            ),
            317 => 
            array (
                'id' => 318,
                'zip_code' => '76067',
                'city_id' => 25600,
                'created_at' => '2022-01-05 11:59:59',
                'updated_at' => '2022-01-05 11:59:59',
            ),
            318 => 
            array (
                'id' => 319,
                'zip_code' => '73554',
                'city_id' => 20823,
                'created_at' => '2022-01-05 12:00:05',
                'updated_at' => '2022-01-05 12:00:05',
            ),
            319 => 
            array (
                'id' => 320,
                'zip_code' => '77963',
                'city_id' => 25237,
                'created_at' => '2022-01-05 12:00:10',
                'updated_at' => '2022-01-05 12:00:10',
            ),
            320 => 
            array (
                'id' => 321,
                'zip_code' => '26105',
                'city_id' => 29505,
                'created_at' => '2022-01-05 12:00:15',
                'updated_at' => '2022-01-05 12:00:15',
            ),
            321 => 
            array (
                'id' => 322,
                'zip_code' => '74574',
                'city_id' => 21027,
                'created_at' => '2022-01-05 12:00:21',
                'updated_at' => '2022-01-05 12:00:21',
            ),
            322 => 
            array (
                'id' => 323,
                'zip_code' => '26426',
                'city_id' => 29415,
                'created_at' => '2022-01-05 12:00:26',
                'updated_at' => '2022-01-05 12:00:26',
            ),
            323 => 
            array (
                'id' => 324,
                'zip_code' => '74033',
                'city_id' => 20711,
                'created_at' => '2022-01-05 12:00:31',
                'updated_at' => '2022-01-05 12:00:31',
            ),
            324 => 
            array (
                'id' => 325,
                'zip_code' => '78567',
                'city_id' => 25503,
                'created_at' => '2022-01-05 12:00:36',
                'updated_at' => '2022-01-05 12:00:36',
            ),
            325 => 
            array (
                'id' => 326,
                'zip_code' => '76374',
                'city_id' => 25691,
                'created_at' => '2022-01-05 12:00:41',
                'updated_at' => '2022-01-05 12:00:41',
            ),
            326 => 
            array (
                'id' => 327,
                'zip_code' => '39483',
                'city_id' => 14199,
                'created_at' => '2022-01-05 12:00:47',
                'updated_at' => '2022-01-05 12:00:47',
            ),
            327 => 
            array (
                'id' => 328,
                'zip_code' => '73932',
                'city_id' => 20533,
                'created_at' => '2022-01-05 12:00:52',
                'updated_at' => '2022-01-05 12:00:52',
            ),
            328 => 
            array (
                'id' => 329,
                'zip_code' => '76950',
                'city_id' => 25965,
                'created_at' => '2022-01-05 12:00:57',
                'updated_at' => '2022-01-05 12:00:57',
            ),
            329 => 
            array (
                'id' => 330,
                'zip_code' => '73096',
                'city_id' => 21059,
                'created_at' => '2022-01-05 12:01:02',
                'updated_at' => '2022-01-05 12:01:02',
            ),
            330 => 
            array (
                'id' => 331,
                'zip_code' => '73064',
                'city_id' => 20867,
                'created_at' => '2022-01-05 12:01:08',
                'updated_at' => '2022-01-05 12:01:08',
            ),
            331 => 
            array (
                'id' => 332,
                'zip_code' => '74075',
                'city_id' => 20994,
                'created_at' => '2022-01-05 12:01:13',
                'updated_at' => '2022-01-05 12:01:13',
            ),
            332 => 
            array (
                'id' => 333,
                'zip_code' => '75707',
                'city_id' => 26069,
                'created_at' => '2022-01-05 12:01:18',
                'updated_at' => '2022-01-05 12:01:18',
            ),
            333 => 
            array (
                'id' => 334,
                'zip_code' => '79046',
                'city_id' => 25308,
                'created_at' => '2022-01-05 12:01:23',
                'updated_at' => '2022-01-05 12:01:23',
            ),
            334 => 
            array (
                'id' => 335,
                'zip_code' => '74002',
                'city_id' => 20530,
                'created_at' => '2022-01-05 12:01:28',
                'updated_at' => '2022-01-05 12:01:28',
            ),
            335 => 
            array (
                'id' => 336,
                'zip_code' => '72521',
                'city_id' => 900,
                'created_at' => '2022-01-05 12:01:34',
                'updated_at' => '2022-01-05 12:01:34',
            ),
            336 => 
            array (
                'id' => 337,
                'zip_code' => '25083',
                'city_id' => 29054,
                'created_at' => '2022-01-05 12:01:39',
                'updated_at' => '2022-01-05 12:01:39',
            ),
            337 => 
            array (
                'id' => 338,
                'zip_code' => '74455',
                'city_id' => 20922,
                'created_at' => '2022-01-05 12:01:44',
                'updated_at' => '2022-01-05 12:01:44',
            ),
            338 => 
            array (
                'id' => 339,
                'zip_code' => '76244',
                'city_id' => 25381,
                'created_at' => '2022-01-05 12:01:49',
                'updated_at' => '2022-01-05 12:01:49',
            ),
            339 => 
            array (
                'id' => 340,
                'zip_code' => '67058',
                'city_id' => 8367,
                'created_at' => '2022-01-05 12:01:55',
                'updated_at' => '2022-01-05 12:01:55',
            ),
            340 => 
            array (
                'id' => 341,
                'zip_code' => '84528',
                'city_id' => 26288,
                'created_at' => '2022-01-05 12:02:00',
                'updated_at' => '2022-01-05 12:02:00',
            ),
            341 => 
            array (
                'id' => 342,
                'zip_code' => '71251',
                'city_id' => 9786,
                'created_at' => '2022-01-05 12:02:05',
                'updated_at' => '2022-01-05 12:02:05',
            ),
            342 => 
            array (
                'id' => 343,
                'zip_code' => '40509',
                'city_id' => 9170,
                'created_at' => '2022-01-05 12:02:10',
                'updated_at' => '2022-01-05 12:02:10',
            ),
            343 => 
            array (
                'id' => 344,
                'zip_code' => '79853',
                'city_id' => 26054,
                'created_at' => '2022-01-05 12:02:16',
                'updated_at' => '2022-01-05 12:02:16',
            ),
            344 => 
            array (
                'id' => 345,
                'zip_code' => '78410',
                'city_id' => 25007,
                'created_at' => '2022-01-05 12:02:21',
                'updated_at' => '2022-01-05 12:02:21',
            ),
            345 => 
            array (
                'id' => 346,
                'zip_code' => '71822',
                'city_id' => 827,
                'created_at' => '2022-01-05 12:02:26',
                'updated_at' => '2022-01-05 12:02:26',
            ),
            346 => 
            array (
                'id' => 347,
                'zip_code' => '79706',
                'city_id' => 25587,
                'created_at' => '2022-01-05 12:02:31',
                'updated_at' => '2022-01-05 12:02:31',
            ),
            347 => 
            array (
                'id' => 348,
                'zip_code' => '99577',
                'city_id' => 56,
                'created_at' => '2022-01-05 12:02:37',
                'updated_at' => '2022-01-05 12:02:37',
            ),
            348 => 
            array (
                'id' => 349,
                'zip_code' => '87105',
                'city_id' => 17373,
                'created_at' => '2022-01-05 12:02:42',
                'updated_at' => '2022-01-05 12:02:42',
            ),
            349 => 
            array (
                'id' => 350,
                'zip_code' => '78065',
                'city_id' => 25776,
                'created_at' => '2022-01-05 12:02:47',
                'updated_at' => '2022-01-05 12:02:47',
            ),
            350 => 
            array (
                'id' => 351,
                'zip_code' => '70068',
                'city_id' => 9800,
                'created_at' => '2022-01-05 12:02:52',
                'updated_at' => '2022-01-05 12:02:52',
            ),
            351 => 
            array (
                'id' => 352,
                'zip_code' => '79015',
                'city_id' => 24922,
                'created_at' => '2022-01-05 12:02:58',
                'updated_at' => '2022-01-05 12:02:58',
            ),
            352 => 
            array (
                'id' => 353,
                'zip_code' => '79252',
                'city_id' => 25799,
                'created_at' => '2022-01-05 12:03:03',
                'updated_at' => '2022-01-05 12:03:03',
            ),
            353 => 
            array (
                'id' => 354,
                'zip_code' => '74055',
                'city_id' => 20900,
                'created_at' => '2022-01-05 12:03:08',
                'updated_at' => '2022-01-05 12:03:08',
            ),
            354 => 
            array (
                'id' => 355,
                'zip_code' => '26055',
                'city_id' => 29363,
                'created_at' => '2022-01-05 12:03:13',
                'updated_at' => '2022-01-05 12:03:13',
            ),
            355 => 
            array (
                'id' => 356,
                'zip_code' => '67022',
                'city_id' => 8206,
                'created_at' => '2022-01-05 12:03:19',
                'updated_at' => '2022-01-05 12:03:19',
            ),
            356 => 
            array (
                'id' => 357,
                'zip_code' => '44626',
                'city_id' => 19701,
                'created_at' => '2022-01-05 12:03:24',
                'updated_at' => '2022-01-05 12:03:24',
            ),
            357 => 
            array (
                'id' => 358,
                'zip_code' => '74801',
                'city_id' => 20975,
                'created_at' => '2022-01-05 12:03:29',
                'updated_at' => '2022-01-05 12:03:29',
            ),
            358 => 
            array (
                'id' => 359,
                'zip_code' => '73160',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:03:35',
                'updated_at' => '2022-01-05 12:03:35',
            ),
            359 => 
            array (
                'id' => 360,
                'zip_code' => '73042',
                'city_id' => 20719,
                'created_at' => '2022-01-05 12:03:40',
                'updated_at' => '2022-01-05 12:03:40',
            ),
            360 => 
            array (
                'id' => 361,
                'zip_code' => '75180',
                'city_id' => 29740,
                'created_at' => '2022-01-05 12:03:45',
                'updated_at' => '2022-01-05 12:03:45',
            ),
            361 => 
            array (
                'id' => 362,
                'zip_code' => '78233',
                'city_id' => 25892,
                'created_at' => '2022-01-05 12:03:50',
                'updated_at' => '2022-01-05 12:03:50',
            ),
            362 => 
            array (
                'id' => 363,
                'zip_code' => '72926',
                'city_id' => 869,
                'created_at' => '2022-01-05 12:03:58',
                'updated_at' => '2022-01-05 12:03:58',
            ),
            363 => 
            array (
                'id' => 364,
                'zip_code' => '77459',
                'city_id' => 25604,
                'created_at' => '2022-01-05 12:04:04',
                'updated_at' => '2022-01-05 12:04:04',
            ),
            364 => 
            array (
                'id' => 365,
                'zip_code' => '73438',
                'city_id' => 20739,
                'created_at' => '2022-01-05 12:04:10',
                'updated_at' => '2022-01-05 12:04:10',
            ),
            365 => 
            array (
                'id' => 366,
                'zip_code' => '26440',
                'city_id' => 29483,
                'created_at' => '2022-01-05 12:04:18',
                'updated_at' => '2022-01-05 12:04:18',
            ),
            366 => 
            array (
                'id' => 367,
                'zip_code' => '73737',
                'city_id' => 20678,
                'created_at' => '2022-01-05 12:04:23',
                'updated_at' => '2022-01-05 12:04:23',
            ),
            367 => 
            array (
                'id' => 368,
                'zip_code' => '79363',
                'city_id' => 25936,
                'created_at' => '2022-01-05 12:04:29',
                'updated_at' => '2022-01-05 12:04:29',
            ),
            368 => 
            array (
                'id' => 369,
                'zip_code' => '75033',
                'city_id' => 25197,
                'created_at' => '2022-01-05 12:04:35',
                'updated_at' => '2022-01-05 12:04:35',
            ),
            369 => 
            array (
                'id' => 370,
                'zip_code' => '78852',
                'city_id' => 25103,
                'created_at' => '2022-01-05 12:04:43',
                'updated_at' => '2022-01-05 12:04:43',
            ),
            370 => 
            array (
                'id' => 371,
                'zip_code' => '74632',
                'city_id' => 20559,
                'created_at' => '2022-01-05 12:04:48',
                'updated_at' => '2022-01-05 12:04:48',
            ),
            371 => 
            array (
                'id' => 372,
                'zip_code' => '74012',
                'city_id' => 20561,
                'created_at' => '2022-01-05 12:04:53',
                'updated_at' => '2022-01-05 12:04:53',
            ),
            372 => 
            array (
                'id' => 373,
                'zip_code' => '76009',
                'city_id' => 24745,
                'created_at' => '2022-01-05 12:04:58',
                'updated_at' => '2022-01-05 12:04:58',
            ),
            373 => 
            array (
                'id' => 374,
                'zip_code' => '67863',
                'city_id' => 8484,
                'created_at' => '2022-01-05 12:05:03',
                'updated_at' => '2022-01-05 12:05:03',
            ),
            374 => 
            array (
                'id' => 375,
                'zip_code' => '81650',
                'city_id' => 3235,
                'created_at' => '2022-01-05 12:05:09',
                'updated_at' => '2022-01-05 12:05:09',
            ),
            375 => 
            array (
                'id' => 376,
                'zip_code' => '73082',
                'city_id' => 20955,
                'created_at' => '2022-01-05 12:05:14',
                'updated_at' => '2022-01-05 12:05:14',
            ),
            376 => 
            array (
                'id' => 377,
                'zip_code' => '67548',
                'city_id' => 8427,
                'created_at' => '2022-01-05 12:05:19',
                'updated_at' => '2022-01-05 12:05:19',
            ),
            377 => 
            array (
                'id' => 378,
                'zip_code' => '73016',
                'city_id' => 20590,
                'created_at' => '2022-01-05 12:05:24',
                'updated_at' => '2022-01-05 12:05:24',
            ),
            378 => 
            array (
                'id' => 379,
                'zip_code' => '73034',
                'city_id' => 20664,
                'created_at' => '2022-01-05 12:05:30',
                'updated_at' => '2022-01-05 12:05:30',
            ),
            379 => 
            array (
                'id' => 380,
                'zip_code' => '73040',
                'city_id' => 20707,
                'created_at' => '2022-01-05 12:05:35',
                'updated_at' => '2022-01-05 12:05:35',
            ),
            380 => 
            array (
                'id' => 381,
                'zip_code' => '78130',
                'city_id' => 25649,
                'created_at' => '2022-01-05 12:05:40',
                'updated_at' => '2022-01-05 12:05:40',
            ),
            381 => 
            array (
                'id' => 382,
                'zip_code' => '73663',
                'city_id' => 20968,
                'created_at' => '2022-01-05 12:05:45',
                'updated_at' => '2022-01-05 12:05:45',
            ),
            382 => 
            array (
                'id' => 383,
                'zip_code' => '59323',
                'city_id' => 14580,
                'created_at' => '2022-01-05 12:05:51',
                'updated_at' => '2022-01-05 12:05:51',
            ),
            383 => 
            array (
                'id' => 384,
                'zip_code' => '73170',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:05:56',
                'updated_at' => '2022-01-05 12:05:56',
            ),
            384 => 
            array (
                'id' => 385,
                'zip_code' => '72904',
                'city_id' => 1000,
                'created_at' => '2022-01-05 12:06:01',
                'updated_at' => '2022-01-05 12:06:01',
            ),
            385 => 
            array (
                'id' => 386,
                'zip_code' => '70633',
                'city_id' => 9662,
                'created_at' => '2022-01-05 12:06:06',
                'updated_at' => '2022-01-05 12:06:06',
            ),
            386 => 
            array (
                'id' => 387,
                'zip_code' => '82636',
                'city_id' => 29615,
                'created_at' => '2022-01-05 12:06:11',
                'updated_at' => '2022-01-05 12:06:11',
            ),
            387 => 
            array (
                'id' => 388,
                'zip_code' => '74531',
                'city_id' => 20576,
                'created_at' => '2022-01-05 12:06:17',
                'updated_at' => '2022-01-05 12:06:17',
            ),
            388 => 
            array (
                'id' => 389,
                'zip_code' => '76133',
                'city_id' => 25184,
                'created_at' => '2022-01-05 12:06:22',
                'updated_at' => '2022-01-05 12:06:22',
            ),
            389 => 
            array (
                'id' => 390,
                'zip_code' => '75686',
                'city_id' => 25749,
                'created_at' => '2022-01-05 12:06:27',
                'updated_at' => '2022-01-05 12:06:27',
            ),
            390 => 
            array (
                'id' => 391,
                'zip_code' => '75672',
                'city_id' => 25537,
                'created_at' => '2022-01-05 12:06:32',
                'updated_at' => '2022-01-05 12:06:32',
            ),
            391 => 
            array (
                'id' => 392,
                'zip_code' => '76135',
                'city_id' => 25184,
                'created_at' => '2022-01-05 12:06:38',
                'updated_at' => '2022-01-05 12:06:38',
            ),
            392 => 
            array (
                'id' => 393,
                'zip_code' => '74063',
                'city_id' => 20961,
                'created_at' => '2022-01-05 12:06:43',
                'updated_at' => '2022-01-05 12:06:43',
            ),
            393 => 
            array (
                'id' => 394,
                'zip_code' => '73624',
                'city_id' => 20569,
                'created_at' => '2022-01-05 12:06:48',
                'updated_at' => '2022-01-05 12:06:48',
            ),
            394 => 
            array (
                'id' => 395,
                'zip_code' => '72396',
                'city_id' => 1411,
                'created_at' => '2022-01-05 12:06:54',
                'updated_at' => '2022-01-05 12:06:54',
            ),
            395 => 
            array (
                'id' => 396,
                'zip_code' => '36420',
                'city_id' => 247,
                'created_at' => '2022-01-05 12:06:59',
                'updated_at' => '2022-01-05 12:06:59',
            ),
            396 => 
            array (
                'id' => 397,
                'zip_code' => '74930',
                'city_id' => 20552,
                'created_at' => '2022-01-05 12:07:04',
                'updated_at' => '2022-01-05 12:07:04',
            ),
            397 => 
            array (
                'id' => 398,
                'zip_code' => '76110',
                'city_id' => 25184,
                'created_at' => '2022-01-05 12:07:09',
                'updated_at' => '2022-01-05 12:07:09',
            ),
            398 => 
            array (
                'id' => 399,
                'zip_code' => '64728',
                'city_id' => 13238,
                'created_at' => '2022-01-05 12:07:15',
                'updated_at' => '2022-01-05 12:07:15',
            ),
            399 => 
            array (
                'id' => 400,
                'zip_code' => '67522',
                'city_id' => 8194,
                'created_at' => '2022-01-05 12:07:20',
                'updated_at' => '2022-01-05 12:07:20',
            ),
            400 => 
            array (
                'id' => 401,
                'zip_code' => '73069',
                'city_id' => 20878,
                'created_at' => '2022-01-05 12:07:25',
                'updated_at' => '2022-01-05 12:07:25',
            ),
            401 => 
            array (
                'id' => 402,
                'zip_code' => '72937',
                'city_id' => 1043,
                'created_at' => '2022-01-05 12:07:30',
                'updated_at' => '2022-01-05 12:07:30',
            ),
            402 => 
            array (
                'id' => 403,
                'zip_code' => '26574',
                'city_id' => 29086,
                'created_at' => '2022-01-05 12:07:36',
                'updated_at' => '2022-01-05 12:07:36',
            ),
            403 => 
            array (
                'id' => 404,
                'zip_code' => '25326',
                'city_id' => 28932,
                'created_at' => '2022-01-05 12:07:41',
                'updated_at' => '2022-01-05 12:07:41',
            ),
            404 => 
            array (
                'id' => 405,
                'zip_code' => '73028',
                'city_id' => 20631,
                'created_at' => '2022-01-05 12:07:46',
                'updated_at' => '2022-01-05 12:07:46',
            ),
            405 => 
            array (
                'id' => 406,
                'zip_code' => '75143',
                'city_id' => 25383,
                'created_at' => '2022-01-05 12:07:51',
                'updated_at' => '2022-01-05 12:07:51',
            ),
            406 => 
            array (
                'id' => 407,
                'zip_code' => '78069',
                'city_id' => 25963,
                'created_at' => '2022-01-05 12:07:57',
                'updated_at' => '2022-01-05 12:07:57',
            ),
            407 => 
            array (
                'id' => 408,
                'zip_code' => '64060',
                'city_id' => 13582,
                'created_at' => '2022-01-05 12:08:02',
                'updated_at' => '2022-01-05 12:08:02',
            ),
            408 => 
            array (
                'id' => 409,
                'zip_code' => '13316',
                'city_id' => 18012,
                'created_at' => '2022-01-05 12:08:07',
                'updated_at' => '2022-01-05 12:08:07',
            ),
            409 => 
            array (
                'id' => 410,
                'zip_code' => '24630',
                'city_id' => 26987,
                'created_at' => '2022-01-05 12:08:12',
                'updated_at' => '2022-01-05 12:08:12',
            ),
            410 => 
            array (
                'id' => 411,
                'zip_code' => '68978',
                'city_id' => 16468,
                'created_at' => '2022-01-05 12:08:17',
                'updated_at' => '2022-01-05 12:08:17',
            ),
            411 => 
            array (
                'id' => 412,
                'zip_code' => '73739',
                'city_id' => 20713,
                'created_at' => '2022-01-05 12:08:23',
                'updated_at' => '2022-01-05 12:08:23',
            ),
            412 => 
            array (
                'id' => 413,
                'zip_code' => '75904',
                'city_id' => 25512,
                'created_at' => '2022-01-05 12:08:28',
                'updated_at' => '2022-01-05 12:08:28',
            ),
            413 => 
            array (
                'id' => 414,
                'zip_code' => '88401',
                'city_id' => 17690,
                'created_at' => '2022-01-05 12:08:33',
                'updated_at' => '2022-01-05 12:08:33',
            ),
            414 => 
            array (
                'id' => 415,
                'zip_code' => '79423',
                'city_id' => 25510,
                'created_at' => '2022-01-05 12:08:38',
                'updated_at' => '2022-01-05 12:08:38',
            ),
            415 => 
            array (
                'id' => 416,
                'zip_code' => '74601',
                'city_id' => 20919,
                'created_at' => '2022-01-05 12:08:43',
                'updated_at' => '2022-01-05 12:08:43',
            ),
            416 => 
            array (
                'id' => 417,
                'zip_code' => '79003',
                'city_id' => 24741,
                'created_at' => '2022-01-05 12:08:49',
                'updated_at' => '2022-01-05 12:08:49',
            ),
            417 => 
            array (
                'id' => 418,
                'zip_code' => '26386',
                'city_id' => 29214,
                'created_at' => '2022-01-05 12:08:54',
                'updated_at' => '2022-01-05 12:08:54',
            ),
            418 => 
            array (
                'id' => 419,
                'zip_code' => '74883',
                'city_id' => 21066,
                'created_at' => '2022-01-05 12:08:59',
                'updated_at' => '2022-01-05 12:08:59',
            ),
            419 => 
            array (
                'id' => 420,
                'zip_code' => '67576',
                'city_id' => 8640,
                'created_at' => '2022-01-05 12:09:04',
                'updated_at' => '2022-01-05 12:09:04',
            ),
            420 => 
            array (
                'id' => 421,
                'zip_code' => '72858',
                'city_id' => 1261,
                'created_at' => '2022-01-05 12:09:10',
                'updated_at' => '2022-01-05 12:09:10',
            ),
            421 => 
            array (
                'id' => 422,
                'zip_code' => '73165',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:09:15',
                'updated_at' => '2022-01-05 12:09:15',
            ),
            422 => 
            array (
                'id' => 423,
                'zip_code' => '72946',
                'city_id' => 1196,
                'created_at' => '2022-01-05 12:09:20',
                'updated_at' => '2022-01-05 12:09:20',
            ),
            423 => 
            array (
                'id' => 424,
                'zip_code' => '74127',
                'city_id' => 21024,
                'created_at' => '2022-01-05 12:09:25',
                'updated_at' => '2022-01-05 12:09:25',
            ),
            424 => 
            array (
                'id' => 425,
                'zip_code' => '78261',
                'city_id' => 25892,
                'created_at' => '2022-01-05 12:09:31',
                'updated_at' => '2022-01-05 12:09:31',
            ),
            425 => 
            array (
                'id' => 426,
                'zip_code' => '73738',
                'city_id' => 20704,
                'created_at' => '2022-01-05 12:09:36',
                'updated_at' => '2022-01-05 12:09:36',
            ),
            426 => 
            array (
                'id' => 427,
                'zip_code' => '75154',
                'city_id' => 25817,
                'created_at' => '2022-01-05 12:09:41',
                'updated_at' => '2022-01-05 12:09:41',
            ),
            427 => 
            array (
                'id' => 428,
                'zip_code' => '75068',
                'city_id' => 25479,
                'created_at' => '2022-01-05 12:09:46',
                'updated_at' => '2022-01-05 12:09:46',
            ),
            428 => 
            array (
                'id' => 429,
                'zip_code' => '65483',
                'city_id' => 13549,
                'created_at' => '2022-01-05 12:09:51',
                'updated_at' => '2022-01-05 12:09:51',
            ),
            429 => 
            array (
                'id' => 430,
                'zip_code' => '26218',
                'city_id' => 29051,
                'created_at' => '2022-01-05 12:09:57',
                'updated_at' => '2022-01-05 12:09:57',
            ),
            430 => 
            array (
                'id' => 431,
                'zip_code' => '73059',
                'city_id' => 20852,
                'created_at' => '2022-01-05 12:10:02',
                'updated_at' => '2022-01-05 12:10:02',
            ),
            431 => 
            array (
                'id' => 432,
                'zip_code' => '43935',
                'city_id' => 19983,
                'created_at' => '2022-01-05 12:10:07',
                'updated_at' => '2022-01-05 12:10:07',
            ),
            432 => 
            array (
                'id' => 433,
                'zip_code' => '74558',
                'city_id' => 20871,
                'created_at' => '2022-01-05 12:10:12',
                'updated_at' => '2022-01-05 12:10:12',
            ),
            433 => 
            array (
                'id' => 434,
                'zip_code' => '66769',
                'city_id' => 8620,
                'created_at' => '2022-01-05 12:10:18',
                'updated_at' => '2022-01-05 12:10:18',
            ),
            434 => 
            array (
                'id' => 435,
                'zip_code' => '71037',
                'city_id' => 9759,
                'created_at' => '2022-01-05 12:10:23',
                'updated_at' => '2022-01-05 12:10:23',
            ),
            435 => 
            array (
                'id' => 436,
                'zip_code' => '74006',
                'city_id' => 20531,
                'created_at' => '2022-01-05 12:10:29',
                'updated_at' => '2022-01-05 12:10:29',
            ),
            436 => 
            array (
                'id' => 437,
                'zip_code' => '76401',
                'city_id' => 25988,
                'created_at' => '2022-01-05 12:10:34',
                'updated_at' => '2022-01-05 12:10:34',
            ),
            437 => 
            array (
                'id' => 438,
                'zip_code' => '76098',
                'city_id' => 24783,
                'created_at' => '2022-01-05 12:10:39',
                'updated_at' => '2022-01-05 12:10:39',
            ),
            438 => 
            array (
                'id' => 439,
                'zip_code' => '73860',
                'city_id' => 21058,
                'created_at' => '2022-01-05 12:10:44',
                'updated_at' => '2022-01-05 12:10:44',
            ),
            439 => 
            array (
                'id' => 440,
                'zip_code' => '75140',
                'city_id' => 25250,
                'created_at' => '2022-01-05 12:10:50',
                'updated_at' => '2022-01-05 12:10:50',
            ),
            440 => 
            array (
                'id' => 441,
                'zip_code' => '79086',
                'city_id' => 26007,
                'created_at' => '2022-01-05 12:10:55',
                'updated_at' => '2022-01-05 12:10:55',
            ),
            441 => 
            array (
                'id' => 442,
                'zip_code' => '73149',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:11:00',
                'updated_at' => '2022-01-05 12:11:00',
            ),
            442 => 
            array (
                'id' => 443,
                'zip_code' => '90012',
                'city_id' => 2298,
                'created_at' => '2022-01-05 12:11:06',
                'updated_at' => '2022-01-05 12:11:06',
            ),
            443 => 
            array (
                'id' => 444,
                'zip_code' => '75633',
                'city_id' => 24930,
                'created_at' => '2022-01-05 12:11:12',
                'updated_at' => '2022-01-05 12:11:12',
            ),
            444 => 
            array (
                'id' => 445,
                'zip_code' => '73026',
                'city_id' => 20878,
                'created_at' => '2022-01-05 12:11:18',
                'updated_at' => '2022-01-05 12:11:18',
            ),
            445 => 
            array (
                'id' => 446,
                'zip_code' => '73848',
                'city_id' => 20798,
                'created_at' => '2022-01-05 12:11:23',
                'updated_at' => '2022-01-05 12:11:23',
            ),
            446 => 
            array (
                'id' => 447,
                'zip_code' => '71949',
                'city_id' => 1098,
                'created_at' => '2022-01-05 12:11:28',
                'updated_at' => '2022-01-05 12:11:28',
            ),
            447 => 
            array (
                'id' => 448,
                'zip_code' => '73832',
                'city_id' => 20524,
                'created_at' => '2022-01-05 12:11:33',
                'updated_at' => '2022-01-05 12:11:33',
            ),
            448 => 
            array (
                'id' => 449,
                'zip_code' => '73858',
                'city_id' => 20974,
                'created_at' => '2022-01-05 12:11:39',
                'updated_at' => '2022-01-05 12:11:39',
            ),
            449 => 
            array (
                'id' => 450,
                'zip_code' => '74056',
                'city_id' => 20907,
                'created_at' => '2022-01-05 12:11:44',
                'updated_at' => '2022-01-05 12:11:44',
            ),
            450 => 
            array (
                'id' => 451,
                'zip_code' => '77853',
                'city_id' => 25078,
                'created_at' => '2022-01-05 12:11:50',
                'updated_at' => '2022-01-05 12:11:50',
            ),
            451 => 
            array (
                'id' => 452,
                'zip_code' => '73070',
                'city_id' => 20878,
                'created_at' => '2022-01-05 12:11:57',
                'updated_at' => '2022-01-05 12:11:57',
            ),
            452 => 
            array (
                'id' => 453,
                'zip_code' => '61008',
                'city_id' => 6183,
                'created_at' => '2022-01-05 12:12:03',
                'updated_at' => '2022-01-05 12:12:03',
            ),
            453 => 
            array (
                'id' => 454,
                'zip_code' => '73106',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:12:08',
                'updated_at' => '2022-01-05 12:12:08',
            ),
            454 => 
            array (
                'id' => 455,
                'zip_code' => '73119',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:12:13',
                'updated_at' => '2022-01-05 12:12:13',
            ),
            455 => 
            array (
                'id' => 456,
                'zip_code' => '55075',
                'city_id' => 13007,
                'created_at' => '2022-01-05 12:12:19',
                'updated_at' => '2022-01-05 12:12:19',
            ),
            456 => 
            array (
                'id' => 457,
                'zip_code' => '74644',
                'city_id' => 20830,
                'created_at' => '2022-01-05 12:12:24',
                'updated_at' => '2022-01-05 12:12:24',
            ),
            457 => 
            array (
                'id' => 458,
                'zip_code' => '64152',
                'city_id' => 13581,
                'created_at' => '2022-01-05 12:12:30',
                'updated_at' => '2022-01-05 12:12:30',
            ),
            458 => 
            array (
                'id' => 459,
                'zip_code' => '39629',
                'city_id' => 14108,
                'created_at' => '2022-01-05 12:12:35',
                'updated_at' => '2022-01-05 12:12:35',
            ),
            459 => 
            array (
                'id' => 460,
                'zip_code' => '74037',
                'city_id' => 20770,
                'created_at' => '2022-01-05 12:12:40',
                'updated_at' => '2022-01-05 12:12:40',
            ),
            460 => 
            array (
                'id' => 461,
                'zip_code' => '76119',
                'city_id' => 25184,
                'created_at' => '2022-01-05 12:12:45',
                'updated_at' => '2022-01-05 12:12:45',
            ),
            461 => 
            array (
                'id' => 462,
                'zip_code' => '82601',
                'city_id' => 29591,
                'created_at' => '2022-01-05 12:12:51',
                'updated_at' => '2022-01-05 12:12:51',
            ),
            462 => 
            array (
                'id' => 463,
                'zip_code' => '43537',
                'city_id' => 19990,
                'created_at' => '2022-01-05 12:12:56',
                'updated_at' => '2022-01-05 12:12:56',
            ),
            463 => 
            array (
                'id' => 464,
                'zip_code' => '79103',
                'city_id' => 24748,
                'created_at' => '2022-01-05 12:13:01',
                'updated_at' => '2022-01-05 12:13:01',
            ),
            464 => 
            array (
                'id' => 465,
                'zip_code' => '73129',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:13:06',
                'updated_at' => '2022-01-05 12:13:06',
            ),
            465 => 
            array (
                'id' => 466,
                'zip_code' => '67009',
                'city_id' => 8149,
                'created_at' => '2022-01-05 12:13:12',
                'updated_at' => '2022-01-05 12:13:12',
            ),
            466 => 
            array (
                'id' => 467,
                'zip_code' => '73763',
                'city_id' => 20888,
                'created_at' => '2022-01-05 12:13:17',
                'updated_at' => '2022-01-05 12:13:17',
            ),
            467 => 
            array (
                'id' => 468,
                'zip_code' => '70582',
                'city_id' => 9955,
                'created_at' => '2022-01-05 12:13:22',
                'updated_at' => '2022-01-05 12:13:22',
            ),
            468 => 
            array (
                'id' => 469,
                'zip_code' => '73503',
                'city_id' => 20692,
                'created_at' => '2022-01-05 12:13:27',
                'updated_at' => '2022-01-05 12:13:27',
            ),
            469 => 
            array (
                'id' => 470,
                'zip_code' => '74553',
                'city_id' => 20788,
                'created_at' => '2022-01-05 12:13:33',
                'updated_at' => '2022-01-05 12:13:33',
            ),
            470 => 
            array (
                'id' => 471,
                'zip_code' => '73142',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:13:38',
                'updated_at' => '2022-01-05 12:13:38',
            ),
            471 => 
            array (
                'id' => 472,
                'zip_code' => '72013',
                'city_id' => 843,
                'created_at' => '2022-01-05 12:14:03',
                'updated_at' => '2022-01-05 12:14:03',
            ),
            472 => 
            array (
                'id' => 473,
                'zip_code' => '74501',
                'city_id' => 20837,
                'created_at' => '2022-01-05 12:14:09',
                'updated_at' => '2022-01-05 12:14:09',
            ),
            473 => 
            array (
                'id' => 474,
                'zip_code' => '81504',
                'city_id' => 3074,
                'created_at' => '2022-01-05 12:14:14',
                'updated_at' => '2022-01-05 12:14:14',
            ),
            474 => 
            array (
                'id' => 475,
                'zip_code' => '80547',
                'city_id' => 3276,
                'created_at' => '2022-01-05 12:14:19',
                'updated_at' => '2022-01-05 12:14:19',
            ),
            475 => 
            array (
                'id' => 476,
                'zip_code' => '84790',
                'city_id' => 26388,
                'created_at' => '2022-01-05 12:14:25',
                'updated_at' => '2022-01-05 12:14:25',
            ),
            476 => 
            array (
                'id' => 477,
                'zip_code' => '81526',
                'city_id' => 3203,
                'created_at' => '2022-01-05 12:14:30',
                'updated_at' => '2022-01-05 12:14:30',
            ),
            477 => 
            array (
                'id' => 478,
                'zip_code' => '72141',
                'city_id' => 1302,
                'created_at' => '2022-01-05 12:14:35',
                'updated_at' => '2022-01-05 12:14:35',
            ),
            478 => 
            array (
                'id' => 479,
                'zip_code' => '73048',
                'city_id' => 20763,
                'created_at' => '2022-01-05 12:14:41',
                'updated_at' => '2022-01-05 12:14:41',
            ),
            479 => 
            array (
                'id' => 480,
                'zip_code' => '74878',
                'city_id' => 21045,
                'created_at' => '2022-01-05 12:14:46',
                'updated_at' => '2022-01-05 12:14:46',
            ),
            480 => 
            array (
                'id' => 481,
                'zip_code' => '74561',
                'city_id' => 20932,
                'created_at' => '2022-01-05 12:14:51',
                'updated_at' => '2022-01-05 12:14:51',
            ),
            481 => 
            array (
                'id' => 482,
                'zip_code' => '74833',
                'city_id' => 20591,
                'created_at' => '2022-01-05 12:14:56',
                'updated_at' => '2022-01-05 12:14:56',
            ),
            482 => 
            array (
                'id' => 483,
                'zip_code' => '73128',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:15:02',
                'updated_at' => '2022-01-05 12:15:02',
            ),
            483 => 
            array (
                'id' => 484,
                'zip_code' => '75142',
                'city_id' => 25379,
                'created_at' => '2022-01-05 12:15:07',
                'updated_at' => '2022-01-05 12:15:07',
            ),
            484 => 
            array (
                'id' => 485,
                'zip_code' => '75215',
                'city_id' => 25041,
                'created_at' => '2022-01-05 12:15:12',
                'updated_at' => '2022-01-05 12:15:12',
            ),
            485 => 
            array (
                'id' => 486,
                'zip_code' => '75146',
                'city_id' => 25438,
                'created_at' => '2022-01-05 12:15:18',
                'updated_at' => '2022-01-05 12:15:18',
            ),
            486 => 
            array (
                'id' => 487,
                'zip_code' => '75056',
                'city_id' => 26037,
                'created_at' => '2022-01-05 12:15:23',
                'updated_at' => '2022-01-05 12:15:23',
            ),
            487 => 
            array (
                'id' => 488,
                'zip_code' => '75048',
                'city_id' => 25881,
                'created_at' => '2022-01-05 12:15:28',
                'updated_at' => '2022-01-05 12:15:28',
            ),
            488 => 
            array (
                'id' => 489,
                'zip_code' => '75227',
                'city_id' => 25041,
                'created_at' => '2022-01-05 12:15:33',
                'updated_at' => '2022-01-05 12:15:33',
            ),
            489 => 
            array (
                'id' => 490,
                'zip_code' => '75087',
                'city_id' => 25852,
                'created_at' => '2022-01-05 12:15:38',
                'updated_at' => '2022-01-05 12:15:38',
            ),
            490 => 
            array (
                'id' => 491,
                'zip_code' => '75041',
                'city_id' => 25212,
                'created_at' => '2022-01-05 12:15:43',
                'updated_at' => '2022-01-05 12:15:43',
            ),
            491 => 
            array (
                'id' => 492,
                'zip_code' => '75189',
                'city_id' => 25874,
                'created_at' => '2022-01-05 12:15:49',
                'updated_at' => '2022-01-05 12:15:49',
            ),
            492 => 
            array (
                'id' => 493,
                'zip_code' => '75253',
                'city_id' => 25041,
                'created_at' => '2022-01-05 12:15:54',
                'updated_at' => '2022-01-05 12:15:54',
            ),
            493 => 
            array (
                'id' => 494,
                'zip_code' => '75040',
                'city_id' => 25212,
                'created_at' => '2022-01-05 12:15:59',
                'updated_at' => '2022-01-05 12:15:59',
            ),
            494 => 
            array (
                'id' => 495,
                'zip_code' => '75116',
                'city_id' => 25099,
                'created_at' => '2022-01-05 12:16:05',
                'updated_at' => '2022-01-05 12:16:05',
            ),
            495 => 
            array (
                'id' => 496,
                'zip_code' => '75238',
                'city_id' => 25041,
                'created_at' => '2022-01-05 12:16:10',
                'updated_at' => '2022-01-05 12:16:10',
            ),
            496 => 
            array (
                'id' => 497,
                'zip_code' => '75150',
                'city_id' => 25580,
                'created_at' => '2022-01-05 12:16:15',
                'updated_at' => '2022-01-05 12:16:15',
            ),
            497 => 
            array (
                'id' => 498,
                'zip_code' => '76022',
                'city_id' => 24809,
                'created_at' => '2022-01-05 12:16:20',
                'updated_at' => '2022-01-05 12:16:20',
            ),
            498 => 
            array (
                'id' => 499,
                'zip_code' => '75401',
                'city_id' => 25256,
                'created_at' => '2022-01-05 12:16:26',
                'updated_at' => '2022-01-05 12:16:26',
            ),
            499 => 
            array (
                'id' => 500,
                'zip_code' => '75212',
                'city_id' => 25041,
                'created_at' => '2022-01-05 12:16:31',
                'updated_at' => '2022-01-05 12:16:31',
            ),
        ));
        \DB::table('zipcodes')->insert(array (
            0 => 
            array (
                'id' => 501,
                'zip_code' => '75149',
                'city_id' => 25580,
                'created_at' => '2022-01-05 12:16:36',
                'updated_at' => '2022-01-05 12:16:36',
            ),
            1 => 
            array (
                'id' => 502,
                'zip_code' => '75032',
                'city_id' => 25852,
                'created_at' => '2022-01-05 12:16:41',
                'updated_at' => '2022-01-05 12:16:41',
            ),
            2 => 
            array (
                'id' => 503,
                'zip_code' => '73109',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:16:47',
                'updated_at' => '2022-01-05 12:16:47',
            ),
            3 => 
            array (
                'id' => 504,
                'zip_code' => '73012',
                'city_id' => 20664,
                'created_at' => '2022-01-05 12:16:52',
                'updated_at' => '2022-01-05 12:16:52',
            ),
            4 => 
            array (
                'id' => 505,
                'zip_code' => '88240',
                'city_id' => 17506,
                'created_at' => '2022-01-05 12:16:57',
                'updated_at' => '2022-01-05 12:16:57',
            ),
            5 => 
            array (
                'id' => 506,
                'zip_code' => '73179',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:17:02',
                'updated_at' => '2022-01-05 12:17:02',
            ),
            6 => 
            array (
                'id' => 507,
                'zip_code' => '73072',
                'city_id' => 20878,
                'created_at' => '2022-01-05 12:17:08',
                'updated_at' => '2022-01-05 12:17:08',
            ),
            7 => 
            array (
                'id' => 508,
                'zip_code' => '78659',
                'city_id' => 25706,
                'created_at' => '2022-01-05 12:17:14',
                'updated_at' => '2022-01-05 12:17:14',
            ),
            8 => 
            array (
                'id' => 509,
                'zip_code' => '71801',
                'city_id' => 1075,
                'created_at' => '2022-01-05 12:17:19',
                'updated_at' => '2022-01-05 12:17:19',
            ),
            9 => 
            array (
                'id' => 510,
                'zip_code' => '76904',
                'city_id' => 25891,
                'created_at' => '2022-01-05 12:17:25',
                'updated_at' => '2022-01-05 12:17:25',
            ),
            10 => 
            array (
                'id' => 511,
                'zip_code' => '73644',
                'city_id' => 20668,
                'created_at' => '2022-01-05 12:17:30',
                'updated_at' => '2022-01-05 12:17:30',
            ),
            11 => 
            array (
                'id' => 512,
                'zip_code' => '73521',
                'city_id' => 20511,
                'created_at' => '2022-01-05 12:17:35',
                'updated_at' => '2022-01-05 12:17:35',
            ),
            12 => 
            array (
                'id' => 513,
                'zip_code' => '79928',
                'city_id' => 25122,
                'created_at' => '2022-01-05 12:17:40',
                'updated_at' => '2022-01-05 12:17:40',
            ),
            13 => 
            array (
                'id' => 514,
                'zip_code' => '76036',
                'city_id' => 25026,
                'created_at' => '2022-01-05 12:17:45',
                'updated_at' => '2022-01-05 12:17:45',
            ),
            14 => 
            array (
                'id' => 515,
                'zip_code' => '76261',
                'city_id' => 25831,
                'created_at' => '2022-01-05 12:17:51',
                'updated_at' => '2022-01-05 12:17:51',
            ),
            15 => 
            array (
                'id' => 516,
                'zip_code' => '76301',
                'city_id' => 26149,
                'created_at' => '2022-01-05 12:17:56',
                'updated_at' => '2022-01-05 12:17:56',
            ),
            16 => 
            array (
                'id' => 517,
                'zip_code' => '73724',
                'city_id' => 20581,
                'created_at' => '2022-01-05 12:18:01',
                'updated_at' => '2022-01-05 12:18:01',
            ),
            17 => 
            array (
                'id' => 518,
                'zip_code' => '74884',
                'city_id' => 21067,
                'created_at' => '2022-01-05 12:18:07',
                'updated_at' => '2022-01-05 12:18:07',
            ),
            18 => 
            array (
                'id' => 519,
                'zip_code' => '75069',
                'city_id' => 25563,
                'created_at' => '2022-01-05 12:18:12',
                'updated_at' => '2022-01-05 12:18:12',
            ),
            19 => 
            array (
                'id' => 520,
                'zip_code' => '74301',
                'city_id' => 21039,
                'created_at' => '2022-01-05 12:18:17',
                'updated_at' => '2022-01-05 12:18:17',
            ),
            20 => 
            array (
                'id' => 521,
                'zip_code' => '79005',
                'city_id' => 24855,
                'created_at' => '2022-01-05 12:18:22',
                'updated_at' => '2022-01-05 12:18:22',
            ),
            21 => 
            array (
                'id' => 522,
                'zip_code' => '79024',
                'city_id' => 25046,
                'created_at' => '2022-01-05 12:18:28',
                'updated_at' => '2022-01-05 12:18:28',
            ),
            22 => 
            array (
                'id' => 523,
                'zip_code' => '79081',
                'city_id' => 25974,
                'created_at' => '2022-01-05 12:18:33',
                'updated_at' => '2022-01-05 12:18:33',
            ),
            23 => 
            array (
                'id' => 524,
                'zip_code' => '79034',
                'city_id' => 25174,
                'created_at' => '2022-01-05 12:18:38',
                'updated_at' => '2022-01-05 12:18:38',
            ),
            24 => 
            array (
                'id' => 525,
                'zip_code' => '73703',
                'city_id' => 20671,
                'created_at' => '2022-01-05 12:18:44',
                'updated_at' => '2022-01-05 12:18:44',
            ),
            25 => 
            array (
                'id' => 526,
                'zip_code' => '72117',
                'city_id' => 1209,
                'created_at' => '2022-01-05 12:18:49',
                'updated_at' => '2022-01-05 12:18:49',
            ),
            26 => 
            array (
                'id' => 527,
                'zip_code' => '76123',
                'city_id' => 25184,
                'created_at' => '2022-01-05 12:18:54',
                'updated_at' => '2022-01-05 12:18:54',
            ),
            27 => 
            array (
                'id' => 528,
                'zip_code' => '73669',
                'city_id' => 21018,
                'created_at' => '2022-01-05 12:19:00',
                'updated_at' => '2022-01-05 12:19:00',
            ),
            28 => 
            array (
                'id' => 529,
                'zip_code' => '59107',
                'city_id' => 14542,
                'created_at' => '2022-01-05 12:19:05',
                'updated_at' => '2022-01-05 12:19:05',
            ),
            29 => 
            array (
                'id' => 530,
                'zip_code' => '73068',
                'city_id' => 20877,
                'created_at' => '2022-01-05 12:19:10',
                'updated_at' => '2022-01-05 12:19:10',
            ),
            30 => 
            array (
                'id' => 531,
                'zip_code' => '73159',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:19:15',
                'updated_at' => '2022-01-05 12:19:15',
            ),
            31 => 
            array (
                'id' => 532,
                'zip_code' => '73173',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:19:21',
                'updated_at' => '2022-01-05 12:19:21',
            ),
            32 => 
            array (
                'id' => 533,
                'zip_code' => '75662',
                'city_id' => 25396,
                'created_at' => '2022-01-05 12:19:26',
                'updated_at' => '2022-01-05 12:19:26',
            ),
            33 => 
            array (
                'id' => 534,
                'zip_code' => '75684',
                'city_id' => 25703,
                'created_at' => '2022-01-05 12:19:31',
                'updated_at' => '2022-01-05 12:19:31',
            ),
            34 => 
            array (
                'id' => 535,
                'zip_code' => '27355',
                'city_id' => 15513,
                'created_at' => '2022-01-05 12:19:36',
                'updated_at' => '2022-01-05 12:19:36',
            ),
            35 => 
            array (
                'id' => 536,
                'zip_code' => '81524',
                'city_id' => 3147,
                'created_at' => '2022-01-05 12:19:42',
                'updated_at' => '2022-01-05 12:19:42',
            ),
            36 => 
            array (
                'id' => 537,
                'zip_code' => '73851',
                'city_id' => 20835,
                'created_at' => '2022-01-05 12:19:47',
                'updated_at' => '2022-01-05 12:19:47',
            ),
            37 => 
            array (
                'id' => 538,
                'zip_code' => '74959',
                'city_id' => 20989,
                'created_at' => '2022-01-05 12:19:52',
                'updated_at' => '2022-01-05 12:19:52',
            ),
            38 => 
            array (
                'id' => 539,
                'zip_code' => '67057',
                'city_id' => 8366,
                'created_at' => '2022-01-05 12:19:59',
                'updated_at' => '2022-01-05 12:19:59',
            ),
            39 => 
            array (
                'id' => 540,
                'zip_code' => '73717',
                'city_id' => 20513,
                'created_at' => '2022-01-05 12:20:04',
                'updated_at' => '2022-01-05 12:20:04',
            ),
            40 => 
            array (
                'id' => 541,
                'zip_code' => '81621',
                'city_id' => 2940,
                'created_at' => '2022-01-05 12:20:10',
                'updated_at' => '2022-01-05 12:20:10',
            ),
            41 => 
            array (
                'id' => 542,
                'zip_code' => '73702',
                'city_id' => 20671,
                'created_at' => '2022-01-05 12:20:15',
                'updated_at' => '2022-01-05 12:20:15',
            ),
            42 => 
            array (
                'id' => 543,
                'zip_code' => '73095',
                'city_id' => 21057,
                'created_at' => '2022-01-05 12:20:20',
                'updated_at' => '2022-01-05 12:20:20',
            ),
            43 => 
            array (
                'id' => 544,
                'zip_code' => '79029',
                'city_id' => 25098,
                'created_at' => '2022-01-05 12:20:26',
                'updated_at' => '2022-01-05 12:20:26',
            ),
            44 => 
            array (
                'id' => 545,
                'zip_code' => '74435',
                'city_id' => 20715,
                'created_at' => '2022-01-05 12:20:33',
                'updated_at' => '2022-01-05 12:20:33',
            ),
            45 => 
            array (
                'id' => 546,
                'zip_code' => '73552',
                'city_id' => 20765,
                'created_at' => '2022-01-05 12:20:38',
                'updated_at' => '2022-01-05 12:20:38',
            ),
            46 => 
            array (
                'id' => 547,
                'zip_code' => '79556',
                'city_id' => 26012,
                'created_at' => '2022-01-05 12:20:45',
                'updated_at' => '2022-01-05 12:20:45',
            ),
            47 => 
            array (
                'id' => 548,
                'zip_code' => '79536',
                'city_id' => 25577,
                'created_at' => '2022-01-05 12:20:50',
                'updated_at' => '2022-01-05 12:20:50',
            ),
            48 => 
            array (
                'id' => 549,
                'zip_code' => '79501',
                'city_id' => 24756,
                'created_at' => '2022-01-05 12:20:55',
                'updated_at' => '2022-01-05 12:20:55',
            ),
            49 => 
            array (
                'id' => 550,
                'zip_code' => '79541',
                'city_id' => 25702,
                'created_at' => '2022-01-05 12:21:00',
                'updated_at' => '2022-01-05 12:21:00',
            ),
            50 => 
            array (
                'id' => 551,
                'zip_code' => '79504',
                'city_id' => 24787,
                'created_at' => '2022-01-05 12:21:06',
                'updated_at' => '2022-01-05 12:21:06',
            ),
            51 => 
            array (
                'id' => 552,
                'zip_code' => '79602',
                'city_id' => 24723,
                'created_at' => '2022-01-05 12:21:11',
                'updated_at' => '2022-01-05 12:21:11',
            ),
            52 => 
            array (
                'id' => 553,
                'zip_code' => '73433',
                'city_id' => 20670,
                'created_at' => '2022-01-05 12:21:18',
                'updated_at' => '2022-01-05 12:21:18',
            ),
            53 => 
            array (
                'id' => 554,
                'zip_code' => '73139',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:21:23',
                'updated_at' => '2022-01-05 12:21:23',
            ),
            54 => 
            array (
                'id' => 555,
                'zip_code' => '37160',
                'city_id' => 24625,
                'created_at' => '2022-01-05 12:21:28',
                'updated_at' => '2022-01-05 12:21:28',
            ),
            55 => 
            array (
                'id' => 556,
                'zip_code' => '73117',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:21:34',
                'updated_at' => '2022-01-05 12:21:34',
            ),
            56 => 
            array (
                'id' => 557,
                'zip_code' => '73114',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:21:39',
                'updated_at' => '2022-01-05 12:21:39',
            ),
            57 => 
            array (
                'id' => 558,
                'zip_code' => '73150',
                'city_id' => 20890,
                'created_at' => '2022-01-05 12:21:44',
                'updated_at' => '2022-01-05 12:21:44',
            ),
            58 => 
            array (
                'id' => 559,
                'zip_code' => '26456',
                'city_id' => 29529,
                'created_at' => '2022-01-05 12:21:52',
                'updated_at' => '2022-01-05 12:21:52',
            ),
            59 => 
            array (
                'id' => 560,
                'zip_code' => '74047',
                'city_id' => 20859,
                'created_at' => '2022-01-05 12:21:57',
                'updated_at' => '2022-01-05 12:21:57',
            ),
            60 => 
            array (
                'id' => 561,
                'zip_code' => '74074',
                'city_id' => 20994,
                'created_at' => '2022-01-05 12:22:03',
                'updated_at' => '2022-01-05 12:22:03',
            ),
            61 => 
            array (
                'id' => 562,
                'zip_code' => '73526',
                'city_id' => 20545,
                'created_at' => '2022-01-05 12:22:08',
                'updated_at' => '2022-01-05 12:22:08',
            ),
            62 => 
            array (
                'id' => 563,
                'zip_code' => '73844',
                'city_id' => 20706,
                'created_at' => '2022-01-05 12:22:13',
                'updated_at' => '2022-01-05 12:22:13',
            ),
            63 => 
            array (
                'id' => 564,
                'zip_code' => '34433',
                'city_id' => 3762,
                'created_at' => '2022-01-05 12:22:19',
                'updated_at' => '2022-01-05 12:22:19',
            ),
            64 => 
            array (
                'id' => 565,
                'zip_code' => '84660',
                'city_id' => 26402,
                'created_at' => '2022-01-05 12:22:24',
                'updated_at' => '2022-01-05 12:22:24',
            ),
            65 => 
            array (
                'id' => 566,
                'zip_code' => '75979',
                'city_id' => 26175,
                'created_at' => '2022-01-05 12:22:29',
                'updated_at' => '2022-01-05 12:22:29',
            ),
            66 => 
            array (
                'id' => 567,
                'zip_code' => '80910',
                'city_id' => 2992,
                'created_at' => '2022-01-05 12:22:35',
                'updated_at' => '2022-01-05 12:22:35',
            ),
            67 => 
            array (
                'id' => 568,
                'zip_code' => '72015',
                'city_id' => 851,
                'created_at' => '2022-01-05 12:22:40',
                'updated_at' => '2022-01-05 12:22:40',
            ),
            68 => 
            array (
                'id' => 569,
                'zip_code' => '59847',
                'city_id' => 14712,
                'created_at' => '2022-01-05 12:22:45',
                'updated_at' => '2022-01-05 12:22:45',
            ),
            69 => 
            array (
                'id' => 570,
                'zip_code' => '48734',
                'city_id' => 11731,
                'created_at' => '2022-01-05 12:22:51',
                'updated_at' => '2022-01-05 12:22:51',
            ),
            70 => 
            array (
                'id' => 571,
                'zip_code' => '84067',
                'city_id' => 26386,
                'created_at' => '2022-01-05 12:22:56',
                'updated_at' => '2022-01-05 12:22:56',
            ),
            71 => 
            array (
                'id' => 572,
                'zip_code' => '72032',
                'city_id' => 927,
                'created_at' => '2022-01-05 12:23:01',
                'updated_at' => '2022-01-05 12:23:01',
            ),
            72 => 
            array (
                'id' => 573,
                'zip_code' => '34242',
                'city_id' => 4085,
                'created_at' => '2022-01-05 12:23:06',
                'updated_at' => '2022-01-05 12:23:06',
            ),
            73 => 
            array (
                'id' => 574,
                'zip_code' => '30628',
                'city_id' => 4294,
                'created_at' => '2022-01-05 12:23:12',
                'updated_at' => '2022-01-05 12:23:12',
            ),
            74 => 
            array (
                'id' => 575,
                'zip_code' => '82901',
                'city_id' => 29702,
                'created_at' => '2022-01-05 12:23:17',
                'updated_at' => '2022-01-05 12:23:17',
            ),
            75 => 
            array (
                'id' => 576,
                'zip_code' => '46761',
                'city_id' => 7718,
                'created_at' => '2022-01-05 12:23:22',
                'updated_at' => '2022-01-05 12:23:22',
            ),
            76 => 
            array (
                'id' => 577,
                'zip_code' => '72774',
                'city_id' => 1382,
                'created_at' => '2022-01-05 12:23:27',
                'updated_at' => '2022-01-05 12:23:27',
            ),
            77 => 
            array (
                'id' => 578,
                'zip_code' => '84657',
                'city_id' => 26398,
                'created_at' => '2022-01-05 12:23:33',
                'updated_at' => '2022-01-05 12:23:33',
            ),
            78 => 
            array (
                'id' => 579,
                'zip_code' => '73054',
                'city_id' => 20819,
                'created_at' => '2022-01-05 12:23:38',
                'updated_at' => '2022-01-05 12:23:38',
            ),
            79 => 
            array (
                'id' => 580,
                'zip_code' => '74860',
                'city_id' => 20901,
                'created_at' => '2022-01-05 12:23:43',
                'updated_at' => '2022-01-05 12:23:43',
            ),
            80 => 
            array (
                'id' => 581,
                'zip_code' => '72034',
                'city_id' => 927,
                'created_at' => '2022-01-05 12:23:48',
                'updated_at' => '2022-01-05 12:23:48',
            ),
            81 => 
            array (
                'id' => 582,
                'zip_code' => '77880',
                'city_id' => 26112,
                'created_at' => '2022-01-05 12:23:53',
                'updated_at' => '2022-01-05 12:23:53',
            ),
            82 => 
            array (
                'id' => 583,
                'zip_code' => '74571',
                'city_id' => 21008,
                'created_at' => '2022-01-05 12:23:59',
                'updated_at' => '2022-01-05 12:23:59',
            ),
        ));
        
        
    }
}