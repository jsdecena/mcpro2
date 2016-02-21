<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('areas')->delete();
        
        App\Models\Area::insert(array (
            0 => 
            array (
                'id' => 1,
                'city_id' => 1,
                'area' => 'Bangued',
                'zip_code' => 2800,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            1 => 
            array (
                'id' => 2,
                'city_id' => 2,
                'area' => 'Boliney',
                'zip_code' => 2815,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            2 => 
            array (
                'id' => 3,
                'city_id' => 3,
                'area' => 'Bucay',
                'zip_code' => 2805,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            3 => 
            array (
                'id' => 4,
                'city_id' => 4,
                'area' => 'Bucloc',
                'zip_code' => 2817,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            4 => 
            array (
                'id' => 5,
                'city_id' => 5,
                'area' => 'Daguioman',
                'zip_code' => 2816,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            5 => 
            array (
                'id' => 6,
                'city_id' => 6,
                'area' => 'Danglas',
                'zip_code' => 2825,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            6 => 
            array (
                'id' => 7,
                'city_id' => 7,
                'area' => 'Dolores',
                'zip_code' => 2801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            7 => 
            array (
                'id' => 8,
                'city_id' => 8,
                'area' => 'La Paz',
                'zip_code' => 2826,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            8 => 
            array (
                'id' => 9,
                'city_id' => 9,
                'area' => 'Lacub',
                'zip_code' => 2821,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            9 => 
            array (
                'id' => 10,
                'city_id' => 10,
                'area' => 'Lagangilang',
                'zip_code' => 2802,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            10 => 
            array (
                'id' => 11,
                'city_id' => 11,
                'area' => 'Lagayan',
                'zip_code' => 2824,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            11 => 
            array (
                'id' => 12,
                'city_id' => 12,
                'area' => 'Langiden',
                'zip_code' => 2807,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            12 => 
            array (
                'id' => 13,
                'city_id' => 14,
                'area' => 'Luba',
                'zip_code' => 2813,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            13 => 
            array (
                'id' => 14,
                'city_id' => 15,
                'area' => 'Malibcong',
                'zip_code' => 2820,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            14 => 
            array (
                'id' => 15,
                'city_id' => 16,
                'area' => 'Manabo',
                'zip_code' => 2810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            15 => 
            array (
                'id' => 16,
                'city_id' => 18,
                'area' => 'Pidigan',
                'zip_code' => 2806,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            16 => 
            array (
                'id' => 17,
                'city_id' => 19,
                'area' => 'Pilar',
                'zip_code' => 2812,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            17 => 
            array (
                'id' => 18,
                'city_id' => 20,
                'area' => 'Sallapadan',
                'zip_code' => 2818,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            18 => 
            array (
                'id' => 19,
                'city_id' => 21,
                'area' => 'San Isidro',
                'zip_code' => 2809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            19 => 
            array (
                'id' => 20,
                'city_id' => 22,
                'area' => 'San Juan',
                'zip_code' => 2823,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            20 => 
            array (
                'id' => 21,
                'city_id' => 23,
                'area' => 'San Quintin',
                'zip_code' => 2808,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            21 => 
            array (
                'id' => 22,
                'city_id' => 24,
                'area' => 'Tayum',
                'zip_code' => 2803,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            22 => 
            array (
                'id' => 23,
                'city_id' => 25,
                'area' => 'Tineg',
                'zip_code' => 2822,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            23 => 
            array (
                'id' => 24,
                'city_id' => 26,
                'area' => 'Tubo',
                'zip_code' => 2814,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            24 => 
            array (
                'id' => 25,
                'city_id' => 27,
                'area' => 'Villaviciosa',
                'zip_code' => 2811,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            25 => 
            array (
                'id' => 26,
                'city_id' => 28,
                'area' => 'Butuan City',
                'zip_code' => 8600,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            26 => 
            array (
                'id' => 27,
                'city_id' => 29,
                'area' => 'Buenavista',
                'zip_code' => 8601,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            27 => 
            array (
                'id' => 28,
                'city_id' => 31,
                'area' => 'Carmen',
                'zip_code' => 8603,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            28 => 
            array (
                'id' => 29,
                'city_id' => 32,
                'area' => 'Jabonga',
                'zip_code' => 8607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            29 => 
            array (
                'id' => 30,
                'city_id' => 33,
                'area' => 'Kitcharao',
                'zip_code' => 8609,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            30 => 
            array (
                'id' => 31,
                'city_id' => 34,
                'area' => 'Las Nieves',
                'zip_code' => 8610,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            31 => 
            array (
                'id' => 32,
                'city_id' => 35,
                'area' => 'Magallanes',
                'zip_code' => 8604,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            32 => 
            array (
                'id' => 33,
                'city_id' => 36,
                'area' => 'Nasipit',
                'zip_code' => 8602,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            33 => 
            array (
                'id' => 34,
                'city_id' => 37,
                'area' => 'Remedios T. Romualdez',
                'zip_code' => 8611,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            34 => 
            array (
                'id' => 35,
                'city_id' => 38,
                'area' => 'Santiago',
                'zip_code' => 8608,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            35 => 
            array (
                'id' => 36,
                'city_id' => 39,
                'area' => 'Tubay',
                'zip_code' => 8606,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            36 => 
            array (
                'id' => 37,
                'city_id' => 40,
                'area' => 'Bayugan',
                'zip_code' => 8502,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            37 => 
            array (
                'id' => 38,
                'city_id' => 41,
                'area' => 'Bunawan',
                'zip_code' => 8506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            38 => 
            array (
                'id' => 39,
                'city_id' => 42,
                'area' => 'Esperanza',
                'zip_code' => 8513,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            39 => 
            array (
                'id' => 40,
                'city_id' => 43,
                'area' => 'La Paz',
                'zip_code' => 8508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            40 => 
            array (
                'id' => 41,
                'city_id' => 44,
                'area' => 'Loreto',
                'zip_code' => 8507,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            41 => 
            array (
                'id' => 42,
                'city_id' => 45,
                'area' => 'Prosperidad',
                'zip_code' => 8500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            42 => 
            array (
                'id' => 43,
                'city_id' => 46,
                'area' => 'Rosario',
                'zip_code' => 8504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            43 => 
            array (
                'id' => 44,
                'city_id' => 47,
                'area' => 'San Francisco',
                'zip_code' => 8501,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            44 => 
            array (
                'id' => 45,
                'city_id' => 48,
                'area' => 'San Luis',
                'zip_code' => 8511,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            45 => 
            array (
                'id' => 46,
                'city_id' => 49,
                'area' => 'Santa Josefa',
                'zip_code' => 8512,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            46 => 
            array (
                'id' => 47,
                'city_id' => 50,
                'area' => 'Sibagat',
                'zip_code' => 8503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            47 => 
            array (
                'id' => 48,
                'city_id' => 51,
                'area' => 'Talacogon',
                'zip_code' => 8510,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            48 => 
            array (
                'id' => 49,
                'city_id' => 52,
                'area' => 'Trento',
                'zip_code' => 8505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            49 => 
            array (
                'id' => 50,
                'city_id' => 53,
                'area' => 'Veruela',
                'zip_code' => 8509,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            50 => 
            array (
                'id' => 51,
                'city_id' => 54,
                'area' => 'Altavas',
                'zip_code' => 5616,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            51 => 
            array (
                'id' => 52,
                'city_id' => 55,
                'area' => 'Balete',
                'zip_code' => 5614,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            52 => 
            array (
                'id' => 53,
                'city_id' => 56,
                'area' => 'Banga',
                'zip_code' => 5601,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            53 => 
            array (
                'id' => 54,
                'city_id' => 57,
                'area' => 'Batan',
                'zip_code' => 5615,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            54 => 
            array (
                'id' => 55,
                'city_id' => 58,
                'area' => 'Buruanga',
                'zip_code' => 5609,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            55 => 
            array (
                'id' => 56,
                'city_id' => 59,
                'area' => 'Ibajay',
                'zip_code' => 5613,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            56 => 
            array (
                'id' => 57,
                'city_id' => 60,
                'area' => 'Kalibo',
                'zip_code' => 5600,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            57 => 
            array (
                'id' => 58,
                'city_id' => 61,
                'area' => 'Lezo',
                'zip_code' => 5605,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            58 => 
            array (
                'id' => 59,
                'city_id' => 62,
                'area' => 'Libacao',
                'zip_code' => 5602,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            59 => 
            array (
                'id' => 60,
                'city_id' => 63,
                'area' => 'Madalag',
                'zip_code' => 5603,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            60 => 
            array (
                'id' => 61,
                'city_id' => 64,
                'area' => 'Makato',
                'zip_code' => 5611,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            61 => 
            array (
                'id' => 62,
                'city_id' => 65,
                'area' => 'Malay',
                'zip_code' => 5608,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            62 => 
            array (
                'id' => 63,
                'city_id' => 66,
                'area' => 'Malinao',
                'zip_code' => 5606,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            63 => 
            array (
                'id' => 64,
                'city_id' => 67,
                'area' => 'Nabas',
                'zip_code' => 5607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            64 => 
            array (
                'id' => 65,
                'city_id' => 68,
                'area' => 'New Washington',
                'zip_code' => 5610,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            65 => 
            array (
                'id' => 66,
                'city_id' => 69,
                'area' => 'Numancia',
                'zip_code' => 5604,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            66 => 
            array (
                'id' => 67,
                'city_id' => 70,
                'area' => 'Tangalan',
                'zip_code' => 5612,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            67 => 
            array (
                'id' => 68,
                'city_id' => 71,
                'area' => 'Legazpi City',
                'zip_code' => 4500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            68 => 
            array (
                'id' => 69,
                'city_id' => 72,
                'area' => 'Ligao City',
                'zip_code' => 4504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            69 => 
            array (
                'id' => 70,
                'city_id' => 73,
                'area' => 'Tabaco City',
                'zip_code' => 4511,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            70 => 
            array (
                'id' => 71,
                'city_id' => 74,
                'area' => 'Bacacay',
                'zip_code' => 4509,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            71 => 
            array (
                'id' => 72,
                'city_id' => 75,
                'area' => 'Camalig',
                'zip_code' => 4502,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            72 => 
            array (
                'id' => 73,
                'city_id' => 77,
                'area' => 'Guinobatan',
                'zip_code' => 4503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            73 => 
            array (
                'id' => 74,
                'city_id' => 78,
                'area' => 'Jovellar',
                'zip_code' => 4515,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            74 => 
            array (
                'id' => 75,
                'city_id' => 79,
                'area' => 'Libon',
                'zip_code' => 4507,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            75 => 
            array (
                'id' => 76,
                'city_id' => 80,
                'area' => 'Malilipot',
                'zip_code' => 4510,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            76 => 
            array (
                'id' => 77,
                'city_id' => 81,
                'area' => 'Malinao',
                'zip_code' => 4512,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            77 => 
            array (
                'id' => 78,
                'city_id' => 82,
                'area' => 'Manito',
                'zip_code' => 4514,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            78 => 
            array (
                'id' => 79,
                'city_id' => 83,
                'area' => 'Oas',
                'zip_code' => 4505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            79 => 
            array (
                'id' => 80,
                'city_id' => 85,
                'area' => 'Polangui',
                'zip_code' => 4506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            80 => 
            array (
                'id' => 81,
                'city_id' => 86,
                'area' => 'Rapu-Rapu',
                'zip_code' => 4517,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            81 => 
            array (
                'id' => 82,
                'city_id' => 87,
                'area' => 'Santo Domingo',
                'zip_code' => 4508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            82 => 
            array (
                'id' => 83,
                'city_id' => 88,
                'area' => 'Tiwi',
                'zip_code' => 4513,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            83 => 
            array (
                'id' => 84,
                'city_id' => 89,
                'area' => 'Anini-y',
                'zip_code' => 5717,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            84 => 
            array (
                'id' => 85,
                'city_id' => 90,
                'area' => 'Barbaza',
                'zip_code' => 5706,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            85 => 
            array (
                'id' => 86,
                'city_id' => 91,
                'area' => 'Belison',
                'zip_code' => 5701,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            86 => 
            array (
                'id' => 87,
                'city_id' => 92,
                'area' => 'Bugasong',
                'zip_code' => 5704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            87 => 
            array (
                'id' => 88,
                'city_id' => 93,
                'area' => 'Caluya',
                'zip_code' => 5711,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            88 => 
            array (
                'id' => 89,
                'city_id' => 94,
                'area' => 'Culasi',
                'zip_code' => 5708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            89 => 
            array (
                'id' => 90,
                'city_id' => 95,
                'area' => 'Hamtic',
                'zip_code' => 5715,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            90 => 
            array (
                'id' => 91,
                'city_id' => 96,
                'area' => 'Laua-an',
                'zip_code' => 5705,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            91 => 
            array (
                'id' => 92,
                'city_id' => 97,
                'area' => 'Libertad',
                'zip_code' => 5710,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            92 => 
            array (
                'id' => 93,
                'city_id' => 98,
                'area' => 'Pandan',
                'zip_code' => 5712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            93 => 
            array (
                'id' => 94,
                'city_id' => 99,
                'area' => 'Patnongon',
                'zip_code' => 5702,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            94 => 
            array (
                'id' => 95,
                'city_id' => 100,
                'area' => 'San Jose',
                'zip_code' => 5700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            95 => 
            array (
                'id' => 96,
                'city_id' => 101,
                'area' => 'San Remigio',
                'zip_code' => 5714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            96 => 
            array (
                'id' => 97,
                'city_id' => 102,
                'area' => 'Sebaste',
                'zip_code' => 5709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            97 => 
            array (
                'id' => 98,
                'city_id' => 103,
                'area' => 'Sibalom',
                'zip_code' => 5713,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            98 => 
            array (
                'id' => 99,
                'city_id' => 104,
                'area' => 'Tibiao',
                'zip_code' => 5707,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            99 => 
            array (
                'id' => 100,
                'city_id' => 106,
                'area' => 'Valderrama',
                'zip_code' => 5703,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            100 => 
            array (
                'id' => 101,
                'city_id' => 108,
                'area' => 'Conner',
                'zip_code' => 3807,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            101 => 
            array (
                'id' => 102,
                'city_id' => 109,
                'area' => 'Flora',
                'zip_code' => 3810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            102 => 
            array (
                'id' => 103,
                'city_id' => 110,
                'area' => 'Kabugao',
                'zip_code' => 3809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            103 => 
            array (
                'id' => 104,
                'city_id' => 111,
                'area' => 'Luna',
                'zip_code' => 3813,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            104 => 
            array (
                'id' => 105,
                'city_id' => 112,
                'area' => 'Pudtol',
                'zip_code' => 3812,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            105 => 
            array (
                'id' => 106,
                'city_id' => 113,
                'area' => 'Santa Marcela',
                'zip_code' => 3811,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            106 => 
            array (
                'id' => 107,
                'city_id' => 114,
                'area' => 'Baler',
                'zip_code' => 3200,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            107 => 
            array (
                'id' => 108,
                'city_id' => 115,
                'area' => 'Casiguran',
                'zip_code' => 3204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            108 => 
            array (
                'id' => 109,
                'city_id' => 116,
                'area' => 'Dilasag',
                'zip_code' => 3205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            109 => 
            array (
                'id' => 110,
                'city_id' => 117,
                'area' => 'Dinalungan',
                'zip_code' => 3206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            110 => 
            array (
                'id' => 111,
                'city_id' => 118,
                'area' => 'Dingalan',
                'zip_code' => 3207,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            111 => 
            array (
                'id' => 112,
                'city_id' => 119,
                'area' => 'Dipaculao',
                'zip_code' => 3203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            112 => 
            array (
                'id' => 113,
                'city_id' => 120,
                'area' => 'Maria Aurora',
                'zip_code' => 3202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            113 => 
            array (
                'id' => 114,
                'city_id' => 121,
                'area' => 'San Luis',
                'zip_code' => 3201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            114 => 
            array (
                'id' => 115,
                'city_id' => 122,
                'area' => 'Isabela City',
                'zip_code' => 7300,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            115 => 
            array (
                'id' => 116,
                'city_id' => 128,
                'area' => 'Lantawan',
                'zip_code' => 7301,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            116 => 
            array (
                'id' => 117,
                'city_id' => 129,
                'area' => 'Maluso',
                'zip_code' => 7303,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            117 => 
            array (
                'id' => 118,
                'city_id' => 130,
                'area' => 'Sumisip',
                'zip_code' => 7305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            118 => 
            array (
                'id' => 119,
                'city_id' => 132,
                'area' => 'Tipo-Tipo',
                'zip_code' => 7304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            119 => 
            array (
                'id' => 120,
                'city_id' => 133,
                'area' => 'Tuburan',
                'zip_code' => 7306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            120 => 
            array (
                'id' => 121,
                'city_id' => 135,
                'area' => 'Balanga City',
                'zip_code' => 2100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            121 => 
            array (
                'id' => 122,
                'city_id' => 136,
                'area' => 'Abucay',
                'zip_code' => 2114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            122 => 
            array (
                'id' => 123,
                'city_id' => 137,
                'area' => 'Bagac',
                'zip_code' => 2107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            123 => 
            array (
                'id' => 124,
                'city_id' => 138,
                'area' => 'Dinalupihan',
                'zip_code' => 2110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            124 => 
            array (
                'id' => 125,
                'city_id' => 139,
                'area' => 'Hermosa',
                'zip_code' => 2111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            125 => 
            array (
                'id' => 126,
                'city_id' => 140,
                'area' => 'Limay',
                'zip_code' => 2103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            126 => 
            array (
                'id' => 127,
                'city_id' => 141,
                'area' => 'Mariveles',
                'zip_code' => 2105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            127 => 
            array (
                'id' => 128,
                'city_id' => 142,
                'area' => 'Morong',
                'zip_code' => 2108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            128 => 
            array (
                'id' => 129,
                'city_id' => 143,
                'area' => 'Orani',
                'zip_code' => 2112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            129 => 
            array (
                'id' => 130,
                'city_id' => 144,
                'area' => 'Orion',
                'zip_code' => 2102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            130 => 
            array (
                'id' => 131,
                'city_id' => 145,
                'area' => 'Pilar',
                'zip_code' => 2101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            131 => 
            array (
                'id' => 132,
                'city_id' => 146,
                'area' => 'Samal',
                'zip_code' => 2113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            132 => 
            array (
                'id' => 133,
                'city_id' => 147,
                'area' => 'Basco',
                'zip_code' => 3900,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            133 => 
            array (
                'id' => 134,
                'city_id' => 148,
                'area' => 'Itbayat',
                'zip_code' => 3905,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            134 => 
            array (
                'id' => 135,
                'city_id' => 149,
                'area' => 'Ivana',
                'zip_code' => 3902,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            135 => 
            array (
                'id' => 136,
                'city_id' => 150,
                'area' => 'Mahatao',
                'zip_code' => 3901,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            136 => 
            array (
                'id' => 137,
                'city_id' => 151,
                'area' => 'Sabtang',
                'zip_code' => 3904,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            137 => 
            array (
                'id' => 138,
                'city_id' => 152,
                'area' => 'Uyugan',
                'zip_code' => 3903,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            138 => 
            array (
                'id' => 139,
                'city_id' => 153,
                'area' => 'Batangas City',
                'zip_code' => 4200,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            139 => 
            array (
                'id' => 140,
                'city_id' => 154,
                'area' => 'Lipa City',
                'zip_code' => 4217,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            140 => 
            array (
                'id' => 141,
                'city_id' => 155,
                'area' => 'Tanauan City',
                'zip_code' => 4232,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            141 => 
            array (
                'id' => 142,
                'city_id' => 156,
                'area' => 'Agoncillo',
                'zip_code' => 4211,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            142 => 
            array (
                'id' => 143,
                'city_id' => 157,
                'area' => 'Alitagtag',
                'zip_code' => 4205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            143 => 
            array (
                'id' => 144,
                'city_id' => 158,
                'area' => 'Balayan',
                'zip_code' => 4213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            144 => 
            array (
                'id' => 145,
                'city_id' => 159,
                'area' => 'Balete',
                'zip_code' => 4219,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            145 => 
            array (
                'id' => 146,
                'city_id' => 160,
                'area' => 'Bauan',
                'zip_code' => 4201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            146 => 
            array (
                'id' => 147,
                'city_id' => 161,
                'area' => 'Calaca',
                'zip_code' => 4212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            147 => 
            array (
                'id' => 148,
                'city_id' => 163,
                'area' => 'Cuenca',
                'zip_code' => 4222,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            148 => 
            array (
                'id' => 149,
                'city_id' => 164,
                'area' => 'Ibaan',
                'zip_code' => 4230,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            149 => 
            array (
                'id' => 150,
                'city_id' => 166,
                'area' => 'Lemery',
                'zip_code' => 4209,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            150 => 
            array (
                'id' => 151,
                'city_id' => 169,
                'area' => 'Mabini',
                'zip_code' => 4202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            151 => 
            array (
                'id' => 152,
                'city_id' => 170,
                'area' => 'Malvar',
                'zip_code' => 4233,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            152 => 
            array (
                'id' => 153,
                'city_id' => 171,
                'area' => 'Mataas na Kahoy',
                'zip_code' => 4223,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            153 => 
            array (
                'id' => 154,
                'city_id' => 173,
                'area' => 'Padre Garcia',
                'zip_code' => 4224,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            154 => 
            array (
                'id' => 155,
                'city_id' => 174,
                'area' => 'Rosario',
                'zip_code' => 4225,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            155 => 
            array (
                'id' => 156,
                'city_id' => 175,
                'area' => 'San Jose',
                'zip_code' => 4227,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            156 => 
            array (
                'id' => 157,
                'city_id' => 176,
                'area' => 'San Juan',
                'zip_code' => 4226,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            157 => 
            array (
                'id' => 158,
                'city_id' => 177,
                'area' => 'San Luis',
                'zip_code' => 4210,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            158 => 
            array (
                'id' => 159,
                'city_id' => 178,
                'area' => 'San Nicolas',
                'zip_code' => 4207,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            159 => 
            array (
                'id' => 160,
                'city_id' => 179,
                'area' => 'San Pascual',
                'zip_code' => 4204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            160 => 
            array (
                'id' => 161,
                'city_id' => 180,
                'area' => 'Santa Teresita',
                'zip_code' => 4206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            161 => 
            array (
                'id' => 162,
                'city_id' => 181,
                'area' => 'Santo Tomas',
                'zip_code' => 4234,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            162 => 
            array (
                'id' => 163,
                'city_id' => 182,
                'area' => 'Taal',
                'zip_code' => 4208,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            163 => 
            array (
                'id' => 164,
                'city_id' => 183,
                'area' => 'Talisay',
                'zip_code' => 4220,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            164 => 
            array (
                'id' => 165,
                'city_id' => 184,
                'area' => 'Taysan',
                'zip_code' => 4228,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            165 => 
            array (
                'id' => 166,
                'city_id' => 185,
                'area' => 'Tingloy',
                'zip_code' => 4203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            166 => 
            array (
                'id' => 167,
                'city_id' => 186,
                'area' => 'Tuy',
                'zip_code' => 4214,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            167 => 
            array (
                'id' => 168,
                'city_id' => 187,
                'area' => 'Baguio City',
                'zip_code' => 2600,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            168 => 
            array (
                'id' => 169,
                'city_id' => 188,
                'area' => 'Atok',
                'zip_code' => 2612,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            169 => 
            array (
                'id' => 170,
                'city_id' => 189,
                'area' => 'Bakun',
                'zip_code' => 2610,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            170 => 
            array (
                'id' => 171,
                'city_id' => 190,
                'area' => 'Bokod',
                'zip_code' => 2605,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            171 => 
            array (
                'id' => 172,
                'city_id' => 191,
                'area' => 'Buguias',
                'zip_code' => 2607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            172 => 
            array (
                'id' => 173,
                'city_id' => 192,
                'area' => 'Itogon',
                'zip_code' => 2604,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            173 => 
            array (
                'id' => 174,
                'city_id' => 193,
                'area' => 'Kabayan',
                'zip_code' => 2606,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            174 => 
            array (
                'id' => 175,
                'city_id' => 194,
                'area' => 'Kapangan',
                'zip_code' => 2613,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            175 => 
            array (
                'id' => 176,
                'city_id' => 195,
                'area' => 'Kibungan',
                'zip_code' => 2611,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            176 => 
            array (
                'id' => 177,
                'city_id' => 197,
                'area' => 'Mankayan',
                'zip_code' => 2608,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            177 => 
            array (
                'id' => 178,
                'city_id' => 198,
                'area' => 'Sablan',
                'zip_code' => 2614,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            178 => 
            array (
                'id' => 179,
                'city_id' => 200,
                'area' => 'Tublay',
                'zip_code' => 2615,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            179 => 
            array (
                'id' => 180,
                'city_id' => 201,
                'area' => 'Almeria',
                'zip_code' => 6544,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            180 => 
            array (
                'id' => 181,
                'city_id' => 202,
                'area' => 'Biliran',
                'zip_code' => 6549,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            181 => 
            array (
                'id' => 182,
                'city_id' => 203,
                'area' => 'Cabucgayan',
                'zip_code' => 6550,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            182 => 
            array (
                'id' => 183,
                'city_id' => 204,
                'area' => 'Caibiran',
                'zip_code' => 6548,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            183 => 
            array (
                'id' => 184,
                'city_id' => 205,
                'area' => 'Culaba',
                'zip_code' => 6547,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            184 => 
            array (
                'id' => 185,
                'city_id' => 206,
                'area' => 'Kawayan',
                'zip_code' => 6545,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            185 => 
            array (
                'id' => 186,
                'city_id' => 207,
                'area' => 'Maripipi',
                'zip_code' => 6546,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            186 => 
            array (
                'id' => 187,
                'city_id' => 208,
                'area' => 'Naval',
                'zip_code' => 6543,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            187 => 
            array (
                'id' => 188,
                'city_id' => 209,
                'area' => 'Tagbilaran City',
                'zip_code' => 6300,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            188 => 
            array (
                'id' => 189,
                'city_id' => 210,
                'area' => 'Alburquerque',
                'zip_code' => 6302,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            189 => 
            array (
                'id' => 190,
                'city_id' => 211,
                'area' => 'Alicia',
                'zip_code' => 6314,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            190 => 
            array (
                'id' => 191,
                'city_id' => 212,
                'area' => 'Anda',
                'zip_code' => 6311,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            191 => 
            array (
                'id' => 192,
                'city_id' => 213,
                'area' => 'Antequera',
                'zip_code' => 6335,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            192 => 
            array (
                'id' => 193,
                'city_id' => 214,
                'area' => 'Baclayon',
                'zip_code' => 6301,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            193 => 
            array (
                'id' => 194,
                'city_id' => 215,
                'area' => 'Balilihan',
                'zip_code' => 6342,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            194 => 
            array (
                'id' => 195,
                'city_id' => 216,
                'area' => 'Batuan',
                'zip_code' => 6318,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            195 => 
            array (
                'id' => 196,
                'city_id' => 217,
                'area' => 'Bien Unido',
                'zip_code' => 6326,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            196 => 
            array (
                'id' => 197,
                'city_id' => 218,
                'area' => 'Bilar',
                'zip_code' => 6317,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            197 => 
            array (
                'id' => 198,
                'city_id' => 219,
                'area' => 'Buenavista',
                'zip_code' => 6333,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            198 => 
            array (
                'id' => 199,
                'city_id' => 220,
                'area' => 'Calape',
                'zip_code' => 6328,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            199 => 
            array (
                'id' => 200,
                'city_id' => 221,
                'area' => 'Candijay',
                'zip_code' => 6312,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            200 => 
            array (
                'id' => 201,
                'city_id' => 222,
                'area' => 'Carmen',
                'zip_code' => 6319,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            201 => 
            array (
                'id' => 202,
                'city_id' => 223,
                'area' => 'Catigbian',
                'zip_code' => 6343,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            202 => 
            array (
                'id' => 203,
                'city_id' => 224,
                'area' => 'Clarin',
                'zip_code' => 6330,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            203 => 
            array (
                'id' => 204,
                'city_id' => 225,
                'area' => 'Corella',
                'zip_code' => 6337,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            204 => 
            array (
                'id' => 205,
                'city_id' => 226,
                'area' => 'Cortes',
                'zip_code' => 6341,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            205 => 
            array (
                'id' => 206,
                'city_id' => 227,
                'area' => 'Dagohoy',
                'zip_code' => 6322,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            206 => 
            array (
                'id' => 207,
                'city_id' => 228,
                'area' => 'Danao',
                'zip_code' => 6344,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            207 => 
            array (
                'id' => 208,
                'city_id' => 229,
                'area' => 'Dauis',
                'zip_code' => 6339,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            208 => 
            array (
                'id' => 209,
                'city_id' => 230,
                'area' => 'Dimiao',
                'zip_code' => 6305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            209 => 
            array (
                'id' => 210,
                'city_id' => 231,
                'area' => 'Duero',
                'zip_code' => 6309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            210 => 
            array (
                'id' => 211,
                'city_id' => 232,
                'area' => 'Garcia Hernandez',
                'zip_code' => 6307,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            211 => 
            array (
                'id' => 212,
                'city_id' => 234,
                'area' => 'Guindulman',
                'zip_code' => 6310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            212 => 
            array (
                'id' => 213,
                'city_id' => 235,
                'area' => 'Inabanga',
                'zip_code' => 6332,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            213 => 
            array (
                'id' => 214,
                'city_id' => 236,
                'area' => 'Jagna',
                'zip_code' => 6308,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            214 => 
            array (
                'id' => 215,
                'city_id' => 237,
                'area' => 'Lila',
                'zip_code' => 6304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            215 => 
            array (
                'id' => 216,
                'city_id' => 238,
                'area' => 'Loay',
                'zip_code' => 6202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            216 => 
            array (
                'id' => 217,
                'city_id' => 239,
                'area' => 'Loboc',
                'zip_code' => 6316,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            217 => 
            array (
                'id' => 218,
                'city_id' => 240,
                'area' => 'Loon',
                'zip_code' => 6327,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            218 => 
            array (
                'id' => 219,
                'city_id' => 241,
                'area' => 'Mabini',
                'zip_code' => 6313,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            219 => 
            array (
                'id' => 220,
                'city_id' => 242,
                'area' => 'Maribojoc',
                'zip_code' => 6336,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            220 => 
            array (
                'id' => 221,
                'city_id' => 243,
                'area' => 'Panglao',
                'zip_code' => 6340,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            221 => 
            array (
                'id' => 222,
                'city_id' => 244,
                'area' => 'Pilar',
                'zip_code' => 6321,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            222 => 
            array (
                'id' => 223,
                'city_id' => 246,
                'area' => 'Sagbayan',
                'zip_code' => 6331,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            223 => 
            array (
                'id' => 224,
                'city_id' => 247,
                'area' => 'San Isidro',
                'zip_code' => 6345,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            224 => 
            array (
                'id' => 225,
                'city_id' => 248,
                'area' => 'San Miguel',
                'zip_code' => 6323,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            225 => 
            array (
                'id' => 226,
                'city_id' => 249,
                'area' => 'Sevilla',
                'zip_code' => 6347,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            226 => 
            array (
                'id' => 227,
                'city_id' => 250,
                'area' => 'Sierra Bullones',
                'zip_code' => 6320,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            227 => 
            array (
                'id' => 228,
                'city_id' => 251,
                'area' => 'Sikatuna',
                'zip_code' => 6338,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            228 => 
            array (
                'id' => 229,
                'city_id' => 252,
                'area' => 'Talibon',
                'zip_code' => 6325,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            229 => 
            array (
                'id' => 230,
                'city_id' => 253,
                'area' => 'Trinidad',
                'zip_code' => 6324,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            230 => 
            array (
                'id' => 231,
                'city_id' => 254,
                'area' => 'Tubigon',
                'zip_code' => 6329,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            231 => 
            array (
                'id' => 232,
                'city_id' => 255,
                'area' => 'Ubay',
                'zip_code' => 6315,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            232 => 
            array (
                'id' => 233,
                'city_id' => 256,
                'area' => 'Valencia',
                'zip_code' => 6306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            233 => 
            array (
                'id' => 234,
                'city_id' => 257,
                'area' => 'Malaybalay City',
                'zip_code' => 8700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            234 => 
            array (
                'id' => 235,
                'city_id' => 258,
                'area' => 'Valencia City',
                'zip_code' => 8709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            235 => 
            array (
                'id' => 236,
                'city_id' => 259,
                'area' => 'Baungon',
                'zip_code' => 8707,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            236 => 
            array (
                'id' => 237,
                'city_id' => 260,
                'area' => 'Cabanglasan',
                'zip_code' => 8723,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            237 => 
            array (
                'id' => 238,
                'city_id' => 261,
                'area' => 'Damulog',
                'zip_code' => 8721,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            238 => 
            array (
                'id' => 239,
                'city_id' => 262,
                'area' => 'Dangcagan',
                'zip_code' => 8719,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            239 => 
            array (
                'id' => 240,
                'city_id' => 263,
                'area' => 'Don Carlos',
                'zip_code' => 8712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            240 => 
            array (
                'id' => 241,
                'city_id' => 265,
                'area' => 'Kadingilan',
                'zip_code' => 8713,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            241 => 
            array (
                'id' => 242,
                'city_id' => 266,
                'area' => 'Kalilangan',
                'zip_code' => 8718,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            242 => 
            array (
                'id' => 243,
                'city_id' => 267,
                'area' => 'Kibawe',
                'zip_code' => 8720,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            243 => 
            array (
                'id' => 244,
                'city_id' => 268,
                'area' => 'Kitaotao',
                'zip_code' => 8716,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            244 => 
            array (
                'id' => 245,
                'city_id' => 269,
                'area' => 'Lantapan',
                'zip_code' => 8722,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            245 => 
            array (
                'id' => 246,
                'city_id' => 270,
                'area' => 'Libona',
                'zip_code' => 8706,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            246 => 
            array (
                'id' => 247,
                'city_id' => 271,
                'area' => 'Malitbog',
                'zip_code' => 8704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            247 => 
            array (
                'id' => 248,
                'city_id' => 272,
                'area' => 'Manolo Fortich',
                'zip_code' => 8703,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            248 => 
            array (
                'id' => 249,
                'city_id' => 273,
                'area' => 'Maramag',
                'zip_code' => 8714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            249 => 
            array (
                'id' => 250,
                'city_id' => 274,
                'area' => 'Pangantucan',
                'zip_code' => 8717,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            250 => 
            array (
                'id' => 251,
                'city_id' => 275,
                'area' => 'Quezon',
                'zip_code' => 8715,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            251 => 
            array (
                'id' => 252,
                'city_id' => 276,
                'area' => 'San Fernando',
                'zip_code' => 8711,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            252 => 
            array (
                'id' => 253,
                'city_id' => 277,
                'area' => 'Sumilao',
                'zip_code' => 8701,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            253 => 
            array (
                'id' => 254,
                'city_id' => 278,
                'area' => 'Talakag',
                'zip_code' => 8708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            254 => 
            array (
                'id' => 255,
                'city_id' => 279,
                'area' => 'Malolos City',
                'zip_code' => 3000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            255 => 
            array (
                'id' => 256,
                'city_id' => 280,
                'area' => 'Meycauayan City',
                'zip_code' => 3020,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            256 => 
            array (
                'id' => 257,
                'city_id' => 281,
                'area' => 'San Jose del Monte City',
                'zip_code' => 3023,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            257 => 
            array (
                'id' => 258,
                'city_id' => 282,
                'area' => 'Angat',
                'zip_code' => 3012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            258 => 
            array (
                'id' => 259,
                'city_id' => 284,
                'area' => 'Baliuag',
                'zip_code' => 3006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            259 => 
            array (
                'id' => 260,
                'city_id' => 285,
                'area' => 'Bocaue',
                'zip_code' => 3018,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            260 => 
            array (
                'id' => 261,
                'city_id' => 286,
                'area' => 'Bulacan',
                'zip_code' => 3017,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            261 => 
            array (
                'id' => 262,
                'city_id' => 287,
                'area' => 'Bustos',
                'zip_code' => 3007,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            262 => 
            array (
                'id' => 263,
                'city_id' => 288,
                'area' => 'Calumpit',
                'zip_code' => 3003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            263 => 
            array (
                'id' => 264,
                'city_id' => 290,
                'area' => 'Guiguinto',
                'zip_code' => 3015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            264 => 
            array (
                'id' => 265,
                'city_id' => 291,
                'area' => 'Hagonoy',
                'zip_code' => 3002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            265 => 
            array (
                'id' => 266,
                'city_id' => 292,
                'area' => 'Marilao',
                'zip_code' => 3019,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            266 => 
            array (
                'id' => 267,
                'city_id' => 293,
                'area' => 'Norzagaray',
                'zip_code' => 3013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            267 => 
            array (
                'id' => 268,
                'city_id' => 294,
                'area' => 'Obando',
                'zip_code' => 3021,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            268 => 
            array (
                'id' => 269,
                'city_id' => 295,
                'area' => 'Pandi',
                'zip_code' => 3014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            269 => 
            array (
                'id' => 270,
                'city_id' => 296,
                'area' => 'Paombong',
                'zip_code' => 3001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            270 => 
            array (
                'id' => 271,
                'city_id' => 297,
                'area' => 'Plaridel',
                'zip_code' => 3004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            271 => 
            array (
                'id' => 272,
                'city_id' => 298,
                'area' => 'Pulilan',
                'zip_code' => 3005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            272 => 
            array (
                'id' => 273,
                'city_id' => 299,
                'area' => 'San Ildefonso',
                'zip_code' => 3010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            273 => 
            array (
                'id' => 274,
                'city_id' => 300,
                'area' => 'San Miguel',
                'zip_code' => 3011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            274 => 
            array (
                'id' => 275,
                'city_id' => 301,
                'area' => 'San Rafael',
                'zip_code' => 3008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            275 => 
            array (
                'id' => 276,
                'city_id' => 302,
                'area' => 'Santa Maria',
                'zip_code' => 3022,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            276 => 
            array (
                'id' => 277,
                'city_id' => 303,
                'area' => 'Tuguegarao City',
                'zip_code' => 3500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            277 => 
            array (
                'id' => 278,
                'city_id' => 304,
                'area' => 'Abulug',
                'zip_code' => 3517,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            278 => 
            array (
                'id' => 279,
                'city_id' => 305,
                'area' => 'Alcala',
                'zip_code' => 3507,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            279 => 
            array (
                'id' => 280,
                'city_id' => 306,
                'area' => 'Allacapan',
                'zip_code' => 3523,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            280 => 
            array (
                'id' => 281,
                'city_id' => 307,
                'area' => 'Amulung',
                'zip_code' => 3505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            281 => 
            array (
                'id' => 282,
                'city_id' => 308,
                'area' => 'Aparri',
                'zip_code' => 3515,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            282 => 
            array (
                'id' => 283,
                'city_id' => 309,
                'area' => 'Baggao',
                'zip_code' => 3506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            283 => 
            array (
                'id' => 284,
                'city_id' => 310,
                'area' => 'Ballesteros',
                'zip_code' => 3516,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            284 => 
            array (
                'id' => 285,
                'city_id' => 311,
                'area' => 'Buguey',
                'zip_code' => 3511,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            285 => 
            array (
                'id' => 286,
                'city_id' => 312,
                'area' => 'Calayan',
                'zip_code' => 3520,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            286 => 
            array (
                'id' => 287,
                'city_id' => 313,
                'area' => 'Camalaniugan',
                'zip_code' => 3510,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            287 => 
            array (
                'id' => 288,
                'city_id' => 314,
                'area' => 'Claveria',
                'zip_code' => 3519,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            288 => 
            array (
                'id' => 289,
                'city_id' => 315,
                'area' => 'Enrile',
                'zip_code' => 3501,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            289 => 
            array (
                'id' => 290,
                'city_id' => 316,
                'area' => 'Gattaran',
                'zip_code' => 3508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            290 => 
            array (
                'id' => 291,
                'city_id' => 317,
                'area' => 'Gonzaga',
                'zip_code' => 3513,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            291 => 
            array (
                'id' => 292,
                'city_id' => 318,
                'area' => 'Iguig',
                'zip_code' => 3504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            292 => 
            array (
                'id' => 293,
                'city_id' => 320,
                'area' => 'Lasam',
                'zip_code' => 3524,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            293 => 
            array (
                'id' => 294,
                'city_id' => 321,
                'area' => 'Pamplona',
                'zip_code' => 3522,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            294 => 
            array (
                'id' => 295,
                'city_id' => 323,
                'area' => 'Piat',
                'zip_code' => 3527,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            295 => 
            array (
                'id' => 296,
                'city_id' => 324,
                'area' => 'Rizal',
                'zip_code' => 3526,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            296 => 
            array (
                'id' => 297,
                'city_id' => 325,
                'area' => 'Sanchez-Mira',
                'zip_code' => 3518,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            297 => 
            array (
                'id' => 298,
                'city_id' => 326,
                'area' => 'Santa Ana',
                'zip_code' => 3514,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            298 => 
            array (
                'id' => 299,
                'city_id' => 327,
                'area' => 'Santa Praxedes',
                'zip_code' => 3521,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            299 => 
            array (
                'id' => 300,
                'city_id' => 328,
                'area' => 'Santa Teresita',
                'zip_code' => 3512,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            300 => 
            array (
                'id' => 301,
                'city_id' => 330,
                'area' => 'Solana',
                'zip_code' => 3503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            301 => 
            array (
                'id' => 302,
                'city_id' => 331,
                'area' => 'Tuao',
                'zip_code' => 3528,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            302 => 
            array (
                'id' => 303,
                'city_id' => 332,
                'area' => 'Basud',
                'zip_code' => 4608,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            303 => 
            array (
                'id' => 304,
                'city_id' => 333,
                'area' => 'Capalonga',
                'zip_code' => 4607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            304 => 
            array (
                'id' => 305,
                'city_id' => 334,
                'area' => 'Daet',
                'zip_code' => 4600,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            305 => 
            array (
                'id' => 306,
                'city_id' => 335,
                'area' => 'Jose Panganiban',
                'zip_code' => 4606,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            306 => 
            array (
                'id' => 307,
                'city_id' => 336,
                'area' => 'Labo',
                'zip_code' => 4604,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            307 => 
            array (
                'id' => 308,
                'city_id' => 337,
                'area' => 'Mercedes',
                'zip_code' => 4601,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            308 => 
            array (
                'id' => 309,
                'city_id' => 338,
                'area' => 'Paracale',
                'zip_code' => 4605,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            309 => 
            array (
                'id' => 310,
                'city_id' => 340,
                'area' => 'San Vicente',
                'zip_code' => 4609,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            310 => 
            array (
                'id' => 311,
                'city_id' => 341,
                'area' => 'Santa Elena',
                'zip_code' => 4611,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            311 => 
            array (
                'id' => 312,
                'city_id' => 342,
                'area' => 'Talisay',
                'zip_code' => 4602,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            312 => 
            array (
                'id' => 313,
                'city_id' => 343,
                'area' => 'Vinzons',
                'zip_code' => 4603,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            313 => 
            array (
                'id' => 314,
                'city_id' => 344,
                'area' => 'Iriga City',
                'zip_code' => 4431,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            314 => 
            array (
                'id' => 315,
                'city_id' => 345,
                'area' => 'Naga City',
                'zip_code' => 4400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            315 => 
            array (
                'id' => 316,
                'city_id' => 346,
                'area' => 'Baao',
                'zip_code' => 4432,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            316 => 
            array (
                'id' => 317,
                'city_id' => 347,
                'area' => 'Balatan',
                'zip_code' => 4436,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            317 => 
            array (
                'id' => 318,
                'city_id' => 348,
                'area' => 'Bato',
                'zip_code' => 4435,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            318 => 
            array (
                'id' => 319,
                'city_id' => 349,
                'area' => 'Bombon',
                'zip_code' => 4404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            319 => 
            array (
                'id' => 320,
                'city_id' => 350,
                'area' => 'Buhi',
                'zip_code' => 4433,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            320 => 
            array (
                'id' => 321,
                'city_id' => 351,
                'area' => 'Bula',
                'zip_code' => 4430,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            321 => 
            array (
                'id' => 322,
                'city_id' => 352,
                'area' => 'Cabusao',
                'zip_code' => 4406,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            322 => 
            array (
                'id' => 323,
                'city_id' => 353,
                'area' => 'Calabanga',
                'zip_code' => 4405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            323 => 
            array (
                'id' => 324,
                'city_id' => 354,
                'area' => 'Camaligan',
                'zip_code' => 4401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            324 => 
            array (
                'id' => 325,
                'city_id' => 355,
                'area' => 'Canaman',
                'zip_code' => 4402,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            325 => 
            array (
                'id' => 326,
                'city_id' => 356,
                'area' => 'Caramoan',
                'zip_code' => 4429,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            326 => 
            array (
                'id' => 327,
                'city_id' => 357,
                'area' => 'Del Gallego',
                'zip_code' => 4411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            327 => 
            array (
                'id' => 328,
                'city_id' => 358,
                'area' => 'Gainza',
                'zip_code' => 4412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            328 => 
            array (
                'id' => 329,
                'city_id' => 359,
                'area' => 'Garchitorena',
                'zip_code' => 4428,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            329 => 
            array (
                'id' => 330,
                'city_id' => 360,
                'area' => 'Goa',
                'zip_code' => 4422,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            330 => 
            array (
                'id' => 331,
                'city_id' => 361,
                'area' => 'Lagonoy',
                'zip_code' => 4425,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            331 => 
            array (
                'id' => 332,
                'city_id' => 362,
                'area' => 'Libmanan',
                'zip_code' => 4407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            332 => 
            array (
                'id' => 333,
                'city_id' => 363,
                'area' => 'Lupi',
                'zip_code' => 4409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            333 => 
            array (
                'id' => 334,
                'city_id' => 364,
                'area' => 'Magarao',
                'zip_code' => 4403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            334 => 
            array (
                'id' => 335,
                'city_id' => 365,
                'area' => 'Milaor',
                'zip_code' => 4413,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            335 => 
            array (
                'id' => 336,
                'city_id' => 366,
                'area' => 'Minalabac',
                'zip_code' => 4414,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            336 => 
            array (
                'id' => 337,
                'city_id' => 367,
                'area' => 'Nabua',
                'zip_code' => 4434,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            337 => 
            array (
                'id' => 338,
                'city_id' => 368,
                'area' => 'Ocampo',
                'zip_code' => 4419,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            338 => 
            array (
                'id' => 339,
                'city_id' => 369,
                'area' => 'Pamplona',
                'zip_code' => 4416,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            339 => 
            array (
                'id' => 340,
                'city_id' => 370,
                'area' => 'Pasacao',
                'zip_code' => 4417,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            340 => 
            array (
                'id' => 341,
                'city_id' => 371,
                'area' => 'Pili',
                'zip_code' => 4418,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            341 => 
            array (
                'id' => 342,
                'city_id' => 372,
                'area' => 'Presentacion',
                'zip_code' => 4424,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            342 => 
            array (
                'id' => 343,
                'city_id' => 373,
                'area' => 'Ragay',
                'zip_code' => 4410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            343 => 
            array (
                'id' => 344,
                'city_id' => 375,
                'area' => 'San Fernando',
                'zip_code' => 4415,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            344 => 
            array (
                'id' => 345,
                'city_id' => 376,
                'area' => 'San Jose',
                'zip_code' => 4423,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            345 => 
            array (
                'id' => 346,
                'city_id' => 377,
                'area' => 'Sipocot',
                'zip_code' => 4408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            346 => 
            array (
                'id' => 347,
                'city_id' => 378,
                'area' => 'Siruma',
                'zip_code' => 4427,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            347 => 
            array (
                'id' => 348,
                'city_id' => 379,
                'area' => 'Tigaon',
                'zip_code' => 4420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            348 => 
            array (
                'id' => 349,
                'city_id' => 380,
                'area' => 'Tinambac',
                'zip_code' => 4426,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            349 => 
            array (
                'id' => 350,
                'city_id' => 381,
                'area' => 'Catarman',
                'zip_code' => 9104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            350 => 
            array (
                'id' => 351,
                'city_id' => 382,
                'area' => 'Guinsiliban',
                'zip_code' => 9102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            351 => 
            array (
                'id' => 352,
                'city_id' => 383,
                'area' => 'Mahinog',
                'zip_code' => 9101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            352 => 
            array (
                'id' => 353,
                'city_id' => 384,
                'area' => 'Mambajao',
                'zip_code' => 9100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            353 => 
            array (
                'id' => 354,
                'city_id' => 385,
                'area' => 'Sagay',
                'zip_code' => 9103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            354 => 
            array (
                'id' => 355,
                'city_id' => 386,
                'area' => 'Roxas City',
                'zip_code' => 5800,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            355 => 
            array (
                'id' => 356,
                'city_id' => 387,
                'area' => 'Cuartero',
                'zip_code' => 5811,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            356 => 
            array (
                'id' => 357,
                'city_id' => 388,
                'area' => 'Dao',
                'zip_code' => 5810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            357 => 
            array (
                'id' => 358,
                'city_id' => 389,
                'area' => 'Dumalag',
                'zip_code' => 5813,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            358 => 
            array (
                'id' => 359,
                'city_id' => 390,
                'area' => 'Dumarao',
                'zip_code' => 5812,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            359 => 
            array (
                'id' => 360,
                'city_id' => 391,
                'area' => 'Ivisan',
                'zip_code' => 5805,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            360 => 
            array (
                'id' => 361,
                'city_id' => 392,
                'area' => 'Jamindan',
                'zip_code' => 5808,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            361 => 
            array (
                'id' => 362,
                'city_id' => 393,
                'area' => 'Ma-ayon',
                'zip_code' => 5809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            362 => 
            array (
                'id' => 363,
                'city_id' => 394,
                'area' => 'Mambusao',
                'zip_code' => 5807,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            363 => 
            array (
                'id' => 364,
                'city_id' => 395,
                'area' => 'Panay',
                'zip_code' => 5801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            364 => 
            array (
                'id' => 365,
                'city_id' => 396,
                'area' => 'Panitan',
                'zip_code' => 5815,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            365 => 
            array (
                'id' => 366,
                'city_id' => 397,
                'area' => 'Pilar',
                'zip_code' => 5804,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            366 => 
            array (
                'id' => 367,
                'city_id' => 398,
                'area' => 'Pontevedra',
                'zip_code' => 5802,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            367 => 
            array (
                'id' => 368,
                'city_id' => 399,
                'area' => 'President Roxas',
                'zip_code' => 5803,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            368 => 
            array (
                'id' => 369,
                'city_id' => 401,
                'area' => 'Sigma',
                'zip_code' => 5816,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            369 => 
            array (
                'id' => 370,
                'city_id' => 402,
                'area' => 'Tapaz',
                'zip_code' => 5814,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            370 => 
            array (
                'id' => 371,
                'city_id' => 403,
                'area' => 'Bagamanoc',
                'zip_code' => 4807,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            371 => 
            array (
                'id' => 372,
                'city_id' => 404,
                'area' => 'Baras',
                'zip_code' => 4803,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            372 => 
            array (
                'id' => 373,
                'city_id' => 405,
                'area' => 'Bato',
                'zip_code' => 4801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            373 => 
            array (
                'id' => 374,
                'city_id' => 406,
                'area' => 'Caramoran',
                'zip_code' => 4808,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            374 => 
            array (
                'id' => 375,
                'city_id' => 407,
                'area' => 'Gigmoto',
                'zip_code' => 4804,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            375 => 
            array (
                'id' => 376,
                'city_id' => 408,
                'area' => 'Pandan',
                'zip_code' => 4809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            376 => 
            array (
                'id' => 377,
                'city_id' => 409,
                'area' => 'Panganiban',
                'zip_code' => 4806,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            377 => 
            array (
                'id' => 378,
                'city_id' => 410,
                'area' => 'San Andres',
                'zip_code' => 4810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            378 => 
            array (
                'id' => 379,
                'city_id' => 411,
                'area' => 'San Miguel',
                'zip_code' => 4802,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            379 => 
            array (
                'id' => 380,
                'city_id' => 412,
                'area' => 'Viga',
                'zip_code' => 4805,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            380 => 
            array (
                'id' => 381,
                'city_id' => 413,
                'area' => 'Virac',
                'zip_code' => 4800,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            381 => 
            array (
                'id' => 382,
                'city_id' => 414,
                'area' => 'Cavite City',
                'zip_code' => 4100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            382 => 
            array (
                'id' => 383,
                'city_id' => 416,
                'area' => 'Tagaytay City',
                'zip_code' => 4120,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            383 => 
            array (
                'id' => 384,
                'city_id' => 417,
                'area' => 'Trece Martires City',
                'zip_code' => 4109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            384 => 
            array (
                'id' => 385,
                'city_id' => 418,
                'area' => 'Alfonso',
                'zip_code' => 4123,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            385 => 
            array (
                'id' => 386,
                'city_id' => 419,
                'area' => 'Amadeo',
                'zip_code' => 4119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            386 => 
            array (
                'id' => 387,
                'city_id' => 420,
                'area' => 'Bacoor',
                'zip_code' => 4102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            387 => 
            array (
                'id' => 388,
                'city_id' => 421,
                'area' => 'Carmona',
                'zip_code' => 4116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            388 => 
            array (
                'id' => 389,
                'city_id' => 422,
                'area' => 'General Mariano Alvarez',
                'zip_code' => 4117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            389 => 
            array (
                'id' => 390,
                'city_id' => 424,
                'area' => 'General Trias',
                'zip_code' => 4107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            390 => 
            array (
                'id' => 391,
                'city_id' => 425,
                'area' => 'Imus',
                'zip_code' => 4103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            391 => 
            array (
                'id' => 392,
                'city_id' => 426,
                'area' => 'Indang',
                'zip_code' => 4122,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            392 => 
            array (
                'id' => 393,
                'city_id' => 427,
                'area' => 'Kawit',
                'zip_code' => 4104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            393 => 
            array (
                'id' => 394,
                'city_id' => 428,
                'area' => 'Magallanes',
                'zip_code' => 4113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            394 => 
            array (
                'id' => 395,
                'city_id' => 429,
                'area' => 'Maragondon',
                'zip_code' => 4112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            395 => 
            array (
                'id' => 396,
                'city_id' => 431,
                'area' => 'Naic',
                'zip_code' => 4110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            396 => 
            array (
                'id' => 397,
                'city_id' => 432,
                'area' => 'Noveleta',
                'zip_code' => 4105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            397 => 
            array (
                'id' => 398,
                'city_id' => 433,
                'area' => 'Rosario',
                'zip_code' => 4106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            398 => 
            array (
                'id' => 399,
                'city_id' => 434,
                'area' => 'Silang',
                'zip_code' => 4118,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            399 => 
            array (
                'id' => 400,
                'city_id' => 435,
                'area' => 'Tanza',
                'zip_code' => 4108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            400 => 
            array (
                'id' => 401,
                'city_id' => 437,
                'area' => 'Bogo City',
                'zip_code' => 6010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            401 => 
            array (
                'id' => 402,
                'city_id' => 438,
                'area' => 'Cebu City',
                'zip_code' => 6000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            402 => 
            array (
                'id' => 403,
                'city_id' => 439,
                'area' => 'Carcar City',
                'zip_code' => 6019,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            403 => 
            array (
                'id' => 404,
                'city_id' => 440,
                'area' => 'Danao City',
                'zip_code' => 6004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            404 => 
            array (
                'id' => 405,
                'city_id' => 442,
                'area' => 'Mandaue City',
                'zip_code' => 6014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            405 => 
            array (
                'id' => 406,
                'city_id' => 444,
                'area' => 'Talisay City',
                'zip_code' => 6045,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            406 => 
            array (
                'id' => 407,
                'city_id' => 445,
                'area' => 'Toledo City',
                'zip_code' => 6038,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            407 => 
            array (
                'id' => 408,
                'city_id' => 446,
                'area' => 'Alcantara',
                'zip_code' => 6055,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            408 => 
            array (
                'id' => 409,
                'city_id' => 447,
                'area' => 'Alcoy',
                'zip_code' => 6066,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            409 => 
            array (
                'id' => 410,
                'city_id' => 448,
                'area' => 'Alegria',
                'zip_code' => 6077,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            410 => 
            array (
                'id' => 411,
                'city_id' => 449,
                'area' => 'Aloguinsan',
                'zip_code' => 6088,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            411 => 
            array (
                'id' => 412,
                'city_id' => 450,
                'area' => 'Argao',
                'zip_code' => 6099,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            412 => 
            array (
                'id' => 413,
                'city_id' => 451,
                'area' => 'Asturias',
                'zip_code' => 6010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            413 => 
            array (
                'id' => 414,
                'city_id' => 452,
                'area' => 'Badian',
                'zip_code' => 6011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            414 => 
            array (
                'id' => 415,
                'city_id' => 453,
                'area' => 'Balamban',
                'zip_code' => 6041,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            415 => 
            array (
                'id' => 416,
                'city_id' => 454,
                'area' => 'Bantayan',
                'zip_code' => 6052,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            416 => 
            array (
                'id' => 417,
                'city_id' => 455,
                'area' => 'Barili',
                'zip_code' => 6036,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            417 => 
            array (
                'id' => 418,
                'city_id' => 456,
                'area' => 'Boljoon',
                'zip_code' => 6024,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            418 => 
            array (
                'id' => 419,
                'city_id' => 457,
                'area' => 'Borbon',
                'zip_code' => 6008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            419 => 
            array (
                'id' => 420,
                'city_id' => 458,
                'area' => 'Carmen',
                'zip_code' => 6005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            420 => 
            array (
                'id' => 421,
                'city_id' => 459,
                'area' => 'Catmon',
                'zip_code' => 6006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            421 => 
            array (
                'id' => 422,
                'city_id' => 460,
                'area' => 'Compostela',
                'zip_code' => 6003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            422 => 
            array (
                'id' => 423,
                'city_id' => 461,
                'area' => 'Consolacion',
                'zip_code' => 6001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            423 => 
            array (
                'id' => 424,
                'city_id' => 463,
                'area' => 'Daanbantayan',
                'zip_code' => 6013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            424 => 
            array (
                'id' => 425,
                'city_id' => 464,
                'area' => 'Dalaguete',
                'zip_code' => 6022,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            425 => 
            array (
                'id' => 426,
                'city_id' => 465,
                'area' => 'Dumanjug',
                'zip_code' => 6035,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            426 => 
            array (
                'id' => 427,
                'city_id' => 466,
                'area' => 'Ginatilan',
                'zip_code' => 6028,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            427 => 
            array (
                'id' => 428,
                'city_id' => 467,
                'area' => 'Liloan',
                'zip_code' => 6002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            428 => 
            array (
                'id' => 429,
                'city_id' => 468,
                'area' => 'Madridejos',
                'zip_code' => 6053,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            429 => 
            array (
                'id' => 430,
                'city_id' => 469,
                'area' => 'Malabuyoc',
                'zip_code' => 6029,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            430 => 
            array (
                'id' => 431,
                'city_id' => 470,
                'area' => 'Medellin',
                'zip_code' => 6012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            431 => 
            array (
                'id' => 432,
                'city_id' => 471,
                'area' => 'Minglanilla',
                'zip_code' => 6046,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            432 => 
            array (
                'id' => 433,
                'city_id' => 472,
                'area' => 'Moalboal',
                'zip_code' => 6032,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            433 => 
            array (
                'id' => 434,
                'city_id' => 473,
                'area' => 'Oslob',
                'zip_code' => 6025,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            434 => 
            array (
                'id' => 435,
                'city_id' => 474,
                'area' => 'Pilar',
                'zip_code' => 6048,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            435 => 
            array (
                'id' => 436,
                'city_id' => 475,
                'area' => 'Pinamungahan',
                'zip_code' => 6039,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            436 => 
            array (
                'id' => 437,
                'city_id' => 476,
                'area' => 'Poro',
                'zip_code' => 6049,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            437 => 
            array (
                'id' => 438,
                'city_id' => 477,
                'area' => 'Ronda',
                'zip_code' => 6034,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            438 => 
            array (
                'id' => 439,
                'city_id' => 478,
                'area' => 'Samboan',
                'zip_code' => 6027,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            439 => 
            array (
                'id' => 440,
                'city_id' => 479,
                'area' => 'San Fernando',
                'zip_code' => 6018,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            440 => 
            array (
                'id' => 441,
                'city_id' => 480,
                'area' => 'San Francisco',
                'zip_code' => 6050,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            441 => 
            array (
                'id' => 442,
                'city_id' => 481,
                'area' => 'San Remigio',
                'zip_code' => 6011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            442 => 
            array (
                'id' => 443,
                'city_id' => 482,
                'area' => 'Santa Fe',
                'zip_code' => 6047,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            443 => 
            array (
                'id' => 444,
                'city_id' => 483,
                'area' => 'Santander',
                'zip_code' => 6026,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            444 => 
            array (
                'id' => 445,
                'city_id' => 484,
                'area' => 'Sibonga',
                'zip_code' => 6020,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            445 => 
            array (
                'id' => 446,
                'city_id' => 485,
                'area' => 'Sogod',
                'zip_code' => 6007,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            446 => 
            array (
                'id' => 447,
                'city_id' => 486,
                'area' => 'Tabogon',
                'zip_code' => 6009,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            447 => 
            array (
                'id' => 448,
                'city_id' => 487,
                'area' => 'Tabuelan',
                'zip_code' => 6044,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            448 => 
            array (
                'id' => 449,
                'city_id' => 488,
                'area' => 'Tuburan',
                'zip_code' => 6043,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            449 => 
            array (
                'id' => 450,
                'city_id' => 489,
                'area' => 'Tudela',
                'zip_code' => 6051,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            450 => 
            array (
                'id' => 451,
                'city_id' => 490,
                'area' => 'Compostela',
                'zip_code' => 8109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            451 => 
            array (
                'id' => 452,
                'city_id' => 493,
                'area' => 'Maco',
                'zip_code' => 8114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            452 => 
            array (
                'id' => 453,
                'city_id' => 495,
                'area' => 'Mawab',
                'zip_code' => 8108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            453 => 
            array (
                'id' => 454,
                'city_id' => 496,
                'area' => 'Monkayo',
                'zip_code' => 8111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            454 => 
            array (
                'id' => 455,
                'city_id' => 497,
                'area' => 'Montevista',
                'zip_code' => 8107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            455 => 
            array (
                'id' => 456,
                'city_id' => 498,
                'area' => 'Nabunturan',
                'zip_code' => 8106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            456 => 
            array (
                'id' => 457,
                'city_id' => 499,
                'area' => 'New Bataan',
                'zip_code' => 8110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            457 => 
            array (
                'id' => 458,
                'city_id' => 500,
                'area' => 'Pantukan',
                'zip_code' => 8117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            458 => 
            array (
                'id' => 459,
                'city_id' => 501,
                'area' => 'Kidapawan City',
                'zip_code' => 9400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            459 => 
            array (
                'id' => 460,
                'city_id' => 502,
                'area' => 'Alamada',
                'zip_code' => 9413,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            460 => 
            array (
                'id' => 461,
                'city_id' => 503,
                'area' => 'Aleosan',
                'zip_code' => 9415,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            461 => 
            array (
                'id' => 462,
                'city_id' => 504,
                'area' => 'Antipas',
                'zip_code' => 9414,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            462 => 
            array (
                'id' => 463,
                'city_id' => 505,
                'area' => 'Arakan',
                'zip_code' => 9417,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            463 => 
            array (
                'id' => 464,
                'city_id' => 506,
                'area' => 'Banisilan',
                'zip_code' => 9416,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            464 => 
            array (
                'id' => 465,
                'city_id' => 507,
                'area' => 'Carmen',
                'zip_code' => 9408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            465 => 
            array (
                'id' => 466,
                'city_id' => 508,
                'area' => 'Kabacan',
                'zip_code' => 9407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            466 => 
            array (
                'id' => 467,
                'city_id' => 509,
                'area' => 'Libungan',
                'zip_code' => 9411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            467 => 
            array (
                'id' => 468,
                'city_id' => 511,
                'area' => 'Magpet',
                'zip_code' => 9404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            468 => 
            array (
                'id' => 469,
                'city_id' => 512,
                'area' => 'Makilala',
                'zip_code' => 9401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            469 => 
            array (
                'id' => 470,
                'city_id' => 513,
                'area' => 'Matalam',
                'zip_code' => 9406,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            470 => 
            array (
                'id' => 471,
                'city_id' => 514,
                'area' => 'Midsayap',
                'zip_code' => 9410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            471 => 
            array (
                'id' => 472,
                'city_id' => 515,
                'area' => 'Pigkawayan',
                'zip_code' => 9412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            472 => 
            array (
                'id' => 473,
                'city_id' => 516,
                'area' => 'Pikit',
                'zip_code' => 9409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            473 => 
            array (
                'id' => 474,
                'city_id' => 517,
                'area' => 'President Roxas',
                'zip_code' => 9405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            474 => 
            array (
                'id' => 475,
                'city_id' => 518,
                'area' => 'Tulunan',
                'zip_code' => 9403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            475 => 
            array (
                'id' => 476,
                'city_id' => 519,
                'area' => 'Panabo City',
                'zip_code' => 8105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            476 => 
            array (
                'id' => 477,
                'city_id' => 520,
                'area' => 'Island Garden City of Samal',
                'zip_code' => 8119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            477 => 
            array (
                'id' => 478,
                'city_id' => 521,
                'area' => 'Tagum City',
                'zip_code' => 8100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            478 => 
            array (
                'id' => 479,
                'city_id' => 522,
                'area' => 'Asuncion',
                'zip_code' => 8102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            479 => 
            array (
                'id' => 480,
                'city_id' => 524,
                'area' => 'Carmen',
                'zip_code' => 8101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            480 => 
            array (
                'id' => 481,
                'city_id' => 525,
                'area' => 'Kapalong',
                'zip_code' => 8113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            481 => 
            array (
                'id' => 482,
                'city_id' => 526,
                'area' => 'New Corella',
                'zip_code' => 8104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            482 => 
            array (
                'id' => 483,
                'city_id' => 528,
                'area' => 'Santo Tomas',
                'zip_code' => 8112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            483 => 
            array (
                'id' => 484,
                'city_id' => 530,
                'area' => 'Davao City',
                'zip_code' => 8000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            484 => 
            array (
                'id' => 485,
                'city_id' => 531,
                'area' => 'Digos City',
                'zip_code' => 8002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            485 => 
            array (
                'id' => 486,
                'city_id' => 532,
                'area' => 'Bansalan',
                'zip_code' => 8005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            486 => 
            array (
                'id' => 487,
                'city_id' => 533,
                'area' => 'Don Marcelino',
                'zip_code' => 8013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            487 => 
            array (
                'id' => 488,
                'city_id' => 534,
                'area' => 'Hagonoy',
                'zip_code' => 8006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            488 => 
            array (
                'id' => 489,
                'city_id' => 535,
                'area' => 'Jose Abad Santos',
                'zip_code' => 8014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            489 => 
            array (
                'id' => 490,
                'city_id' => 536,
                'area' => 'Kiblawan',
                'zip_code' => 8008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            490 => 
            array (
                'id' => 491,
                'city_id' => 537,
                'area' => 'Magsaysay',
                'zip_code' => 8004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            491 => 
            array (
                'id' => 492,
                'city_id' => 538,
                'area' => 'Malalag',
                'zip_code' => 8010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            492 => 
            array (
                'id' => 493,
                'city_id' => 539,
                'area' => 'Malita',
                'zip_code' => 8012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            493 => 
            array (
                'id' => 494,
                'city_id' => 540,
                'area' => 'Matanao',
                'zip_code' => 8003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            494 => 
            array (
                'id' => 495,
                'city_id' => 541,
                'area' => 'Padada',
                'zip_code' => 8007,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            495 => 
            array (
                'id' => 496,
                'city_id' => 542,
                'area' => 'Santa Cruz',
                'zip_code' => 8001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            496 => 
            array (
                'id' => 497,
                'city_id' => 543,
                'area' => 'Santa Maria',
                'zip_code' => 8011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            497 => 
            array (
                'id' => 498,
                'city_id' => 544,
                'area' => 'Sarangani',
                'zip_code' => 8015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            498 => 
            array (
                'id' => 499,
                'city_id' => 545,
                'area' => 'Sulop',
                'zip_code' => 8009,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            499 => 
            array (
                'id' => 500,
                'city_id' => 557,
                'area' => 'Arteche',
                'zip_code' => 6822,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
        ));
        App\Models\Area::insert(array (
            0 => 
            array (
                'id' => 501,
                'city_id' => 558,
                'area' => 'Balangiga',
                'zip_code' => 6812,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            1 => 
            array (
                'id' => 502,
                'city_id' => 559,
                'area' => 'Balangkayan',
                'zip_code' => 6801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            2 => 
            array (
                'id' => 503,
                'city_id' => 560,
                'area' => 'Borongan',
                'zip_code' => 6800,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            3 => 
            array (
                'id' => 504,
                'city_id' => 561,
                'area' => 'Can-avid',
                'zip_code' => 6806,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            4 => 
            array (
                'id' => 505,
                'city_id' => 562,
                'area' => 'Dolores',
                'zip_code' => 6817,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            5 => 
            array (
                'id' => 506,
                'city_id' => 563,
                'area' => 'General MacArthur',
                'zip_code' => 6805,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            6 => 
            array (
                'id' => 507,
                'city_id' => 564,
                'area' => 'Giporlos',
                'zip_code' => 6811,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            7 => 
            array (
                'id' => 508,
                'city_id' => 565,
                'area' => 'Guiuan',
                'zip_code' => 6809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            8 => 
            array (
                'id' => 509,
                'city_id' => 566,
                'area' => 'Hernani',
                'zip_code' => 6804,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            9 => 
            array (
                'id' => 510,
                'city_id' => 567,
                'area' => 'Jipapad',
                'zip_code' => 6819,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            10 => 
            array (
                'id' => 511,
                'city_id' => 568,
                'area' => 'Lawaan',
                'zip_code' => 6813,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            11 => 
            array (
                'id' => 512,
                'city_id' => 569,
                'area' => 'Llorente',
                'zip_code' => 6803,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            12 => 
            array (
                'id' => 513,
                'city_id' => 570,
                'area' => 'Maslog',
                'zip_code' => 6820,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            13 => 
            array (
                'id' => 514,
                'city_id' => 571,
                'area' => 'Maydolong',
                'zip_code' => 6802,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            14 => 
            array (
                'id' => 515,
                'city_id' => 572,
                'area' => 'Mercedes',
                'zip_code' => 6808,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            15 => 
            array (
                'id' => 516,
                'city_id' => 573,
                'area' => 'Oras',
                'zip_code' => 6818,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            16 => 
            array (
                'id' => 517,
                'city_id' => 574,
                'area' => 'Quinapondan',
                'zip_code' => 6810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            17 => 
            array (
                'id' => 518,
                'city_id' => 575,
                'area' => 'Salcedo',
                'zip_code' => 6807,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            18 => 
            array (
                'id' => 519,
                'city_id' => 576,
                'area' => 'San Julian',
                'zip_code' => 6814,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            19 => 
            array (
                'id' => 520,
                'city_id' => 577,
                'area' => 'San Policarpo',
                'zip_code' => 6821,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            20 => 
            array (
                'id' => 521,
                'city_id' => 578,
                'area' => 'Sulat',
                'zip_code' => 6815,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            21 => 
            array (
                'id' => 522,
                'city_id' => 579,
                'area' => 'Taft',
                'zip_code' => 6816,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            22 => 
            array (
                'id' => 523,
                'city_id' => 580,
                'area' => 'Buenavista',
                'zip_code' => 5044,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            23 => 
            array (
                'id' => 524,
                'city_id' => 581,
                'area' => 'Jordan',
                'zip_code' => 5045,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            24 => 
            array (
                'id' => 525,
                'city_id' => 582,
                'area' => 'Nueva Valencia',
                'zip_code' => 5046,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            25 => 
            array (
                'id' => 526,
                'city_id' => 583,
                'area' => 'San Lorenzo',
                'zip_code' => 5047,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            26 => 
            array (
                'id' => 527,
                'city_id' => 584,
                'area' => 'Sibunag',
                'zip_code' => 5048,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            27 => 
            array (
                'id' => 528,
                'city_id' => 585,
                'area' => 'Aguinaldo',
                'zip_code' => 3606,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            28 => 
            array (
                'id' => 529,
                'city_id' => 587,
                'area' => 'Asipulo',
                'zip_code' => 3610,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            29 => 
            array (
                'id' => 530,
                'city_id' => 588,
                'area' => 'Banaue',
                'zip_code' => 3601,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            30 => 
            array (
                'id' => 531,
                'city_id' => 589,
                'area' => 'Hingyon',
                'zip_code' => 3607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            31 => 
            array (
                'id' => 532,
                'city_id' => 590,
                'area' => 'Hungduan',
                'zip_code' => 3603,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            32 => 
            array (
                'id' => 533,
                'city_id' => 591,
                'area' => 'Kiangan',
                'zip_code' => 3604,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            33 => 
            array (
                'id' => 534,
                'city_id' => 592,
                'area' => 'Lagawe',
                'zip_code' => 3600,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            34 => 
            array (
                'id' => 535,
                'city_id' => 593,
                'area' => 'Lamut',
                'zip_code' => 3605,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            35 => 
            array (
                'id' => 536,
                'city_id' => 595,
                'area' => 'Tinoc',
                'zip_code' => 3609,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            36 => 
            array (
                'id' => 537,
                'city_id' => 597,
                'area' => 'Laoag City',
                'zip_code' => 2900,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            37 => 
            array (
                'id' => 538,
                'city_id' => 598,
                'area' => 'Adams',
                'zip_code' => 2922,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            38 => 
            array (
                'id' => 539,
                'city_id' => 599,
                'area' => 'Bacarra',
                'zip_code' => 2916,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            39 => 
            array (
                'id' => 540,
                'city_id' => 600,
                'area' => 'Badoc',
                'zip_code' => 2904,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            40 => 
            array (
                'id' => 541,
                'city_id' => 601,
                'area' => 'Bangui',
                'zip_code' => 2920,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            41 => 
            array (
                'id' => 542,
                'city_id' => 603,
                'area' => 'Burgos',
                'zip_code' => 2918,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            42 => 
            array (
                'id' => 543,
                'city_id' => 604,
                'area' => 'Carasi',
                'zip_code' => 2911,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            43 => 
            array (
                'id' => 544,
                'city_id' => 605,
                'area' => 'Currimao',
                'zip_code' => 2903,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            44 => 
            array (
                'id' => 545,
                'city_id' => 606,
                'area' => 'Dingras',
                'zip_code' => 2913,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            45 => 
            array (
                'id' => 546,
                'city_id' => 607,
                'area' => 'Dumalneg',
                'zip_code' => 2921,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            46 => 
            array (
                'id' => 547,
                'city_id' => 608,
                'area' => 'Marcos',
                'zip_code' => 2907,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            47 => 
            array (
                'id' => 548,
                'city_id' => 609,
                'area' => 'Nueva Era',
                'zip_code' => 2909,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            48 => 
            array (
                'id' => 549,
                'city_id' => 610,
                'area' => 'Pagudpud',
                'zip_code' => 2919,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            49 => 
            array (
                'id' => 550,
                'city_id' => 611,
                'area' => 'Paoay',
                'zip_code' => 2902,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            50 => 
            array (
                'id' => 551,
                'city_id' => 612,
                'area' => 'Pasuquin',
                'zip_code' => 2917,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            51 => 
            array (
                'id' => 552,
                'city_id' => 613,
                'area' => 'Piddig',
                'zip_code' => 2912,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            52 => 
            array (
                'id' => 553,
                'city_id' => 614,
                'area' => 'Pinili',
                'zip_code' => 2905,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            53 => 
            array (
                'id' => 554,
                'city_id' => 615,
                'area' => 'San Nicolas',
                'zip_code' => 2901,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            54 => 
            array (
                'id' => 555,
                'city_id' => 616,
                'area' => 'Sarrat',
                'zip_code' => 2914,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            55 => 
            array (
                'id' => 556,
                'city_id' => 617,
                'area' => 'Solsona',
                'zip_code' => 2910,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            56 => 
            array (
                'id' => 557,
                'city_id' => 618,
                'area' => 'Vintar',
                'zip_code' => 2915,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            57 => 
            array (
                'id' => 558,
                'city_id' => 619,
                'area' => 'Candon City',
                'zip_code' => 2710,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            58 => 
            array (
                'id' => 559,
                'city_id' => 620,
                'area' => 'Vigan City',
                'zip_code' => 2700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            59 => 
            array (
                'id' => 560,
                'city_id' => 621,
                'area' => 'Alilem',
                'zip_code' => 2716,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            60 => 
            array (
                'id' => 561,
                'city_id' => 622,
                'area' => 'Banayoyo',
                'zip_code' => 2708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            61 => 
            array (
                'id' => 562,
                'city_id' => 623,
                'area' => 'Bantay',
                'zip_code' => 2727,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            62 => 
            array (
                'id' => 563,
                'city_id' => 624,
                'area' => 'Burgos',
                'zip_code' => 2724,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            63 => 
            array (
                'id' => 564,
                'city_id' => 625,
                'area' => 'Cabugao',
                'zip_code' => 2732,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            64 => 
            array (
                'id' => 565,
                'city_id' => 626,
                'area' => 'Caoayan',
                'zip_code' => 2702,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            65 => 
            array (
                'id' => 566,
                'city_id' => 627,
                'area' => 'Cervantes',
                'zip_code' => 2718,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            66 => 
            array (
                'id' => 567,
                'city_id' => 628,
                'area' => 'Galimuyod',
                'zip_code' => 2709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            67 => 
            array (
                'id' => 568,
                'city_id' => 630,
                'area' => 'Lidlidda',
                'zip_code' => 2723,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            68 => 
            array (
                'id' => 569,
                'city_id' => 631,
                'area' => 'Magsingal',
                'zip_code' => 2730,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            69 => 
            array (
                'id' => 570,
                'city_id' => 632,
                'area' => 'Nagbukel',
                'zip_code' => 2725,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            70 => 
            array (
                'id' => 571,
                'city_id' => 633,
                'area' => 'Narvacan',
                'zip_code' => 2704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            71 => 
            array (
                'id' => 572,
                'city_id' => 636,
                'area' => 'San Emilio',
                'zip_code' => 2722,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            72 => 
            array (
                'id' => 573,
                'city_id' => 637,
                'area' => 'San Esteban',
                'zip_code' => 2706,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            73 => 
            array (
                'id' => 574,
                'city_id' => 638,
                'area' => 'San Ildefonso',
                'zip_code' => 2728,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            74 => 
            array (
                'id' => 575,
                'city_id' => 640,
                'area' => 'San Vicente',
                'zip_code' => 2726,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            75 => 
            array (
                'id' => 576,
                'city_id' => 641,
                'area' => 'Santa',
                'zip_code' => 2703,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            76 => 
            array (
                'id' => 577,
                'city_id' => 642,
                'area' => 'Santa Catalina',
                'zip_code' => 2701,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            77 => 
            array (
                'id' => 578,
                'city_id' => 643,
                'area' => 'Santa Cruz',
                'zip_code' => 2713,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            78 => 
            array (
                'id' => 579,
                'city_id' => 644,
                'area' => 'Santa Lucia',
                'zip_code' => 2712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            79 => 
            array (
                'id' => 580,
                'city_id' => 645,
                'area' => 'Santa Maria',
                'zip_code' => 2705,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            80 => 
            array (
                'id' => 581,
                'city_id' => 646,
                'area' => 'Santiago',
                'zip_code' => 2707,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            81 => 
            array (
                'id' => 582,
                'city_id' => 647,
                'area' => 'Santo Domingo',
                'zip_code' => 2729,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            82 => 
            array (
                'id' => 583,
                'city_id' => 648,
                'area' => 'Sigay',
                'zip_code' => 2719,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            83 => 
            array (
                'id' => 584,
                'city_id' => 649,
                'area' => 'Sinait',
                'zip_code' => 2733,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            84 => 
            array (
                'id' => 585,
                'city_id' => 650,
                'area' => 'Sugpon',
                'zip_code' => 2717,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            85 => 
            array (
                'id' => 586,
                'city_id' => 651,
                'area' => 'Suyo',
                'zip_code' => 2715,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            86 => 
            array (
                'id' => 587,
                'city_id' => 652,
                'area' => 'Tagudin',
                'zip_code' => 2714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            87 => 
            array (
                'id' => 588,
                'city_id' => 653,
                'area' => 'Iloilo City',
                'zip_code' => 5000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            88 => 
            array (
                'id' => 589,
                'city_id' => 654,
                'area' => 'Passi City',
                'zip_code' => 5037,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            89 => 
            array (
                'id' => 590,
                'city_id' => 655,
                'area' => 'Ajuy',
                'zip_code' => 5012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            90 => 
            array (
                'id' => 591,
                'city_id' => 656,
                'area' => 'Alimodian',
                'zip_code' => 5028,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            91 => 
            array (
                'id' => 592,
                'city_id' => 657,
                'area' => 'Anilao',
                'zip_code' => 5009,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            92 => 
            array (
                'id' => 593,
                'city_id' => 658,
                'area' => 'Badiangan',
                'zip_code' => 5033,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            93 => 
            array (
                'id' => 594,
                'city_id' => 659,
                'area' => 'Balasan',
                'zip_code' => 5018,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            94 => 
            array (
                'id' => 595,
                'city_id' => 660,
                'area' => 'Banate',
                'zip_code' => 5010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            95 => 
            array (
                'id' => 596,
                'city_id' => 663,
                'area' => 'Batad',
                'zip_code' => 5016,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            96 => 
            array (
                'id' => 597,
                'city_id' => 664,
                'area' => 'Bingawan',
                'zip_code' => 5041,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            97 => 
            array (
                'id' => 598,
                'city_id' => 665,
                'area' => 'Cabatuan',
                'zip_code' => 5031,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            98 => 
            array (
                'id' => 599,
                'city_id' => 666,
                'area' => 'Calinog',
                'zip_code' => 5040,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            99 => 
            array (
                'id' => 600,
                'city_id' => 667,
                'area' => 'Carles',
                'zip_code' => 5019,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            100 => 
            array (
                'id' => 601,
                'city_id' => 668,
                'area' => 'Concepcion',
                'zip_code' => 5013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            101 => 
            array (
                'id' => 602,
                'city_id' => 669,
                'area' => 'Dingle',
                'zip_code' => 5035,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            102 => 
            array (
                'id' => 603,
                'city_id' => 671,
                'area' => 'Dumangas',
                'zip_code' => 5006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            103 => 
            array (
                'id' => 604,
                'city_id' => 672,
                'area' => 'Estancia',
                'zip_code' => 5017,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            104 => 
            array (
                'id' => 605,
                'city_id' => 673,
                'area' => 'Guimbal',
                'zip_code' => 5022,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            105 => 
            array (
                'id' => 606,
                'city_id' => 674,
                'area' => 'Igbaras',
                'zip_code' => 5029,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            106 => 
            array (
                'id' => 607,
                'city_id' => 675,
                'area' => 'Janiuay',
                'zip_code' => 5034,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            107 => 
            array (
                'id' => 608,
                'city_id' => 676,
                'area' => 'Lambunao',
                'zip_code' => 5042,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            108 => 
            array (
                'id' => 609,
                'city_id' => 677,
                'area' => 'Leganes',
                'zip_code' => 5003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            109 => 
            array (
                'id' => 610,
                'city_id' => 678,
                'area' => 'Lemery',
                'zip_code' => 5043,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            110 => 
            array (
                'id' => 611,
                'city_id' => 679,
                'area' => 'Leon',
                'zip_code' => 5026,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            111 => 
            array (
                'id' => 612,
                'city_id' => 680,
                'area' => 'Maasin',
                'zip_code' => 5030,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            112 => 
            array (
                'id' => 613,
                'city_id' => 681,
                'area' => 'Miagao',
                'zip_code' => 5023,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            113 => 
            array (
                'id' => 614,
                'city_id' => 682,
                'area' => 'Mina',
                'zip_code' => 5032,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            114 => 
            array (
                'id' => 615,
                'city_id' => 683,
                'area' => 'New Lucena',
                'zip_code' => 5005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            115 => 
            array (
                'id' => 616,
                'city_id' => 684,
                'area' => 'Oton',
                'zip_code' => 5020,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            116 => 
            array (
                'id' => 617,
                'city_id' => 685,
                'area' => 'Pavia',
                'zip_code' => 5001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            117 => 
            array (
                'id' => 618,
                'city_id' => 686,
                'area' => 'Pototan',
                'zip_code' => 5008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            118 => 
            array (
                'id' => 619,
                'city_id' => 687,
                'area' => 'San Dionisio',
                'zip_code' => 5015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            119 => 
            array (
                'id' => 620,
                'city_id' => 688,
                'area' => 'San Enrique',
                'zip_code' => 5036,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            120 => 
            array (
                'id' => 621,
                'city_id' => 689,
                'area' => 'San Joaquin',
                'zip_code' => 5024,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            121 => 
            array (
                'id' => 622,
                'city_id' => 690,
                'area' => 'San Miguel',
                'zip_code' => 5025,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            122 => 
            array (
                'id' => 623,
                'city_id' => 691,
                'area' => 'San Rafael',
                'zip_code' => 5039,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            123 => 
            array (
                'id' => 624,
                'city_id' => 692,
                'area' => 'Santa Barbara',
                'zip_code' => 5002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            124 => 
            array (
                'id' => 625,
                'city_id' => 693,
                'area' => 'Sara',
                'zip_code' => 5014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            125 => 
            array (
                'id' => 626,
                'city_id' => 694,
                'area' => 'Tigbauan',
                'zip_code' => 5021,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            126 => 
            array (
                'id' => 627,
                'city_id' => 695,
                'area' => 'Tubungan',
                'zip_code' => 5027,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            127 => 
            array (
                'id' => 628,
                'city_id' => 696,
                'area' => 'Zarraga',
                'zip_code' => 5004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            128 => 
            array (
                'id' => 629,
                'city_id' => 697,
                'area' => 'Cauayan City',
                'zip_code' => 3305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            129 => 
            array (
                'id' => 630,
                'city_id' => 698,
                'area' => 'Santiago City',
                'zip_code' => 3311,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            130 => 
            array (
                'id' => 631,
                'city_id' => 699,
                'area' => 'Alicia',
                'zip_code' => 3306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            131 => 
            array (
                'id' => 632,
                'city_id' => 700,
                'area' => 'Angadanan',
                'zip_code' => 3307,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            132 => 
            array (
                'id' => 633,
                'city_id' => 701,
                'area' => 'Aurora',
                'zip_code' => 3316,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            133 => 
            array (
                'id' => 634,
                'city_id' => 702,
                'area' => 'Benito Soliven',
                'zip_code' => 3331,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            134 => 
            array (
                'id' => 635,
                'city_id' => 703,
                'area' => 'Burgos',
                'zip_code' => 3322,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            135 => 
            array (
                'id' => 636,
                'city_id' => 704,
                'area' => 'Cabagan',
                'zip_code' => 3328,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            136 => 
            array (
                'id' => 637,
                'city_id' => 705,
                'area' => 'Cabatuan',
                'zip_code' => 3315,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            137 => 
            array (
                'id' => 638,
                'city_id' => 706,
                'area' => 'Cordon',
                'zip_code' => 3312,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            138 => 
            array (
                'id' => 639,
                'city_id' => 707,
                'area' => 'Delfin Albano',
                'zip_code' => 3326,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            139 => 
            array (
                'id' => 640,
                'city_id' => 709,
                'area' => 'Divilacan',
                'zip_code' => 3335,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            140 => 
            array (
                'id' => 641,
                'city_id' => 710,
                'area' => 'Echague',
                'zip_code' => 3309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            141 => 
            array (
                'id' => 642,
                'city_id' => 711,
                'area' => 'Gamu',
                'zip_code' => 3301,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            142 => 
            array (
                'id' => 643,
                'city_id' => 712,
                'area' => 'Ilagan',
                'zip_code' => 3300,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            143 => 
            array (
                'id' => 644,
                'city_id' => 713,
                'area' => 'Jones',
                'zip_code' => 3313,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            144 => 
            array (
                'id' => 645,
                'city_id' => 714,
                'area' => 'Luna',
                'zip_code' => 3304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            145 => 
            array (
                'id' => 646,
                'city_id' => 715,
                'area' => 'Maconacon',
                'zip_code' => 3333,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            146 => 
            array (
                'id' => 647,
                'city_id' => 716,
                'area' => 'Mallig',
                'zip_code' => 3323,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            147 => 
            array (
                'id' => 648,
                'city_id' => 718,
                'area' => 'Palanan',
                'zip_code' => 3334,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            148 => 
            array (
                'id' => 649,
                'city_id' => 719,
                'area' => 'Quezon',
                'zip_code' => 3324,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            149 => 
            array (
                'id' => 650,
                'city_id' => 720,
                'area' => 'Quirino',
                'zip_code' => 3321,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            150 => 
            array (
                'id' => 651,
                'city_id' => 721,
                'area' => 'Ramon',
                'zip_code' => 3319,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            151 => 
            array (
                'id' => 652,
                'city_id' => 722,
                'area' => 'Reina Mercedes',
                'zip_code' => 3303,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            152 => 
            array (
                'id' => 653,
                'city_id' => 723,
                'area' => 'Roxas',
                'zip_code' => 3320,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            153 => 
            array (
                'id' => 654,
                'city_id' => 724,
                'area' => 'San Agustin',
                'zip_code' => 3314,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            154 => 
            array (
                'id' => 655,
                'city_id' => 725,
                'area' => 'San Guillermo',
                'zip_code' => 3308,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            155 => 
            array (
                'id' => 656,
                'city_id' => 726,
                'area' => 'San Isidro',
                'zip_code' => 3310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            156 => 
            array (
                'id' => 657,
                'city_id' => 728,
                'area' => 'San Mariano',
                'zip_code' => 3332,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            157 => 
            array (
                'id' => 658,
                'city_id' => 729,
                'area' => 'San Mateo',
                'zip_code' => 3318,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            158 => 
            array (
                'id' => 659,
                'city_id' => 730,
                'area' => 'San Pablo',
                'zip_code' => 3329,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            159 => 
            array (
                'id' => 660,
                'city_id' => 731,
                'area' => 'Santa Maria',
                'zip_code' => 3330,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            160 => 
            array (
                'id' => 661,
                'city_id' => 732,
                'area' => 'Santo Tomas',
                'zip_code' => 3327,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            161 => 
            array (
                'id' => 662,
                'city_id' => 733,
                'area' => 'Tumauini',
                'zip_code' => 3325,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            162 => 
            array (
                'id' => 663,
                'city_id' => 735,
                'area' => 'Balbalan',
                'zip_code' => 3801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            163 => 
            array (
                'id' => 664,
                'city_id' => 736,
                'area' => 'Lubuagan',
                'zip_code' => 3802,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            164 => 
            array (
                'id' => 665,
                'city_id' => 737,
                'area' => 'Pasil',
                'zip_code' => 3803,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            165 => 
            array (
                'id' => 666,
                'city_id' => 738,
                'area' => 'Pinukpuk',
                'zip_code' => 3806,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            166 => 
            array (
                'id' => 667,
                'city_id' => 740,
                'area' => 'Tanudan',
                'zip_code' => 3805,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            167 => 
            array (
                'id' => 668,
                'city_id' => 741,
                'area' => 'Tinglayan',
                'zip_code' => 3804,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            168 => 
            array (
                'id' => 669,
                'city_id' => 742,
                'area' => 'San Fernando City',
                'zip_code' => 2500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            169 => 
            array (
                'id' => 670,
                'city_id' => 743,
                'area' => 'Agoo',
                'zip_code' => 2504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            170 => 
            array (
                'id' => 671,
                'city_id' => 744,
                'area' => 'Aringay',
                'zip_code' => 2503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            171 => 
            array (
                'id' => 672,
                'city_id' => 745,
                'area' => 'Bacnotan',
                'zip_code' => 2515,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            172 => 
            array (
                'id' => 673,
                'city_id' => 746,
                'area' => 'Bagulin',
                'zip_code' => 2512,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            173 => 
            array (
                'id' => 674,
                'city_id' => 747,
                'area' => 'Balaoan',
                'zip_code' => 2517,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            174 => 
            array (
                'id' => 675,
                'city_id' => 748,
                'area' => 'Bangar',
                'zip_code' => 2519,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            175 => 
            array (
                'id' => 676,
                'city_id' => 749,
                'area' => 'Bauang',
                'zip_code' => 2501,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            176 => 
            array (
                'id' => 677,
                'city_id' => 750,
                'area' => 'Burgos',
                'zip_code' => 2510,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            177 => 
            array (
                'id' => 678,
                'city_id' => 751,
                'area' => 'Caba',
                'zip_code' => 2502,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            178 => 
            array (
                'id' => 679,
                'city_id' => 752,
                'area' => 'Luna',
                'zip_code' => 2518,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            179 => 
            array (
                'id' => 680,
                'city_id' => 754,
                'area' => 'Pugo',
                'zip_code' => 2508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            180 => 
            array (
                'id' => 681,
                'city_id' => 755,
                'area' => 'Rosario',
                'zip_code' => 2506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            181 => 
            array (
                'id' => 682,
                'city_id' => 756,
                'area' => 'San Gabriel',
                'zip_code' => 2513,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            182 => 
            array (
                'id' => 683,
                'city_id' => 757,
                'area' => 'San Juan',
                'zip_code' => 2514,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            183 => 
            array (
                'id' => 684,
                'city_id' => 758,
                'area' => 'Santo Tomas',
                'zip_code' => 2505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            184 => 
            array (
                'id' => 685,
                'city_id' => 759,
                'area' => 'Santol',
                'zip_code' => 2516,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            185 => 
            array (
                'id' => 686,
                'city_id' => 761,
                'area' => 'Tubao',
                'zip_code' => 2509,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            186 => 
            array (
                'id' => 687,
                'city_id' => 763,
                'area' => 'Calamba City',
                'zip_code' => 4027,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            187 => 
            array (
                'id' => 688,
                'city_id' => 764,
                'area' => 'San Pablo City',
                'zip_code' => 4000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            188 => 
            array (
                'id' => 689,
                'city_id' => 765,
                'area' => 'Santa Rosa City',
                'zip_code' => 4026,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            189 => 
            array (
                'id' => 690,
                'city_id' => 766,
                'area' => 'Alaminos',
                'zip_code' => 4001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            190 => 
            array (
                'id' => 691,
                'city_id' => 767,
                'area' => 'Bay',
                'zip_code' => 4033,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            191 => 
            array (
                'id' => 692,
                'city_id' => 768,
                'area' => 'Cabuyao',
                'zip_code' => 4025,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            192 => 
            array (
                'id' => 693,
                'city_id' => 769,
                'area' => 'Calauan',
                'zip_code' => 4012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            193 => 
            array (
                'id' => 694,
                'city_id' => 770,
                'area' => 'Cavinti',
                'zip_code' => 4013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            194 => 
            array (
                'id' => 695,
                'city_id' => 771,
                'area' => 'Famy',
                'zip_code' => 4021,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            195 => 
            array (
                'id' => 696,
                'city_id' => 772,
                'area' => 'Kalayaan',
                'zip_code' => 4015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            196 => 
            array (
                'id' => 697,
                'city_id' => 773,
                'area' => 'Liliw',
                'zip_code' => 4004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            197 => 
            array (
                'id' => 698,
                'city_id' => 775,
                'area' => 'Luisiana',
                'zip_code' => 4032,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            198 => 
            array (
                'id' => 699,
                'city_id' => 776,
                'area' => 'Lumban',
                'zip_code' => 4014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            199 => 
            array (
                'id' => 700,
                'city_id' => 777,
                'area' => 'Mabitac',
                'zip_code' => 4020,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            200 => 
            array (
                'id' => 701,
                'city_id' => 778,
                'area' => 'Magdalena',
                'zip_code' => 4007,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            201 => 
            array (
                'id' => 702,
                'city_id' => 779,
                'area' => 'Majayjay',
                'zip_code' => 4005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            202 => 
            array (
                'id' => 703,
                'city_id' => 780,
                'area' => 'Nagcarlan',
                'zip_code' => 4002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            203 => 
            array (
                'id' => 704,
                'city_id' => 781,
                'area' => 'Paete',
                'zip_code' => 4016,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            204 => 
            array (
                'id' => 705,
                'city_id' => 782,
                'area' => 'Pagsanjan',
                'zip_code' => 4008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            205 => 
            array (
                'id' => 706,
                'city_id' => 783,
                'area' => 'Pakil',
                'zip_code' => 4017,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            206 => 
            array (
                'id' => 707,
                'city_id' => 784,
                'area' => 'Pangil',
                'zip_code' => 4018,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            207 => 
            array (
                'id' => 708,
                'city_id' => 785,
                'area' => 'Pila',
                'zip_code' => 4010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            208 => 
            array (
                'id' => 709,
                'city_id' => 786,
                'area' => 'Rizal',
                'zip_code' => 4003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            209 => 
            array (
                'id' => 710,
                'city_id' => 787,
                'area' => 'San Pedro',
                'zip_code' => 4023,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            210 => 
            array (
                'id' => 711,
                'city_id' => 788,
                'area' => 'Santa Cruz',
                'zip_code' => 4009,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            211 => 
            array (
                'id' => 712,
                'city_id' => 789,
                'area' => 'Santa Maria',
                'zip_code' => 4022,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            212 => 
            array (
                'id' => 713,
                'city_id' => 790,
                'area' => 'Siniloan',
                'zip_code' => 4019,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            213 => 
            array (
                'id' => 714,
                'city_id' => 791,
                'area' => 'Victoria',
                'zip_code' => 4011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            214 => 
            array (
                'id' => 715,
                'city_id' => 792,
                'area' => 'Iligan City',
                'zip_code' => 9200,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            215 => 
            array (
                'id' => 716,
                'city_id' => 793,
                'area' => 'Bacolod',
                'zip_code' => 9205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            216 => 
            array (
                'id' => 717,
                'city_id' => 794,
                'area' => 'Baloi',
                'zip_code' => 9217,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            217 => 
            array (
                'id' => 718,
                'city_id' => 795,
                'area' => 'Baroy',
                'zip_code' => 9210,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            218 => 
            array (
                'id' => 719,
                'city_id' => 796,
                'area' => 'Kapatagan',
                'zip_code' => 9214,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            219 => 
            array (
                'id' => 720,
                'city_id' => 797,
                'area' => 'Kauswagan',
                'zip_code' => 9202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            220 => 
            array (
                'id' => 721,
                'city_id' => 799,
                'area' => 'Lala',
                'zip_code' => 9211,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            221 => 
            array (
                'id' => 722,
                'city_id' => 800,
                'area' => 'Linamon',
                'zip_code' => 9201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            222 => 
            array (
                'id' => 723,
                'city_id' => 801,
                'area' => 'Magsaysay',
                'zip_code' => 9221,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            223 => 
            array (
                'id' => 724,
                'city_id' => 802,
                'area' => 'Maigo',
                'zip_code' => 9206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            224 => 
            array (
                'id' => 725,
                'city_id' => 803,
                'area' => 'Matungao',
                'zip_code' => 9203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            225 => 
            array (
                'id' => 726,
                'city_id' => 804,
                'area' => 'Munai',
                'zip_code' => 9219,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            226 => 
            array (
                'id' => 727,
                'city_id' => 805,
                'area' => 'Nunungan',
                'zip_code' => 9216,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            227 => 
            array (
                'id' => 728,
                'city_id' => 806,
                'area' => 'Pantao Ragat',
                'zip_code' => 9208,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            228 => 
            array (
                'id' => 729,
                'city_id' => 807,
                'area' => 'Pantar',
                'zip_code' => 9218,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            229 => 
            array (
                'id' => 730,
                'city_id' => 808,
                'area' => 'Poona Piagapo',
                'zip_code' => 9204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            230 => 
            array (
                'id' => 731,
                'city_id' => 809,
                'area' => 'Salvador',
                'zip_code' => 9212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            231 => 
            array (
                'id' => 732,
                'city_id' => 810,
                'area' => 'Sapad',
                'zip_code' => 9213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            232 => 
            array (
                'id' => 733,
                'city_id' => 812,
                'area' => 'Tagoloan',
                'zip_code' => 9222,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            233 => 
            array (
                'id' => 734,
                'city_id' => 814,
                'area' => 'Tubod',
                'zip_code' => 9209,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            234 => 
            array (
                'id' => 735,
                'city_id' => 815,
                'area' => 'Marawi City',
                'zip_code' => 9700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            235 => 
            array (
                'id' => 736,
                'city_id' => 817,
                'area' => 'Balabagan',
                'zip_code' => 9302,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            236 => 
            array (
                'id' => 737,
                'city_id' => 818,
                'area' => 'Balindong',
                'zip_code' => 9318,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            237 => 
            array (
                'id' => 738,
                'city_id' => 819,
                'area' => 'Bayang',
                'zip_code' => 9309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            238 => 
            array (
                'id' => 739,
                'city_id' => 820,
                'area' => 'Binidayan',
                'zip_code' => 9310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            239 => 
            array (
                'id' => 740,
                'city_id' => 822,
                'area' => 'Bubong',
                'zip_code' => 9708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            240 => 
            array (
                'id' => 741,
                'city_id' => 823,
                'area' => 'Bumbaran',
                'zip_code' => 9320,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            241 => 
            array (
                'id' => 742,
                'city_id' => 824,
                'area' => 'Butig',
                'zip_code' => 9305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            242 => 
            array (
                'id' => 743,
                'city_id' => 825,
                'area' => 'Calanogas',
                'zip_code' => 9319,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            243 => 
            array (
                'id' => 744,
                'city_id' => 827,
                'area' => 'Ganassi',
                'zip_code' => 9311,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            244 => 
            array (
                'id' => 745,
                'city_id' => 828,
                'area' => 'Kapai',
                'zip_code' => 9709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            245 => 
            array (
                'id' => 746,
                'city_id' => 832,
                'area' => 'Lumbatan',
                'zip_code' => 9307,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            246 => 
            array (
                'id' => 747,
                'city_id' => 833,
                'area' => 'Lumbayanague',
                'zip_code' => 9306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            247 => 
            array (
                'id' => 748,
                'city_id' => 834,
                'area' => 'Madalum',
                'zip_code' => 9315,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            248 => 
            array (
                'id' => 749,
                'city_id' => 835,
                'area' => 'Madamba',
                'zip_code' => 9314,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            249 => 
            array (
                'id' => 750,
                'city_id' => 836,
                'area' => 'Maguing',
                'zip_code' => 9715,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            250 => 
            array (
                'id' => 751,
                'city_id' => 837,
                'area' => 'Malabang',
                'zip_code' => 9300,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            251 => 
            array (
                'id' => 752,
                'city_id' => 838,
                'area' => 'Marantao',
                'zip_code' => 9711,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            252 => 
            array (
                'id' => 753,
                'city_id' => 839,
                'area' => 'Marogong',
                'zip_code' => 9303,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            253 => 
            array (
                'id' => 754,
                'city_id' => 841,
                'area' => 'Mulondo',
                'zip_code' => 9702,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            254 => 
            array (
                'id' => 755,
                'city_id' => 842,
                'area' => 'Pagayawan',
                'zip_code' => 9312,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            255 => 
            array (
                'id' => 756,
                'city_id' => 843,
                'area' => 'Piagapo',
                'zip_code' => 9710,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            256 => 
            array (
                'id' => 757,
                'city_id' => 844,
                'area' => 'Poona Bayabao',
                'zip_code' => 9705,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            257 => 
            array (
                'id' => 758,
                'city_id' => 845,
                'area' => 'Pualas',
                'zip_code' => 9313,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            258 => 
            array (
                'id' => 759,
                'city_id' => 846,
                'area' => 'Saguiaran',
                'zip_code' => 9701,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            259 => 
            array (
                'id' => 760,
                'city_id' => 850,
                'area' => 'Tamparan',
                'zip_code' => 9704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            260 => 
            array (
                'id' => 761,
                'city_id' => 851,
                'area' => 'Taraka',
                'zip_code' => 9712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            261 => 
            array (
                'id' => 762,
                'city_id' => 852,
                'area' => 'Tubaran',
                'zip_code' => 9304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            262 => 
            array (
                'id' => 763,
                'city_id' => 853,
                'area' => 'Tugaya',
                'zip_code' => 9317,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            263 => 
            array (
                'id' => 764,
                'city_id' => 854,
                'area' => 'Wao',
                'zip_code' => 9716,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            264 => 
            array (
                'id' => 765,
                'city_id' => 855,
                'area' => 'Ormoc City',
                'zip_code' => 6541,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            265 => 
            array (
                'id' => 766,
                'city_id' => 856,
                'area' => 'Tacloban City',
                'zip_code' => 6500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            266 => 
            array (
                'id' => 767,
                'city_id' => 857,
                'area' => 'Abuyog',
                'zip_code' => 6510,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            267 => 
            array (
                'id' => 768,
                'city_id' => 858,
                'area' => 'Alangalang',
                'zip_code' => 6517,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            268 => 
            array (
                'id' => 769,
                'city_id' => 859,
                'area' => 'Albuera',
                'zip_code' => 6542,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            269 => 
            array (
                'id' => 770,
                'city_id' => 860,
                'area' => 'Babatngon',
                'zip_code' => 6520,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            270 => 
            array (
                'id' => 771,
                'city_id' => 861,
                'area' => 'Barugo',
                'zip_code' => 6519,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            271 => 
            array (
                'id' => 772,
                'city_id' => 862,
                'area' => 'Bato',
                'zip_code' => 6525,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            272 => 
            array (
                'id' => 773,
                'city_id' => 863,
                'area' => 'Baybay',
                'zip_code' => 6521,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            273 => 
            array (
                'id' => 774,
                'city_id' => 864,
                'area' => 'Burauen',
                'zip_code' => 6516,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            274 => 
            array (
                'id' => 775,
                'city_id' => 865,
                'area' => 'Calubian',
                'zip_code' => 6534,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            275 => 
            array (
                'id' => 776,
                'city_id' => 866,
                'area' => 'Capoocan',
                'zip_code' => 6530,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            276 => 
            array (
                'id' => 777,
                'city_id' => 867,
                'area' => 'Carigara',
                'zip_code' => 6529,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            277 => 
            array (
                'id' => 778,
                'city_id' => 868,
                'area' => 'Dagami',
                'zip_code' => 6515,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            278 => 
            array (
                'id' => 779,
                'city_id' => 869,
                'area' => 'Dulag',
                'zip_code' => 6505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            279 => 
            array (
                'id' => 780,
                'city_id' => 870,
                'area' => 'Hilongos',
                'zip_code' => 6524,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            280 => 
            array (
                'id' => 781,
                'city_id' => 871,
                'area' => 'Hindang',
                'zip_code' => 6523,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            281 => 
            array (
                'id' => 782,
                'city_id' => 872,
                'area' => 'Inopacan',
                'zip_code' => 6522,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            282 => 
            array (
                'id' => 783,
                'city_id' => 873,
                'area' => 'Isabel',
                'zip_code' => 6539,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            283 => 
            array (
                'id' => 784,
                'city_id' => 874,
                'area' => 'Jaro',
                'zip_code' => 6527,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            284 => 
            array (
                'id' => 785,
                'city_id' => 875,
                'area' => 'Javier',
                'zip_code' => 6511,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            285 => 
            array (
                'id' => 786,
                'city_id' => 876,
                'area' => 'Julita',
                'zip_code' => 6506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            286 => 
            array (
                'id' => 787,
                'city_id' => 877,
                'area' => 'Kananga',
                'zip_code' => 6531,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            287 => 
            array (
                'id' => 788,
                'city_id' => 878,
                'area' => 'La Paz',
                'zip_code' => 6508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            288 => 
            array (
                'id' => 789,
                'city_id' => 879,
                'area' => 'Leyte',
                'zip_code' => 6533,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            289 => 
            array (
                'id' => 790,
                'city_id' => 882,
                'area' => 'Mahaplag',
                'zip_code' => 6512,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            290 => 
            array (
                'id' => 791,
                'city_id' => 883,
                'area' => 'Matag-ob',
                'zip_code' => 6532,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            291 => 
            array (
                'id' => 792,
                'city_id' => 884,
                'area' => 'Matalom',
                'zip_code' => 6526,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            292 => 
            array (
                'id' => 793,
                'city_id' => 885,
                'area' => 'Mayorga',
                'zip_code' => 6507,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            293 => 
            array (
                'id' => 794,
                'city_id' => 886,
                'area' => 'Merida',
                'zip_code' => 6540,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            294 => 
            array (
                'id' => 795,
                'city_id' => 887,
                'area' => 'Palo',
                'zip_code' => 6501,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            295 => 
            array (
                'id' => 796,
                'city_id' => 888,
                'area' => 'Palompon',
                'zip_code' => 6538,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            296 => 
            array (
                'id' => 797,
                'city_id' => 889,
                'area' => 'Pastrana',
                'zip_code' => 6514,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            297 => 
            array (
                'id' => 798,
                'city_id' => 890,
                'area' => 'San Isidro',
                'zip_code' => 6535,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            298 => 
            array (
                'id' => 799,
                'city_id' => 891,
                'area' => 'San Miguel',
                'zip_code' => 6518,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            299 => 
            array (
                'id' => 800,
                'city_id' => 892,
                'area' => 'Santa Fe',
                'zip_code' => 6513,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            300 => 
            array (
                'id' => 801,
                'city_id' => 894,
                'area' => 'Tabango',
                'zip_code' => 6536,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            301 => 
            array (
                'id' => 802,
                'city_id' => 895,
                'area' => 'Tabontabon',
                'zip_code' => 6504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            302 => 
            array (
                'id' => 803,
                'city_id' => 897,
                'area' => 'Tolosa',
                'zip_code' => 6503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            303 => 
            array (
                'id' => 804,
                'city_id' => 898,
                'area' => 'Tunga',
                'zip_code' => 6528,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            304 => 
            array (
                'id' => 805,
                'city_id' => 899,
                'area' => 'Villaba',
                'zip_code' => 6537,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            305 => 
            array (
                'id' => 806,
                'city_id' => 900,
                'area' => 'Cotabato City',
                'zip_code' => 9600,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            306 => 
            array (
                'id' => 807,
                'city_id' => 901,
                'area' => 'Ampatuan',
                'zip_code' => 9609,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            307 => 
            array (
                'id' => 808,
                'city_id' => 904,
                'area' => 'Buluan',
                'zip_code' => 9616,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            308 => 
            array (
                'id' => 809,
                'city_id' => 911,
                'area' => 'Datu Paglas',
                'zip_code' => 9617,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            309 => 
            array (
                'id' => 810,
                'city_id' => 912,
                'area' => 'Datu Piang',
                'zip_code' => 9607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            310 => 
            array (
                'id' => 811,
                'city_id' => 923,
                'area' => 'Pagalungan',
                'zip_code' => 9610,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            311 => 
            array (
                'id' => 812,
                'city_id' => 930,
                'area' => 'South Upi',
                'zip_code' => 9603,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            312 => 
            array (
                'id' => 813,
                'city_id' => 933,
                'area' => 'Sultan sa Barongis',
                'zip_code' => 9611,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            313 => 
            array (
                'id' => 814,
                'city_id' => 934,
                'area' => 'Talayan',
                'zip_code' => 9612,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            314 => 
            array (
                'id' => 815,
                'city_id' => 937,
                'area' => 'Boac',
                'zip_code' => 4900,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            315 => 
            array (
                'id' => 816,
                'city_id' => 938,
                'area' => 'Buenavista',
                'zip_code' => 4904,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            316 => 
            array (
                'id' => 817,
                'city_id' => 939,
                'area' => 'Gasan',
                'zip_code' => 4905,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            317 => 
            array (
                'id' => 818,
                'city_id' => 940,
                'area' => 'Mogpog',
                'zip_code' => 4901,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            318 => 
            array (
                'id' => 819,
                'city_id' => 941,
                'area' => 'Santa Cruz',
                'zip_code' => 4902,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            319 => 
            array (
                'id' => 820,
                'city_id' => 942,
                'area' => 'Torrijos',
                'zip_code' => 4903,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            320 => 
            array (
                'id' => 821,
                'city_id' => 943,
                'area' => 'Masbate City',
                'zip_code' => 5400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            321 => 
            array (
                'id' => 822,
                'city_id' => 944,
                'area' => 'Aroroy',
                'zip_code' => 5414,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            322 => 
            array (
                'id' => 823,
                'city_id' => 945,
                'area' => 'Baleno',
                'zip_code' => 5413,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            323 => 
            array (
                'id' => 824,
                'city_id' => 946,
                'area' => 'Balud',
                'zip_code' => 5412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            324 => 
            array (
                'id' => 825,
                'city_id' => 947,
                'area' => 'Batuan',
                'zip_code' => 5415,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            325 => 
            array (
                'id' => 826,
                'city_id' => 948,
                'area' => 'Cataingan',
                'zip_code' => 5405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            326 => 
            array (
                'id' => 827,
                'city_id' => 949,
                'area' => 'Cawayan',
                'zip_code' => 5409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            327 => 
            array (
                'id' => 828,
                'city_id' => 950,
                'area' => 'Claveria',
                'zip_code' => 5419,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            328 => 
            array (
                'id' => 829,
                'city_id' => 951,
                'area' => 'Dimasalang',
                'zip_code' => 5403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            329 => 
            array (
                'id' => 830,
                'city_id' => 952,
                'area' => 'Esperanza',
                'zip_code' => 5407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            330 => 
            array (
                'id' => 831,
                'city_id' => 953,
                'area' => 'Mandaon',
                'zip_code' => 5411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            331 => 
            array (
                'id' => 832,
                'city_id' => 954,
                'area' => 'Milagros',
                'zip_code' => 5410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            332 => 
            array (
                'id' => 833,
                'city_id' => 955,
                'area' => 'Mobo',
                'zip_code' => 5401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            333 => 
            array (
                'id' => 834,
                'city_id' => 956,
                'area' => 'Monreal',
                'zip_code' => 5418,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            334 => 
            array (
                'id' => 835,
                'city_id' => 957,
                'area' => 'Palanas',
                'zip_code' => 5404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            335 => 
            array (
                'id' => 836,
                'city_id' => 958,
                'area' => 'Pio V. Corpuz',
                'zip_code' => 5406,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            336 => 
            array (
                'id' => 837,
                'city_id' => 959,
                'area' => 'Placer',
                'zip_code' => 5408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            337 => 
            array (
                'id' => 838,
                'city_id' => 960,
                'area' => 'San Fernando',
                'zip_code' => 5416,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            338 => 
            array (
                'id' => 839,
                'city_id' => 961,
                'area' => 'San Jacinto',
                'zip_code' => 5417,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            339 => 
            array (
                'id' => 840,
                'city_id' => 962,
                'area' => 'San Pascual',
                'zip_code' => 5420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            340 => 
            array (
                'id' => 841,
                'city_id' => 963,
                'area' => 'Uson',
                'zip_code' => 5402,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            341 => 
            array (
                'id' => 842,
                'city_id' => 981,
                'area' => 'Oroquieta City',
                'zip_code' => 7207,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            342 => 
            array (
                'id' => 843,
                'city_id' => 983,
                'area' => 'Tangub City',
                'zip_code' => 7214,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            343 => 
            array (
                'id' => 844,
                'city_id' => 984,
                'area' => 'Aloran',
                'zip_code' => 7206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            344 => 
            array (
                'id' => 845,
                'city_id' => 985,
                'area' => 'Baliangao',
                'zip_code' => 7211,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            345 => 
            array (
                'id' => 846,
                'city_id' => 986,
                'area' => 'Bonifacio',
                'zip_code' => 7215,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            346 => 
            array (
                'id' => 847,
                'city_id' => 987,
                'area' => 'Calamba',
                'zip_code' => 7210,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            347 => 
            array (
                'id' => 848,
                'city_id' => 988,
                'area' => 'Clarin',
                'zip_code' => 7201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            348 => 
            array (
                'id' => 849,
                'city_id' => 989,
                'area' => 'Concepcion',
                'zip_code' => 7213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            349 => 
            array (
                'id' => 850,
                'city_id' => 991,
                'area' => 'Jimenez',
                'zip_code' => 7204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            350 => 
            array (
                'id' => 851,
                'city_id' => 992,
                'area' => 'Lopez Jaena',
                'zip_code' => 7208,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            351 => 
            array (
                'id' => 852,
                'city_id' => 993,
                'area' => 'Panaon',
                'zip_code' => 7205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            352 => 
            array (
                'id' => 853,
                'city_id' => 994,
                'area' => 'Plaridel',
                'zip_code' => 7209,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            353 => 
            array (
                'id' => 854,
                'city_id' => 995,
                'area' => 'Sapang Dalaga',
                'zip_code' => 7212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            354 => 
            array (
                'id' => 855,
                'city_id' => 996,
                'area' => 'Sinacaban',
                'zip_code' => 7203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            355 => 
            array (
                'id' => 856,
                'city_id' => 997,
                'area' => 'Tudela',
                'zip_code' => 7202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            356 => 
            array (
                'id' => 857,
                'city_id' => 999,
                'area' => 'Gingoog City',
                'zip_code' => 9014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            357 => 
            array (
                'id' => 858,
                'city_id' => 1000,
                'area' => 'Alubijid',
                'zip_code' => 9018,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            358 => 
            array (
                'id' => 859,
                'city_id' => 1001,
                'area' => 'Balingasag',
                'zip_code' => 9005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            359 => 
            array (
                'id' => 860,
                'city_id' => 1003,
                'area' => 'Binuangan',
                'zip_code' => 9008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            360 => 
            array (
                'id' => 861,
                'city_id' => 1004,
                'area' => 'Claveria',
                'zip_code' => 9004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            361 => 
            array (
                'id' => 862,
                'city_id' => 1005,
                'area' => 'El Salvador',
                'zip_code' => 9017,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            362 => 
            array (
                'id' => 863,
                'city_id' => 1006,
                'area' => 'Gitagum',
                'zip_code' => 9020,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            363 => 
            array (
                'id' => 864,
                'city_id' => 1007,
                'area' => 'Initao',
                'zip_code' => 9022,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            364 => 
            array (
                'id' => 865,
                'city_id' => 1008,
                'area' => 'Jasaan',
                'zip_code' => 9003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            365 => 
            array (
                'id' => 866,
                'city_id' => 1010,
                'area' => 'Lagonglong',
                'zip_code' => 9006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            366 => 
            array (
                'id' => 867,
                'city_id' => 1011,
                'area' => 'Laguindingan',
                'zip_code' => 9019,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            367 => 
            array (
                'id' => 868,
                'city_id' => 1012,
                'area' => 'Libertad',
                'zip_code' => 9021,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            368 => 
            array (
                'id' => 869,
                'city_id' => 1013,
                'area' => 'Lugait',
                'zip_code' => 9025,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            369 => 
            array (
                'id' => 870,
                'city_id' => 1014,
                'area' => 'Magsaysay',
                'zip_code' => 9015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            370 => 
            array (
                'id' => 871,
                'city_id' => 1015,
                'area' => 'Manticao',
                'zip_code' => 9024,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            371 => 
            array (
                'id' => 872,
                'city_id' => 1016,
                'area' => 'Medina',
                'zip_code' => 9013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            372 => 
            array (
                'id' => 873,
                'city_id' => 1017,
                'area' => 'Naawan',
                'zip_code' => 9023,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            373 => 
            array (
                'id' => 874,
                'city_id' => 1018,
                'area' => 'Opol',
                'zip_code' => 9016,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            374 => 
            array (
                'id' => 875,
                'city_id' => 1019,
                'area' => 'Salay',
                'zip_code' => 9007,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            375 => 
            array (
                'id' => 876,
                'city_id' => 1021,
                'area' => 'Tagoloan',
                'zip_code' => 9001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            376 => 
            array (
                'id' => 877,
                'city_id' => 1022,
                'area' => 'Talisayan',
                'zip_code' => 9012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            377 => 
            array (
                'id' => 878,
                'city_id' => 1023,
                'area' => 'Villanueva',
                'zip_code' => 9002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            378 => 
            array (
                'id' => 879,
                'city_id' => 1024,
                'area' => 'Barlig',
                'zip_code' => 2623,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            379 => 
            array (
                'id' => 880,
                'city_id' => 1025,
                'area' => 'Bauko',
                'zip_code' => 2621,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            380 => 
            array (
                'id' => 881,
                'city_id' => 1026,
                'area' => 'Besao',
                'zip_code' => 2618,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            381 => 
            array (
                'id' => 882,
                'city_id' => 1027,
                'area' => 'Bontoc',
                'zip_code' => 2616,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            382 => 
            array (
                'id' => 883,
                'city_id' => 1028,
                'area' => 'Natonin',
                'zip_code' => 2624,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            383 => 
            array (
                'id' => 884,
                'city_id' => 1029,
                'area' => 'Paracelis',
                'zip_code' => 2625,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            384 => 
            array (
                'id' => 885,
                'city_id' => 1030,
                'area' => 'Sabangan',
                'zip_code' => 2622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            385 => 
            array (
                'id' => 886,
                'city_id' => 1031,
                'area' => 'Sadanga',
                'zip_code' => 2617,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            386 => 
            array (
                'id' => 887,
                'city_id' => 1032,
                'area' => 'Sagada',
                'zip_code' => 2619,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            387 => 
            array (
                'id' => 888,
                'city_id' => 1033,
                'area' => 'Tadian',
                'zip_code' => 2620,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            388 => 
            array (
                'id' => 889,
                'city_id' => 1034,
                'area' => 'Bacolod City',
                'zip_code' => 6100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            389 => 
            array (
                'id' => 890,
                'city_id' => 1035,
                'area' => 'Bago City',
                'zip_code' => 6101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            390 => 
            array (
                'id' => 891,
                'city_id' => 1036,
                'area' => 'Cadiz City',
                'zip_code' => 6121,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            391 => 
            array (
                'id' => 892,
                'city_id' => 1037,
                'area' => 'Escalante City',
                'zip_code' => 6124,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            392 => 
            array (
                'id' => 893,
                'city_id' => 1038,
                'area' => 'Himamaylan City',
                'zip_code' => 6108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            393 => 
            array (
                'id' => 894,
                'city_id' => 1039,
                'area' => 'Kabankalan City',
                'zip_code' => 6111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            394 => 
            array (
                'id' => 895,
                'city_id' => 1040,
                'area' => 'La Carlota City',
                'zip_code' => 6130,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            395 => 
            array (
                'id' => 896,
                'city_id' => 1041,
                'area' => 'Sagay City',
                'zip_code' => 6122,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            396 => 
            array (
                'id' => 897,
                'city_id' => 1042,
                'area' => 'San Carlos City',
                'zip_code' => 6127,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            397 => 
            array (
                'id' => 898,
                'city_id' => 1043,
                'area' => 'Silay City',
                'zip_code' => 6116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            398 => 
            array (
                'id' => 899,
                'city_id' => 1044,
                'area' => 'Sipalay City',
                'zip_code' => 6113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            399 => 
            array (
                'id' => 900,
                'city_id' => 1045,
                'area' => 'Talisay City',
                'zip_code' => 6115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            400 => 
            array (
                'id' => 901,
                'city_id' => 1046,
                'area' => 'Victorias City',
                'zip_code' => 6119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            401 => 
            array (
                'id' => 902,
                'city_id' => 1048,
                'area' => 'Calatrava',
                'zip_code' => 6126,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            402 => 
            array (
                'id' => 903,
                'city_id' => 1049,
                'area' => 'Candoni',
                'zip_code' => 6110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            403 => 
            array (
                'id' => 904,
                'city_id' => 1050,
                'area' => 'Cauayan',
                'zip_code' => 6112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            404 => 
            array (
                'id' => 905,
                'city_id' => 1053,
                'area' => 'Hinoba-an',
                'zip_code' => 6114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            405 => 
            array (
                'id' => 906,
                'city_id' => 1054,
                'area' => 'Ilog',
                'zip_code' => 6109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            406 => 
            array (
                'id' => 907,
                'city_id' => 1055,
                'area' => 'Isabela',
                'zip_code' => 6128,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            407 => 
            array (
                'id' => 908,
                'city_id' => 1057,
                'area' => 'Manapla',
                'zip_code' => 6120,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            408 => 
            array (
                'id' => 909,
                'city_id' => 1058,
                'area' => 'Moises Padilla',
                'zip_code' => 6132,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            409 => 
            array (
                'id' => 910,
                'city_id' => 1059,
                'area' => 'Murcia',
                'zip_code' => 6129,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            410 => 
            array (
                'id' => 911,
                'city_id' => 1060,
                'area' => 'Pontevedra',
                'zip_code' => 6105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            411 => 
            array (
                'id' => 912,
                'city_id' => 1061,
                'area' => 'Pulupandan',
                'zip_code' => 6102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            412 => 
            array (
                'id' => 913,
                'city_id' => 1063,
                'area' => 'San Enrique',
                'zip_code' => 6104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            413 => 
            array (
                'id' => 914,
                'city_id' => 1064,
                'area' => 'Toboso',
                'zip_code' => 6125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            414 => 
            array (
                'id' => 915,
                'city_id' => 1065,
                'area' => 'Valladolid',
                'zip_code' => 6103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            415 => 
            array (
                'id' => 916,
                'city_id' => 1066,
                'area' => 'Bais City',
                'zip_code' => 6206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            416 => 
            array (
                'id' => 917,
                'city_id' => 1067,
                'area' => 'Bayawan City',
                'zip_code' => 6221,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            417 => 
            array (
                'id' => 918,
                'city_id' => 1068,
                'area' => 'Canlaon City',
                'zip_code' => 6223,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            418 => 
            array (
                'id' => 919,
                'city_id' => 1070,
                'area' => 'Dumaguete City',
                'zip_code' => 6200,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            419 => 
            array (
                'id' => 920,
                'city_id' => 1071,
                'area' => 'Tanjay City',
                'zip_code' => 6204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            420 => 
            array (
                'id' => 921,
                'city_id' => 1072,
                'area' => 'Amlan',
                'zip_code' => 6203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            421 => 
            array (
                'id' => 922,
                'city_id' => 1073,
                'area' => 'Ayungon',
                'zip_code' => 6210,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            422 => 
            array (
                'id' => 923,
                'city_id' => 1074,
                'area' => 'Bacong',
                'zip_code' => 6216,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            423 => 
            array (
                'id' => 924,
                'city_id' => 1075,
                'area' => 'Basay',
                'zip_code' => 6222,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            424 => 
            array (
                'id' => 925,
                'city_id' => 1076,
                'area' => 'Bindoy',
                'zip_code' => 6209,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            425 => 
            array (
                'id' => 926,
                'city_id' => 1077,
                'area' => 'Dauin',
                'zip_code' => 6217,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            426 => 
            array (
                'id' => 927,
                'city_id' => 1078,
                'area' => 'Jimalalud',
                'zip_code' => 6212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            427 => 
            array (
                'id' => 928,
                'city_id' => 1079,
                'area' => 'La Libertad',
                'zip_code' => 6213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            428 => 
            array (
                'id' => 929,
                'city_id' => 1080,
                'area' => 'Mabinay',
                'zip_code' => 6207,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            429 => 
            array (
                'id' => 930,
                'city_id' => 1081,
                'area' => 'Manjuyod',
                'zip_code' => 6208,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            430 => 
            array (
                'id' => 931,
                'city_id' => 1082,
                'area' => 'Pamplona',
                'zip_code' => 6205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            431 => 
            array (
                'id' => 932,
                'city_id' => 1083,
                'area' => 'San Jose',
                'zip_code' => 6202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            432 => 
            array (
                'id' => 933,
                'city_id' => 1085,
                'area' => 'Siaton',
                'zip_code' => 6219,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            433 => 
            array (
                'id' => 934,
                'city_id' => 1086,
                'area' => 'Sibulan',
                'zip_code' => 6201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            434 => 
            array (
                'id' => 935,
                'city_id' => 1087,
                'area' => 'Tayasan',
                'zip_code' => 6211,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            435 => 
            array (
                'id' => 936,
                'city_id' => 1088,
                'area' => 'Valencia',
                'zip_code' => 6215,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            436 => 
            array (
                'id' => 937,
                'city_id' => 1090,
                'area' => 'Zamboanguita',
                'zip_code' => 6218,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            437 => 
            array (
                'id' => 938,
                'city_id' => 1091,
                'area' => 'Allen',
                'zip_code' => 6405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            438 => 
            array (
                'id' => 939,
                'city_id' => 1092,
                'area' => 'Biri',
                'zip_code' => 6410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            439 => 
            array (
                'id' => 940,
                'city_id' => 1093,
                'area' => 'Bobon',
                'zip_code' => 6401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            440 => 
            array (
                'id' => 941,
                'city_id' => 1094,
                'area' => 'Capul',
                'zip_code' => 6408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            441 => 
            array (
                'id' => 942,
                'city_id' => 1095,
                'area' => 'Catarman',
                'zip_code' => 6400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            442 => 
            array (
                'id' => 943,
                'city_id' => 1096,
                'area' => 'Catubig',
                'zip_code' => 6418,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            443 => 
            array (
                'id' => 944,
                'city_id' => 1097,
                'area' => 'Gamay',
                'zip_code' => 6422,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            444 => 
            array (
                'id' => 945,
                'city_id' => 1098,
                'area' => 'Laoang',
                'zip_code' => 6411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            445 => 
            array (
                'id' => 946,
                'city_id' => 1099,
                'area' => 'Lapinig',
                'zip_code' => 6423,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            446 => 
            array (
                'id' => 947,
                'city_id' => 1100,
                'area' => 'Las Navas',
                'zip_code' => 6420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            447 => 
            array (
                'id' => 948,
                'city_id' => 1101,
                'area' => 'Lavezares',
                'zip_code' => 6404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            448 => 
            array (
                'id' => 949,
                'city_id' => 1102,
                'area' => 'Lope de Vega',
                'zip_code' => 6403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            449 => 
            array (
                'id' => 950,
                'city_id' => 1103,
                'area' => 'Mapanas',
                'zip_code' => 6412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            450 => 
            array (
                'id' => 951,
                'city_id' => 1104,
                'area' => 'Mondragon',
                'zip_code' => 6417,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            451 => 
            array (
                'id' => 952,
                'city_id' => 1105,
                'area' => 'Palapag',
                'zip_code' => 6421,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            452 => 
            array (
                'id' => 953,
                'city_id' => 1106,
                'area' => 'Pambujan',
                'zip_code' => 6413,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            453 => 
            array (
                'id' => 954,
                'city_id' => 1107,
                'area' => 'Rosario',
                'zip_code' => 6416,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            454 => 
            array (
                'id' => 955,
                'city_id' => 1108,
                'area' => 'San Antonio',
                'zip_code' => 6407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            455 => 
            array (
                'id' => 956,
                'city_id' => 1109,
                'area' => 'San Isidro',
                'zip_code' => 6409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            456 => 
            array (
                'id' => 957,
                'city_id' => 1110,
                'area' => 'San Jose',
                'zip_code' => 6402,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            457 => 
            array (
                'id' => 958,
                'city_id' => 1111,
                'area' => 'San Roque',
                'zip_code' => 6415,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            458 => 
            array (
                'id' => 959,
                'city_id' => 1112,
                'area' => 'San Vicente',
                'zip_code' => 6419,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            459 => 
            array (
                'id' => 960,
                'city_id' => 1113,
                'area' => 'Silvino Lobos',
                'zip_code' => 6414,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            460 => 
            array (
                'id' => 961,
                'city_id' => 1114,
                'area' => 'Victoria',
                'zip_code' => 6406,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            461 => 
            array (
                'id' => 962,
                'city_id' => 1115,
                'area' => 'Cabanatuan City',
                'zip_code' => 3100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            462 => 
            array (
                'id' => 963,
                'city_id' => 1116,
                'area' => 'Gapan City',
                'zip_code' => 3105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            463 => 
            array (
                'id' => 964,
                'city_id' => 1118,
                'area' => 'Palayan City',
                'zip_code' => 3132,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            464 => 
            array (
                'id' => 965,
                'city_id' => 1119,
                'area' => 'San Jose City',
                'zip_code' => 3121,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            465 => 
            array (
                'id' => 966,
                'city_id' => 1120,
                'area' => 'Aliaga',
                'zip_code' => 3111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            466 => 
            array (
                'id' => 967,
                'city_id' => 1121,
                'area' => 'Bongabon',
                'zip_code' => 3128,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            467 => 
            array (
                'id' => 968,
                'city_id' => 1122,
                'area' => 'Cabiao',
                'zip_code' => 3107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            468 => 
            array (
                'id' => 969,
                'city_id' => 1123,
                'area' => 'Carranglan',
                'zip_code' => 3123,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            469 => 
            array (
                'id' => 970,
                'city_id' => 1124,
                'area' => 'Cuyapo',
                'zip_code' => 3117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            470 => 
            array (
                'id' => 971,
                'city_id' => 1125,
                'area' => 'Gabaldon',
                'zip_code' => 3131,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            471 => 
            array (
                'id' => 972,
                'city_id' => 1127,
                'area' => 'General Tinio',
                'zip_code' => 3104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            472 => 
            array (
                'id' => 973,
                'city_id' => 1128,
                'area' => 'Guimba',
                'zip_code' => 3115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            473 => 
            array (
                'id' => 974,
                'city_id' => 1129,
                'area' => 'Jaen',
                'zip_code' => 3109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            474 => 
            array (
                'id' => 975,
                'city_id' => 1130,
                'area' => 'Laur',
                'zip_code' => 3129,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            475 => 
            array (
                'id' => 976,
                'city_id' => 1131,
                'area' => 'Licab',
                'zip_code' => 3112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            476 => 
            array (
                'id' => 977,
                'city_id' => 1132,
                'area' => 'Llanera',
                'zip_code' => 3126,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            477 => 
            array (
                'id' => 978,
                'city_id' => 1133,
                'area' => 'Lupao',
                'zip_code' => 3122,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            478 => 
            array (
                'id' => 979,
                'city_id' => 1134,
                'area' => 'Nampicuan',
                'zip_code' => 3116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            479 => 
            array (
                'id' => 980,
                'city_id' => 1135,
                'area' => 'Pantabangan',
                'zip_code' => 3124,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            480 => 
            array (
                'id' => 981,
                'city_id' => 1137,
                'area' => 'Quezon',
                'zip_code' => 3113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            481 => 
            array (
                'id' => 982,
                'city_id' => 1138,
                'area' => 'Rizal',
                'zip_code' => 3127,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            482 => 
            array (
                'id' => 983,
                'city_id' => 1139,
                'area' => 'San Antonio',
                'zip_code' => 3108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            483 => 
            array (
                'id' => 984,
                'city_id' => 1140,
                'area' => 'San Isidro',
                'zip_code' => 3106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            484 => 
            array (
                'id' => 985,
                'city_id' => 1141,
                'area' => 'San Leonardo',
                'zip_code' => 3102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            485 => 
            array (
                'id' => 986,
                'city_id' => 1142,
                'area' => 'Santa Rosa',
                'zip_code' => 3101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            486 => 
            array (
                'id' => 987,
                'city_id' => 1143,
                'area' => 'Santo Domingo',
                'zip_code' => 3133,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            487 => 
            array (
                'id' => 988,
                'city_id' => 1144,
                'area' => 'Talavera',
                'zip_code' => 3114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            488 => 
            array (
                'id' => 989,
                'city_id' => 1146,
                'area' => 'Zaragoza',
                'zip_code' => 3110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            489 => 
            array (
                'id' => 990,
                'city_id' => 1148,
                'area' => 'Ambaguio',
                'zip_code' => 3701,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            490 => 
            array (
                'id' => 991,
                'city_id' => 1149,
                'area' => 'Aritao',
                'zip_code' => 3704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            491 => 
            array (
                'id' => 992,
                'city_id' => 1150,
                'area' => 'Bagabag',
                'zip_code' => 3711,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            492 => 
            array (
                'id' => 993,
                'city_id' => 1151,
                'area' => 'Bambang',
                'zip_code' => 3702,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            493 => 
            array (
                'id' => 994,
                'city_id' => 1152,
                'area' => 'Bayombong',
                'zip_code' => 3700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            494 => 
            array (
                'id' => 995,
                'city_id' => 1153,
                'area' => 'Diadi',
                'zip_code' => 3712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            495 => 
            array (
                'id' => 996,
                'city_id' => 1154,
                'area' => 'Dupax del Norte',
                'zip_code' => 3706,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            496 => 
            array (
                'id' => 997,
                'city_id' => 1155,
                'area' => 'Dupax del Sur',
                'zip_code' => 3707,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            497 => 
            array (
                'id' => 998,
                'city_id' => 1156,
                'area' => 'Kasibu',
                'zip_code' => 3703,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            498 => 
            array (
                'id' => 999,
                'city_id' => 1157,
                'area' => 'Kayapa',
                'zip_code' => 3708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            499 => 
            array (
                'id' => 1000,
                'city_id' => 1158,
                'area' => 'Quezon',
                'zip_code' => 3714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
        ));
        App\Models\Area::insert(array (
            0 => 
            array (
                'id' => 1001,
                'city_id' => 1160,
                'area' => 'Solano',
                'zip_code' => 3709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            1 => 
            array (
                'id' => 1002,
                'city_id' => 1162,
                'area' => 'Abra de Ilog',
                'zip_code' => 5108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            2 => 
            array (
                'id' => 1003,
                'city_id' => 1163,
                'area' => 'Calintaan',
                'zip_code' => 5102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            3 => 
            array (
                'id' => 1004,
                'city_id' => 1164,
                'area' => 'Looc',
                'zip_code' => 5111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            4 => 
            array (
                'id' => 1005,
                'city_id' => 1165,
                'area' => 'Lubang',
                'zip_code' => 5109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            5 => 
            array (
                'id' => 1006,
                'city_id' => 1166,
                'area' => 'Magsaysay',
                'zip_code' => 5101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            6 => 
            array (
                'id' => 1007,
                'city_id' => 1167,
                'area' => 'Mamburao',
                'zip_code' => 5106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            7 => 
            array (
                'id' => 1008,
                'city_id' => 1168,
                'area' => 'Paluan',
                'zip_code' => 5107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            8 => 
            array (
                'id' => 1009,
                'city_id' => 1169,
                'area' => 'Rizal',
                'zip_code' => 5103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            9 => 
            array (
                'id' => 1010,
                'city_id' => 1170,
                'area' => 'Sablayan',
                'zip_code' => 5104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            10 => 
            array (
                'id' => 1011,
                'city_id' => 1171,
                'area' => 'San Jose',
                'zip_code' => 5100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            11 => 
            array (
                'id' => 1012,
                'city_id' => 1172,
                'area' => 'Santa Cruz',
                'zip_code' => 5105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            12 => 
            array (
                'id' => 1013,
                'city_id' => 1174,
                'area' => 'Baco',
                'zip_code' => 5201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            13 => 
            array (
                'id' => 1014,
                'city_id' => 1175,
                'area' => 'Bansud',
                'zip_code' => 5210,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            14 => 
            array (
                'id' => 1015,
                'city_id' => 1177,
                'area' => 'Bulalacao',
                'zip_code' => 5214,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            15 => 
            array (
                'id' => 1016,
                'city_id' => 1178,
                'area' => 'Gloria',
                'zip_code' => 5209,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            16 => 
            array (
                'id' => 1017,
                'city_id' => 1179,
                'area' => 'Mansalay',
                'zip_code' => 5213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            17 => 
            array (
                'id' => 1018,
                'city_id' => 1180,
                'area' => 'Naujan',
                'zip_code' => 5204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            18 => 
            array (
                'id' => 1019,
                'city_id' => 1181,
                'area' => 'Pinamalayan',
                'zip_code' => 5208,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            19 => 
            array (
                'id' => 1020,
                'city_id' => 1182,
                'area' => 'Pola',
                'zip_code' => 5206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            20 => 
            array (
                'id' => 1021,
                'city_id' => 1183,
                'area' => 'Puerto Galera',
                'zip_code' => 5203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            21 => 
            array (
                'id' => 1022,
                'city_id' => 1184,
                'area' => 'Roxas',
                'zip_code' => 5212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            22 => 
            array (
                'id' => 1023,
                'city_id' => 1185,
                'area' => 'San Teodoro',
                'zip_code' => 5202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            23 => 
            array (
                'id' => 1024,
                'city_id' => 1186,
                'area' => 'Socorro',
                'zip_code' => 5207,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            24 => 
            array (
                'id' => 1025,
                'city_id' => 1187,
                'area' => 'Victoria',
                'zip_code' => 5205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            25 => 
            array (
                'id' => 1026,
                'city_id' => 1189,
                'area' => 'Aborlan',
                'zip_code' => 5302,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            26 => 
            array (
                'id' => 1027,
                'city_id' => 1190,
                'area' => 'Agutaya',
                'zip_code' => 5320,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            27 => 
            array (
                'id' => 1028,
                'city_id' => 1191,
                'area' => 'Araceli',
                'zip_code' => 5311,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            28 => 
            array (
                'id' => 1029,
                'city_id' => 1192,
                'area' => 'Balabac',
                'zip_code' => 5307,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            29 => 
            array (
                'id' => 1030,
                'city_id' => 1193,
                'area' => 'Bataraza',
                'zip_code' => 5306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            30 => 
            array (
                'id' => 1031,
                'city_id' => 1194,
                'area' => 'Brooke\'s Point',
                'zip_code' => 5305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            31 => 
            array (
                'id' => 1032,
                'city_id' => 1195,
                'area' => 'Busuanga',
                'zip_code' => 5317,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            32 => 
            array (
                'id' => 1033,
                'city_id' => 1196,
                'area' => 'Cagayancillo',
                'zip_code' => 5321,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            33 => 
            array (
                'id' => 1034,
                'city_id' => 1197,
                'area' => 'Coron',
                'zip_code' => 5316,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            34 => 
            array (
                'id' => 1035,
                'city_id' => 1198,
                'area' => 'Culion',
                'zip_code' => 5315,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            35 => 
            array (
                'id' => 1036,
                'city_id' => 1199,
                'area' => 'Cuyo',
                'zip_code' => 5318,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            36 => 
            array (
                'id' => 1037,
                'city_id' => 1200,
                'area' => 'Dumaran',
                'zip_code' => 5310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            37 => 
            array (
                'id' => 1038,
                'city_id' => 1202,
                'area' => 'Kalayaan',
                'zip_code' => 5322,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            38 => 
            array (
                'id' => 1039,
                'city_id' => 1203,
                'area' => 'Linapacan',
                'zip_code' => 5314,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            39 => 
            array (
                'id' => 1040,
                'city_id' => 1204,
                'area' => 'Magsaysay',
                'zip_code' => 5319,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            40 => 
            array (
                'id' => 1041,
                'city_id' => 1206,
                'area' => 'Quezon',
                'zip_code' => 5304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            41 => 
            array (
                'id' => 1042,
                'city_id' => 1208,
                'area' => 'Roxas',
                'zip_code' => 5308,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            42 => 
            array (
                'id' => 1043,
                'city_id' => 1209,
                'area' => 'San Vicente',
                'zip_code' => 5309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            43 => 
            array (
                'id' => 1044,
                'city_id' => 1211,
                'area' => 'Taytay',
                'zip_code' => 5312,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            44 => 
            array (
                'id' => 1045,
                'city_id' => 1213,
                'area' => 'City of San Fernando',
                'zip_code' => 2000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            45 => 
            array (
                'id' => 1046,
                'city_id' => 1214,
                'area' => 'Apalit',
                'zip_code' => 2016,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            46 => 
            array (
                'id' => 1047,
                'city_id' => 1215,
                'area' => 'Arayat',
                'zip_code' => 2012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            47 => 
            array (
                'id' => 1048,
                'city_id' => 1216,
                'area' => 'Bacolor',
                'zip_code' => 2001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            48 => 
            array (
                'id' => 1049,
                'city_id' => 1217,
                'area' => 'Candaba',
                'zip_code' => 2013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            49 => 
            array (
                'id' => 1050,
                'city_id' => 1218,
                'area' => 'Floridablanca',
                'zip_code' => 2006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            50 => 
            array (
                'id' => 1051,
                'city_id' => 1219,
                'area' => 'Guagua',
                'zip_code' => 2003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            51 => 
            array (
                'id' => 1052,
                'city_id' => 1220,
                'area' => 'Lubao',
                'zip_code' => 2005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            52 => 
            array (
                'id' => 1053,
                'city_id' => 1221,
                'area' => 'Mabalacat',
                'zip_code' => 2010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            53 => 
            array (
                'id' => 1054,
                'city_id' => 1222,
                'area' => 'Macabebe',
                'zip_code' => 2018,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            54 => 
            array (
                'id' => 1055,
                'city_id' => 1223,
                'area' => 'Magalang',
                'zip_code' => 2011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            55 => 
            array (
                'id' => 1056,
                'city_id' => 1224,
                'area' => 'Masantol',
                'zip_code' => 2017,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            56 => 
            array (
                'id' => 1057,
                'city_id' => 1225,
                'area' => 'Mexico',
                'zip_code' => 2021,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            57 => 
            array (
                'id' => 1058,
                'city_id' => 1226,
                'area' => 'Minalin',
                'zip_code' => 2019,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            58 => 
            array (
                'id' => 1059,
                'city_id' => 1227,
                'area' => 'Porac',
                'zip_code' => 2008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            59 => 
            array (
                'id' => 1060,
                'city_id' => 1228,
                'area' => 'San Luis',
                'zip_code' => 2014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            60 => 
            array (
                'id' => 1061,
                'city_id' => 1229,
                'area' => 'San Simon',
                'zip_code' => 2015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            61 => 
            array (
                'id' => 1062,
                'city_id' => 1230,
                'area' => 'Santa Ana',
                'zip_code' => 2022,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            62 => 
            array (
                'id' => 1063,
                'city_id' => 1231,
                'area' => 'Santa Rita',
                'zip_code' => 2002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            63 => 
            array (
                'id' => 1064,
                'city_id' => 1232,
                'area' => 'Santo Tomas',
                'zip_code' => 2020,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            64 => 
            array (
                'id' => 1065,
                'city_id' => 1235,
                'area' => 'Dagupan City',
                'zip_code' => 2400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            65 => 
            array (
                'id' => 1066,
                'city_id' => 1236,
                'area' => 'San Carlos City',
                'zip_code' => 2420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            66 => 
            array (
                'id' => 1067,
                'city_id' => 1238,
                'area' => 'Agno',
                'zip_code' => 2408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            67 => 
            array (
                'id' => 1068,
                'city_id' => 1239,
                'area' => 'Aguilar',
                'zip_code' => 2415,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            68 => 
            array (
                'id' => 1069,
                'city_id' => 1240,
                'area' => 'Alcala',
                'zip_code' => 2425,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            69 => 
            array (
                'id' => 1070,
                'city_id' => 1241,
                'area' => 'Anda',
                'zip_code' => 2405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            70 => 
            array (
                'id' => 1071,
                'city_id' => 1242,
                'area' => 'Asingan',
                'zip_code' => 2439,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            71 => 
            array (
                'id' => 1072,
                'city_id' => 1243,
                'area' => 'Balungao',
                'zip_code' => 2442,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            72 => 
            array (
                'id' => 1073,
                'city_id' => 1244,
                'area' => 'Bani',
                'zip_code' => 2407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            73 => 
            array (
                'id' => 1074,
                'city_id' => 1245,
                'area' => 'Basista',
                'zip_code' => 2422,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            74 => 
            array (
                'id' => 1075,
                'city_id' => 1246,
                'area' => 'Bautista',
                'zip_code' => 2424,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            75 => 
            array (
                'id' => 1076,
                'city_id' => 1247,
                'area' => 'Bayambang',
                'zip_code' => 2423,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            76 => 
            array (
                'id' => 1077,
                'city_id' => 1248,
                'area' => 'Binalonan',
                'zip_code' => 2436,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            77 => 
            array (
                'id' => 1078,
                'city_id' => 1249,
                'area' => 'Binmaley',
                'zip_code' => 2417,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            78 => 
            array (
                'id' => 1079,
                'city_id' => 1250,
                'area' => 'Bolinao',
                'zip_code' => 2406,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            79 => 
            array (
                'id' => 1080,
                'city_id' => 1251,
                'area' => 'Bugallon',
                'zip_code' => 2416,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            80 => 
            array (
                'id' => 1081,
                'city_id' => 1252,
                'area' => 'Burgos',
                'zip_code' => 2410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            81 => 
            array (
                'id' => 1082,
                'city_id' => 1253,
                'area' => 'Calasiao',
                'zip_code' => 2418,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            82 => 
            array (
                'id' => 1083,
                'city_id' => 1254,
                'area' => 'Dasol',
                'zip_code' => 2411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            83 => 
            array (
                'id' => 1084,
                'city_id' => 1255,
                'area' => 'Infanta',
                'zip_code' => 2412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            84 => 
            array (
                'id' => 1085,
                'city_id' => 1256,
                'area' => 'Labrador',
                'zip_code' => 2402,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            85 => 
            array (
                'id' => 1086,
                'city_id' => 1257,
                'area' => 'Laoac',
                'zip_code' => 2437,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            86 => 
            array (
                'id' => 1087,
                'city_id' => 1258,
                'area' => 'Lingayen',
                'zip_code' => 2401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            87 => 
            array (
                'id' => 1088,
                'city_id' => 1259,
                'area' => 'Mabini',
                'zip_code' => 2409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            88 => 
            array (
                'id' => 1089,
                'city_id' => 1260,
                'area' => 'Malasiqui',
                'zip_code' => 2421,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            89 => 
            array (
                'id' => 1090,
                'city_id' => 1261,
                'area' => 'Manaoag',
                'zip_code' => 2430,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            90 => 
            array (
                'id' => 1091,
                'city_id' => 1262,
                'area' => 'Mangaldan',
                'zip_code' => 2432,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            91 => 
            array (
                'id' => 1092,
                'city_id' => 1263,
                'area' => 'Mangatarem',
                'zip_code' => 2413,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            92 => 
            array (
                'id' => 1093,
                'city_id' => 1264,
                'area' => 'Mapandan',
                'zip_code' => 2429,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            93 => 
            array (
                'id' => 1094,
                'city_id' => 1265,
                'area' => 'Natividad',
                'zip_code' => 2446,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            94 => 
            array (
                'id' => 1095,
                'city_id' => 1267,
                'area' => 'Rosales',
                'zip_code' => 2441,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            95 => 
            array (
                'id' => 1096,
                'city_id' => 1268,
                'area' => 'San Fabian',
                'zip_code' => 2433,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            96 => 
            array (
                'id' => 1097,
                'city_id' => 1269,
                'area' => 'San Jacinto',
                'zip_code' => 2431,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            97 => 
            array (
                'id' => 1098,
                'city_id' => 1270,
                'area' => 'San Manuel',
                'zip_code' => 2438,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            98 => 
            array (
                'id' => 1099,
                'city_id' => 1271,
                'area' => 'San Nicolas',
                'zip_code' => 2447,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            99 => 
            array (
                'id' => 1100,
                'city_id' => 1272,
                'area' => 'San Quintin',
                'zip_code' => 2444,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            100 => 
            array (
                'id' => 1101,
                'city_id' => 1273,
                'area' => 'Santa Barbara',
                'zip_code' => 2419,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            101 => 
            array (
                'id' => 1102,
                'city_id' => 1274,
                'area' => 'Santa Maria',
                'zip_code' => 2440,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            102 => 
            array (
                'id' => 1103,
                'city_id' => 1275,
                'area' => 'Santo Tomas',
                'zip_code' => 2426,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            103 => 
            array (
                'id' => 1104,
                'city_id' => 1276,
                'area' => 'Sison',
                'zip_code' => 2434,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            104 => 
            array (
                'id' => 1105,
                'city_id' => 1277,
                'area' => 'Sual',
                'zip_code' => 2403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            105 => 
            array (
                'id' => 1106,
                'city_id' => 1278,
                'area' => 'Tayug',
                'zip_code' => 2445,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            106 => 
            array (
                'id' => 1107,
                'city_id' => 1279,
                'area' => 'Umingan',
                'zip_code' => 2443,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            107 => 
            array (
                'id' => 1108,
                'city_id' => 1280,
                'area' => 'Urbiztondo',
                'zip_code' => 2414,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            108 => 
            array (
                'id' => 1109,
                'city_id' => 1281,
                'area' => 'Villasis',
                'zip_code' => 2427,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            109 => 
            array (
                'id' => 1110,
                'city_id' => 1282,
                'area' => 'Lucena City',
                'zip_code' => 4301,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            110 => 
            array (
                'id' => 1111,
                'city_id' => 1284,
                'area' => 'Agdangan',
                'zip_code' => 4304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            111 => 
            array (
                'id' => 1112,
                'city_id' => 1285,
                'area' => 'Alabat',
                'zip_code' => 4333,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            112 => 
            array (
                'id' => 1113,
                'city_id' => 1286,
                'area' => 'Atimonan',
                'zip_code' => 4331,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            113 => 
            array (
                'id' => 1114,
                'city_id' => 1287,
                'area' => 'Buenavista',
                'zip_code' => 4320,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            114 => 
            array (
                'id' => 1115,
                'city_id' => 1288,
                'area' => 'Burdeos',
                'zip_code' => 4340,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            115 => 
            array (
                'id' => 1116,
                'city_id' => 1289,
                'area' => 'Calauag',
                'zip_code' => 4318,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            116 => 
            array (
                'id' => 1117,
                'city_id' => 1290,
                'area' => 'Candelaria',
                'zip_code' => 4323,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            117 => 
            array (
                'id' => 1118,
                'city_id' => 1291,
                'area' => 'Catanauan',
                'zip_code' => 4311,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            118 => 
            array (
                'id' => 1119,
                'city_id' => 1292,
                'area' => 'Dolores',
                'zip_code' => 4326,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            119 => 
            array (
                'id' => 1120,
                'city_id' => 1294,
                'area' => 'General Nakar',
                'zip_code' => 4338,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            120 => 
            array (
                'id' => 1121,
                'city_id' => 1295,
                'area' => 'Guinayangan',
                'zip_code' => 4319,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            121 => 
            array (
                'id' => 1122,
                'city_id' => 1296,
                'area' => 'Gumaca',
                'zip_code' => 4307,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            122 => 
            array (
                'id' => 1123,
                'city_id' => 1297,
                'area' => 'Infanta',
                'zip_code' => 4336,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            123 => 
            array (
                'id' => 1124,
                'city_id' => 1298,
                'area' => 'Jomalig',
                'zip_code' => 4342,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            124 => 
            array (
                'id' => 1125,
                'city_id' => 1299,
                'area' => 'Lopez',
                'zip_code' => 4316,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            125 => 
            array (
                'id' => 1126,
                'city_id' => 1300,
                'area' => 'Lucban',
                'zip_code' => 4328,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            126 => 
            array (
                'id' => 1127,
                'city_id' => 1301,
                'area' => 'Macalelon',
                'zip_code' => 4309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            127 => 
            array (
                'id' => 1128,
                'city_id' => 1302,
                'area' => 'Mauban',
                'zip_code' => 4330,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            128 => 
            array (
                'id' => 1129,
                'city_id' => 1303,
                'area' => 'Mulanay',
                'zip_code' => 4312,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            129 => 
            array (
                'id' => 1130,
                'city_id' => 1304,
                'area' => 'Padre Burgos',
                'zip_code' => 4303,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            130 => 
            array (
                'id' => 1131,
                'city_id' => 1305,
                'area' => 'Pagbilao',
                'zip_code' => 4302,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            131 => 
            array (
                'id' => 1132,
                'city_id' => 1306,
                'area' => 'Panukulan',
                'zip_code' => 4337,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            132 => 
            array (
                'id' => 1133,
                'city_id' => 1307,
                'area' => 'Patnanungan',
                'zip_code' => 4341,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            133 => 
            array (
                'id' => 1134,
                'city_id' => 1308,
                'area' => 'Perez',
                'zip_code' => 4334,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            134 => 
            array (
                'id' => 1135,
                'city_id' => 1309,
                'area' => 'Pitogo',
                'zip_code' => 4308,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            135 => 
            array (
                'id' => 1136,
                'city_id' => 1310,
                'area' => 'Plaridel',
                'zip_code' => 4306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            136 => 
            array (
                'id' => 1137,
                'city_id' => 1312,
                'area' => 'Quezon',
                'zip_code' => 4332,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            137 => 
            array (
                'id' => 1138,
                'city_id' => 1313,
                'area' => 'Real',
                'zip_code' => 4335,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            138 => 
            array (
                'id' => 1139,
                'city_id' => 1314,
                'area' => 'Sampaloc',
                'zip_code' => 4329,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            139 => 
            array (
                'id' => 1140,
                'city_id' => 1315,
                'area' => 'San Andres',
                'zip_code' => 4314,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            140 => 
            array (
                'id' => 1141,
                'city_id' => 1316,
                'area' => 'San Antonio',
                'zip_code' => 4324,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            141 => 
            array (
                'id' => 1142,
                'city_id' => 1318,
                'area' => 'San Narciso',
                'zip_code' => 4313,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            142 => 
            array (
                'id' => 1143,
                'city_id' => 1319,
                'area' => 'Sariaya',
                'zip_code' => 4322,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            143 => 
            array (
                'id' => 1144,
                'city_id' => 1320,
                'area' => 'Tagkawayan',
                'zip_code' => 4321,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            144 => 
            array (
                'id' => 1145,
                'city_id' => 1321,
                'area' => 'Tiaong',
                'zip_code' => 4325,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            145 => 
            array (
                'id' => 1146,
                'city_id' => 1322,
                'area' => 'Unisan',
                'zip_code' => 4305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            146 => 
            array (
                'id' => 1147,
                'city_id' => 1323,
                'area' => 'Aglipay',
                'zip_code' => 3403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            147 => 
            array (
                'id' => 1148,
                'city_id' => 1324,
                'area' => 'Cabarroguis',
                'zip_code' => 3400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            148 => 
            array (
                'id' => 1149,
                'city_id' => 1325,
                'area' => 'Diffun',
                'zip_code' => 3401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            149 => 
            array (
                'id' => 1150,
                'city_id' => 1326,
                'area' => 'Maddela',
                'zip_code' => 3404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            150 => 
            array (
                'id' => 1151,
                'city_id' => 1328,
                'area' => 'Saguday',
                'zip_code' => 3402,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            151 => 
            array (
                'id' => 1152,
                'city_id' => 1329,
                'area' => 'Antipolo City',
                'zip_code' => 1870,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            152 => 
            array (
                'id' => 1153,
                'city_id' => 1330,
                'area' => 'Angono',
                'zip_code' => 1930,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            153 => 
            array (
                'id' => 1154,
                'city_id' => 1331,
                'area' => 'Baras',
                'zip_code' => 1970,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            154 => 
            array (
                'id' => 1155,
                'city_id' => 1332,
                'area' => 'Binangonan',
                'zip_code' => 1940,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            155 => 
            array (
                'id' => 1156,
                'city_id' => 1333,
                'area' => 'Cainta',
                'zip_code' => 1900,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            156 => 
            array (
                'id' => 1157,
                'city_id' => 1334,
                'area' => 'Cardona',
                'zip_code' => 1950,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            157 => 
            array (
                'id' => 1158,
                'city_id' => 1335,
                'area' => 'Jalajala',
                'zip_code' => 1900,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            158 => 
            array (
                'id' => 1159,
                'city_id' => 1336,
                'area' => 'Morong',
                'zip_code' => 1960,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            159 => 
            array (
                'id' => 1160,
                'city_id' => 1337,
                'area' => 'Pililla',
                'zip_code' => 1910,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            160 => 
            array (
                'id' => 1161,
                'city_id' => 1338,
                'area' => 'Rodriguez',
                'zip_code' => 1860,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            161 => 
            array (
                'id' => 1162,
                'city_id' => 1339,
                'area' => 'San Mateo',
                'zip_code' => 1850,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            162 => 
            array (
                'id' => 1163,
                'city_id' => 1340,
                'area' => 'Tanay',
                'zip_code' => 1980,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            163 => 
            array (
                'id' => 1164,
                'city_id' => 1341,
                'area' => 'Taytay',
                'zip_code' => 1920,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            164 => 
            array (
                'id' => 1165,
                'city_id' => 1342,
                'area' => 'Teresa',
                'zip_code' => 1880,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            165 => 
            array (
                'id' => 1166,
                'city_id' => 1343,
                'area' => 'Alcantara',
                'zip_code' => 5509,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            166 => 
            array (
                'id' => 1167,
                'city_id' => 1345,
                'area' => 'Cajidiocan',
                'zip_code' => 5512,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            167 => 
            array (
                'id' => 1168,
                'city_id' => 1346,
                'area' => 'Calatrava',
                'zip_code' => 5503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            168 => 
            array (
                'id' => 1169,
                'city_id' => 1347,
                'area' => 'Concepcion',
                'zip_code' => 5516,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            169 => 
            array (
                'id' => 1170,
                'city_id' => 1348,
                'area' => 'Corcuera',
                'zip_code' => 5514,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            170 => 
            array (
                'id' => 1171,
                'city_id' => 1349,
                'area' => 'Ferrol',
                'zip_code' => 5506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            171 => 
            array (
                'id' => 1172,
                'city_id' => 1350,
                'area' => 'Looc',
                'zip_code' => 5507,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            172 => 
            array (
                'id' => 1173,
                'city_id' => 1351,
                'area' => 'Magdiwang',
                'zip_code' => 5511,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            173 => 
            array (
                'id' => 1174,
                'city_id' => 1352,
                'area' => 'Odiongan',
                'zip_code' => 5505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            174 => 
            array (
                'id' => 1175,
                'city_id' => 1353,
                'area' => 'Romblon',
                'zip_code' => 5500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            175 => 
            array (
                'id' => 1176,
                'city_id' => 1354,
                'area' => 'San Agustin',
                'zip_code' => 5501,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            176 => 
            array (
                'id' => 1177,
                'city_id' => 1355,
                'area' => 'San Andres',
                'zip_code' => 5504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            177 => 
            array (
                'id' => 1178,
                'city_id' => 1356,
                'area' => 'San Fernando',
                'zip_code' => 5513,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            178 => 
            array (
                'id' => 1179,
                'city_id' => 1357,
                'area' => 'San Jose',
                'zip_code' => 5510,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            179 => 
            array (
                'id' => 1180,
                'city_id' => 1358,
                'area' => 'Santa Fe',
                'zip_code' => 5508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            180 => 
            array (
                'id' => 1181,
                'city_id' => 1386,
                'area' => 'Alabel',
                'zip_code' => 9501,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            181 => 
            array (
                'id' => 1182,
                'city_id' => 1387,
                'area' => 'Glan',
                'zip_code' => 9517,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            182 => 
            array (
                'id' => 1183,
                'city_id' => 1388,
                'area' => 'Kiamba',
                'zip_code' => 9514,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            183 => 
            array (
                'id' => 1184,
                'city_id' => 1389,
                'area' => 'Maasim',
                'zip_code' => 9502,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            184 => 
            array (
                'id' => 1185,
                'city_id' => 1390,
                'area' => 'Maitum',
                'zip_code' => 9515,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            185 => 
            array (
                'id' => 1186,
                'city_id' => 1391,
                'area' => 'Malapatan',
                'zip_code' => 9516,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            186 => 
            array (
                'id' => 1187,
                'city_id' => 1392,
                'area' => 'Malungon',
                'zip_code' => 9503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            187 => 
            array (
                'id' => 1188,
                'city_id' => 1393,
                'area' => 'Enrique Villanueva',
                'zip_code' => 6230,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            188 => 
            array (
                'id' => 1189,
                'city_id' => 1394,
                'area' => 'Larena',
                'zip_code' => 6226,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            189 => 
            array (
                'id' => 1190,
                'city_id' => 1395,
                'area' => 'Lazi',
                'zip_code' => 6228,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            190 => 
            array (
                'id' => 1191,
                'city_id' => 1396,
                'area' => 'Maria',
                'zip_code' => 6229,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            191 => 
            array (
                'id' => 1192,
                'city_id' => 1397,
                'area' => 'San Juan',
                'zip_code' => 6227,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            192 => 
            array (
                'id' => 1193,
                'city_id' => 1400,
                'area' => 'Barcelona',
                'zip_code' => 4712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            193 => 
            array (
                'id' => 1194,
                'city_id' => 1401,
                'area' => 'Bulan',
                'zip_code' => 4706,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            194 => 
            array (
                'id' => 1195,
                'city_id' => 1402,
                'area' => 'Bulusan',
                'zip_code' => 4704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            195 => 
            array (
                'id' => 1196,
                'city_id' => 1403,
                'area' => 'Casiguran',
                'zip_code' => 4702,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            196 => 
            array (
                'id' => 1197,
                'city_id' => 1404,
                'area' => 'Castilla',
                'zip_code' => 4713,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            197 => 
            array (
                'id' => 1198,
                'city_id' => 1405,
                'area' => 'Donsol',
                'zip_code' => 4715,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            198 => 
            array (
                'id' => 1199,
                'city_id' => 1406,
                'area' => 'Gubat',
                'zip_code' => 4710,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            199 => 
            array (
                'id' => 1200,
                'city_id' => 1407,
                'area' => 'Irosin',
                'zip_code' => 4707,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            200 => 
            array (
                'id' => 1201,
                'city_id' => 1408,
                'area' => 'Juban',
                'zip_code' => 4703,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            201 => 
            array (
                'id' => 1202,
                'city_id' => 1409,
                'area' => 'Magallanes',
                'zip_code' => 4705,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            202 => 
            array (
                'id' => 1203,
                'city_id' => 1410,
                'area' => 'Matnog',
                'zip_code' => 4708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            203 => 
            array (
                'id' => 1204,
                'city_id' => 1411,
                'area' => 'Pilar',
                'zip_code' => 4714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            204 => 
            array (
                'id' => 1205,
                'city_id' => 1412,
                'area' => 'Prieto Diaz',
                'zip_code' => 4711,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            205 => 
            array (
                'id' => 1206,
                'city_id' => 1413,
                'area' => 'Santa Magdalena',
                'zip_code' => 4709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            206 => 
            array (
                'id' => 1207,
                'city_id' => 1415,
                'area' => 'Koronadal City',
                'zip_code' => 9506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            207 => 
            array (
                'id' => 1208,
                'city_id' => 1416,
                'area' => 'Banga',
                'zip_code' => 9511,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            208 => 
            array (
                'id' => 1209,
                'city_id' => 1418,
                'area' => 'Norala',
                'zip_code' => 9508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            209 => 
            array (
                'id' => 1210,
                'city_id' => 1419,
                'area' => 'Polomolok',
                'zip_code' => 9504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            210 => 
            array (
                'id' => 1211,
                'city_id' => 1421,
                'area' => 'Surallah',
                'zip_code' => 9512,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            211 => 
            array (
                'id' => 1212,
                'city_id' => 1423,
                'area' => 'Tampakan',
                'zip_code' => 9507,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            212 => 
            array (
                'id' => 1213,
                'city_id' => 1424,
                'area' => 'Tantangan',
                'zip_code' => 9510,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            213 => 
            array (
                'id' => 1214,
                'city_id' => 1425,
                'area' => 'Tupi',
                'zip_code' => 9505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            214 => 
            array (
                'id' => 1215,
                'city_id' => 1427,
                'area' => 'Anahawan',
                'zip_code' => 6610,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            215 => 
            array (
                'id' => 1216,
                'city_id' => 1428,
                'area' => 'Bontoc',
                'zip_code' => 6604,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            216 => 
            array (
                'id' => 1217,
                'city_id' => 1429,
                'area' => 'Hinunangan',
                'zip_code' => 6608,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            217 => 
            array (
                'id' => 1218,
                'city_id' => 1430,
                'area' => 'Hinundayan',
                'zip_code' => 6609,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            218 => 
            array (
                'id' => 1219,
                'city_id' => 1431,
                'area' => 'Libagon',
                'zip_code' => 6615,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            219 => 
            array (
                'id' => 1220,
                'city_id' => 1432,
                'area' => 'Liloan',
                'zip_code' => 6612,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            220 => 
            array (
                'id' => 1221,
                'city_id' => 1434,
                'area' => 'Macrohon',
                'zip_code' => 6601,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            221 => 
            array (
                'id' => 1222,
                'city_id' => 1435,
                'area' => 'Malitbog',
                'zip_code' => 6603,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            222 => 
            array (
                'id' => 1223,
                'city_id' => 1436,
                'area' => 'Padre Burgos',
                'zip_code' => 6602,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            223 => 
            array (
                'id' => 1224,
                'city_id' => 1437,
                'area' => 'Pintuyan',
                'zip_code' => 6614,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            224 => 
            array (
                'id' => 1225,
                'city_id' => 1439,
                'area' => 'San Francisco',
                'zip_code' => 6613,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            225 => 
            array (
                'id' => 1226,
                'city_id' => 1441,
                'area' => 'San Ricardo',
                'zip_code' => 6617,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            226 => 
            array (
                'id' => 1227,
                'city_id' => 1442,
                'area' => 'Silago',
                'zip_code' => 6607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            227 => 
            array (
                'id' => 1228,
                'city_id' => 1443,
                'area' => 'Sogod',
                'zip_code' => 6606,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            228 => 
            array (
                'id' => 1229,
                'city_id' => 1444,
                'area' => 'Tomas Oppus',
                'zip_code' => 6605,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            229 => 
            array (
                'id' => 1230,
                'city_id' => 1446,
                'area' => 'Bagumbayan',
                'zip_code' => 9810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            230 => 
            array (
                'id' => 1231,
                'city_id' => 1447,
                'area' => 'Columbio',
                'zip_code' => 9801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            231 => 
            array (
                'id' => 1232,
                'city_id' => 1449,
                'area' => 'Isulan',
                'zip_code' => 9805,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            232 => 
            array (
                'id' => 1233,
                'city_id' => 1450,
                'area' => 'Kalamansig',
                'zip_code' => 9808,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            233 => 
            array (
                'id' => 1234,
                'city_id' => 1453,
                'area' => 'Lutayan',
                'zip_code' => 9803,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            234 => 
            array (
                'id' => 1235,
                'city_id' => 1454,
                'area' => 'Palimbang',
                'zip_code' => 9809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            235 => 
            array (
                'id' => 1236,
                'city_id' => 1459,
                'area' => 'Indanan',
                'zip_code' => 7407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            236 => 
            array (
                'id' => 1237,
                'city_id' => 1460,
                'area' => 'Jolo',
                'zip_code' => 7400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            237 => 
            array (
                'id' => 1238,
                'city_id' => 1462,
                'area' => 'Lugus',
                'zip_code' => 7411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            238 => 
            array (
                'id' => 1239,
                'city_id' => 1463,
                'area' => 'Luuk',
                'zip_code' => 7404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            239 => 
            array (
                'id' => 1240,
                'city_id' => 1464,
                'area' => 'Maimbung',
                'zip_code' => 7409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            240 => 
            array (
                'id' => 1241,
                'city_id' => 1468,
                'area' => 'Panglima Estino',
                'zip_code' => 7415,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            241 => 
            array (
                'id' => 1242,
                'city_id' => 1470,
                'area' => 'Parang',
                'zip_code' => 7408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            242 => 
            array (
                'id' => 1243,
                'city_id' => 1471,
                'area' => 'Pata',
                'zip_code' => 7405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            243 => 
            array (
                'id' => 1244,
                'city_id' => 1472,
                'area' => 'Patikul',
                'zip_code' => 7401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            244 => 
            array (
                'id' => 1245,
                'city_id' => 1473,
                'area' => 'Siasi',
                'zip_code' => 7412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            245 => 
            array (
                'id' => 1246,
                'city_id' => 1474,
                'area' => 'Talipao',
                'zip_code' => 7403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            246 => 
            array (
                'id' => 1247,
                'city_id' => 1475,
                'area' => 'Tapul',
                'zip_code' => 7410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            247 => 
            array (
                'id' => 1248,
                'city_id' => 1476,
                'area' => 'Surigao City',
                'zip_code' => 8400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            248 => 
            array (
                'id' => 1249,
                'city_id' => 1477,
                'area' => 'Alegria',
                'zip_code' => 8425,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            249 => 
            array (
                'id' => 1250,
                'city_id' => 1478,
                'area' => 'Bacuag',
                'zip_code' => 8408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            250 => 
            array (
                'id' => 1251,
                'city_id' => 1480,
                'area' => 'Burgos',
                'zip_code' => 8424,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            251 => 
            array (
                'id' => 1252,
                'city_id' => 1482,
                'area' => 'Claver',
                'zip_code' => 8410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            252 => 
            array (
                'id' => 1253,
                'city_id' => 1483,
                'area' => 'Dapa',
                'zip_code' => 8417,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            253 => 
            array (
                'id' => 1254,
                'city_id' => 1484,
                'area' => 'Del Carmen',
                'zip_code' => 8418,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            254 => 
            array (
                'id' => 1255,
                'city_id' => 1487,
                'area' => 'Gigaquit',
                'zip_code' => 8409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            255 => 
            array (
                'id' => 1256,
                'city_id' => 1490,
                'area' => 'Mainit',
                'zip_code' => 8407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            256 => 
            array (
                'id' => 1257,
                'city_id' => 1492,
                'area' => 'Pilar',
                'zip_code' => 8420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            257 => 
            array (
                'id' => 1258,
                'city_id' => 1493,
                'area' => 'Placer',
                'zip_code' => 8405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            258 => 
            array (
                'id' => 1259,
                'city_id' => 1494,
                'area' => 'San Benito',
                'zip_code' => 8423,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            259 => 
            array (
                'id' => 1260,
                'city_id' => 1495,
                'area' => 'San Francisco',
                'zip_code' => 8401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            260 => 
            array (
                'id' => 1261,
                'city_id' => 1496,
                'area' => 'San Isidro',
                'zip_code' => 8421,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            261 => 
            array (
                'id' => 1262,
                'city_id' => 1498,
                'area' => 'Santa Monica',
                'zip_code' => 8422,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            262 => 
            array (
                'id' => 1263,
                'city_id' => 1499,
                'area' => 'Sison',
                'zip_code' => 8404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            263 => 
            array (
                'id' => 1264,
                'city_id' => 1500,
                'area' => 'Socorro',
                'zip_code' => 8416,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            264 => 
            array (
                'id' => 1265,
                'city_id' => 1501,
                'area' => 'Tagana-an',
                'zip_code' => 8403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            265 => 
            array (
                'id' => 1266,
                'city_id' => 1503,
                'area' => 'Tubod',
                'zip_code' => 8406,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            266 => 
            array (
                'id' => 1267,
                'city_id' => 1506,
                'area' => 'Barobo',
                'zip_code' => 8309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            267 => 
            array (
                'id' => 1268,
                'city_id' => 1507,
                'area' => 'Bayabas',
                'zip_code' => 8303,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            268 => 
            array (
                'id' => 1269,
                'city_id' => 1508,
                'area' => 'Cagwait',
                'zip_code' => 8304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            269 => 
            array (
                'id' => 1270,
                'city_id' => 1510,
                'area' => 'Carmen',
                'zip_code' => 8315,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            270 => 
            array (
                'id' => 1271,
                'city_id' => 1511,
                'area' => 'Carrascal',
                'zip_code' => 8318,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            271 => 
            array (
                'id' => 1272,
                'city_id' => 1513,
                'area' => 'Hinatuan',
                'zip_code' => 8310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            272 => 
            array (
                'id' => 1273,
                'city_id' => 1514,
                'area' => 'Lanuza',
                'zip_code' => 8314,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            273 => 
            array (
                'id' => 1274,
                'city_id' => 1515,
                'area' => 'Lianga',
                'zip_code' => 8307,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            274 => 
            array (
                'id' => 1275,
                'city_id' => 1516,
                'area' => 'Lingig',
                'zip_code' => 8312,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            275 => 
            array (
                'id' => 1276,
                'city_id' => 1517,
                'area' => 'Madrid',
                'zip_code' => 8316,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            276 => 
            array (
                'id' => 1277,
                'city_id' => 1518,
                'area' => 'Marihatag',
                'zip_code' => 8306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            277 => 
            array (
                'id' => 1278,
                'city_id' => 1519,
                'area' => 'San Agustin',
                'zip_code' => 8305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            278 => 
            array (
                'id' => 1279,
                'city_id' => 1520,
                'area' => 'San Miguel',
                'zip_code' => 8301,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            279 => 
            array (
                'id' => 1280,
                'city_id' => 1521,
                'area' => 'Tagbina',
                'zip_code' => 8308,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            280 => 
            array (
                'id' => 1281,
                'city_id' => 1522,
                'area' => 'Tago',
                'zip_code' => 8302,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            281 => 
            array (
                'id' => 1282,
                'city_id' => 1523,
                'area' => 'Tarlac City',
                'zip_code' => 2300,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            282 => 
            array (
                'id' => 1283,
                'city_id' => 1524,
                'area' => 'Anao',
                'zip_code' => 2310,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            283 => 
            array (
                'id' => 1284,
                'city_id' => 1525,
                'area' => 'Bamban',
                'zip_code' => 2317,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            284 => 
            array (
                'id' => 1285,
                'city_id' => 1526,
                'area' => 'Camiling',
                'zip_code' => 2306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            285 => 
            array (
                'id' => 1286,
                'city_id' => 1527,
                'area' => 'Capas',
                'zip_code' => 2333,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            286 => 
            array (
                'id' => 1287,
                'city_id' => 1528,
                'area' => 'Concepcion',
                'zip_code' => 2316,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            287 => 
            array (
                'id' => 1288,
                'city_id' => 1529,
                'area' => 'Gerona',
                'zip_code' => 2302,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            288 => 
            array (
                'id' => 1289,
                'city_id' => 1530,
                'area' => 'La Paz',
                'zip_code' => 2314,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            289 => 
            array (
                'id' => 1290,
                'city_id' => 1531,
                'area' => 'Mayantoc',
                'zip_code' => 2304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            290 => 
            array (
                'id' => 1291,
                'city_id' => 1532,
                'area' => 'Moncada',
                'zip_code' => 2334,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            291 => 
            array (
                'id' => 1292,
                'city_id' => 1534,
                'area' => 'Pura',
                'zip_code' => 2312,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            292 => 
            array (
                'id' => 1293,
                'city_id' => 1535,
                'area' => 'Ramos',
                'zip_code' => 2311,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            293 => 
            array (
                'id' => 1294,
                'city_id' => 1536,
                'area' => 'San Clemente',
                'zip_code' => 2305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            294 => 
            array (
                'id' => 1295,
                'city_id' => 1537,
                'area' => 'San Jose',
                'zip_code' => 2301,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            295 => 
            array (
                'id' => 1296,
                'city_id' => 1538,
                'area' => 'San Manuel',
                'zip_code' => 2309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            296 => 
            array (
                'id' => 1297,
                'city_id' => 1539,
                'area' => 'Santa Ignacia',
                'zip_code' => 2303,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            297 => 
            array (
                'id' => 1298,
                'city_id' => 1540,
                'area' => 'Victoria',
                'zip_code' => 2313,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            298 => 
            array (
                'id' => 1299,
                'city_id' => 1552,
                'area' => 'Olongapo City',
                'zip_code' => 2200,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            299 => 
            array (
                'id' => 1300,
                'city_id' => 1553,
                'area' => 'Botolan',
                'zip_code' => 2202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            300 => 
            array (
                'id' => 1301,
                'city_id' => 1554,
                'area' => 'Cabangan',
                'zip_code' => 2203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            301 => 
            array (
                'id' => 1302,
                'city_id' => 1555,
                'area' => 'Candelaria',
                'zip_code' => 2212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            302 => 
            array (
                'id' => 1303,
                'city_id' => 1556,
                'area' => 'Castillejos',
                'zip_code' => 2208,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            303 => 
            array (
                'id' => 1304,
                'city_id' => 1557,
                'area' => 'Iba',
                'zip_code' => 2201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            304 => 
            array (
                'id' => 1305,
                'city_id' => 1558,
                'area' => 'Masinloc',
                'zip_code' => 2211,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            305 => 
            array (
                'id' => 1306,
                'city_id' => 1560,
                'area' => 'San Antonio',
                'zip_code' => 2206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            306 => 
            array (
                'id' => 1307,
                'city_id' => 1561,
                'area' => 'San Felipe',
                'zip_code' => 2204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            307 => 
            array (
                'id' => 1308,
                'city_id' => 1562,
                'area' => 'San Marcelino',
                'zip_code' => 2207,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            308 => 
            array (
                'id' => 1309,
                'city_id' => 1563,
                'area' => 'San Narciso',
                'zip_code' => 2205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            309 => 
            array (
                'id' => 1310,
                'city_id' => 1564,
                'area' => 'Santa Cruz',
                'zip_code' => 2213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            310 => 
            array (
                'id' => 1311,
                'city_id' => 1565,
                'area' => 'Subic',
                'zip_code' => 2209,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            311 => 
            array (
                'id' => 1312,
                'city_id' => 1566,
                'area' => 'Dapitan City',
                'zip_code' => 7101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            312 => 
            array (
                'id' => 1313,
                'city_id' => 1567,
                'area' => 'Dipolog City',
                'zip_code' => 7100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            313 => 
            array (
                'id' => 1314,
                'city_id' => 1569,
                'area' => 'Baliguian',
                'zip_code' => 7123,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            314 => 
            array (
                'id' => 1315,
                'city_id' => 1571,
                'area' => 'Gutalac',
                'zip_code' => 7118,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            315 => 
            array (
                'id' => 1316,
                'city_id' => 1573,
                'area' => 'Kalawit',
                'zip_code' => 7124,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            316 => 
            array (
                'id' => 1317,
                'city_id' => 1574,
                'area' => 'Katipunan',
                'zip_code' => 7109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            317 => 
            array (
                'id' => 1318,
                'city_id' => 1575,
                'area' => 'La Libertad',
                'zip_code' => 7119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            318 => 
            array (
                'id' => 1319,
                'city_id' => 1576,
                'area' => 'Labason',
                'zip_code' => 7117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            319 => 
            array (
                'id' => 1320,
                'city_id' => 1577,
                'area' => 'Liloy',
                'zip_code' => 7115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            320 => 
            array (
                'id' => 1321,
                'city_id' => 1578,
                'area' => 'Manukan',
                'zip_code' => 7110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            321 => 
            array (
                'id' => 1322,
                'city_id' => 1579,
                'area' => 'Mutia',
                'zip_code' => 7107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            322 => 
            array (
                'id' => 1323,
                'city_id' => 1581,
                'area' => 'Polanco',
                'zip_code' => 7106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            323 => 
            array (
                'id' => 1324,
                'city_id' => 1583,
                'area' => 'Rizal',
                'zip_code' => 7104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            324 => 
            array (
                'id' => 1325,
                'city_id' => 1584,
                'area' => 'Salug',
                'zip_code' => 7114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            325 => 
            array (
                'id' => 1326,
                'city_id' => 1586,
                'area' => 'Siayan',
                'zip_code' => 7113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            326 => 
            array (
                'id' => 1327,
                'city_id' => 1587,
                'area' => 'Sibuco',
                'zip_code' => 7122,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            327 => 
            array (
                'id' => 1328,
                'city_id' => 1588,
                'area' => 'Sibutad',
                'zip_code' => 7103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            328 => 
            array (
                'id' => 1329,
                'city_id' => 1590,
                'area' => 'Siocon',
                'zip_code' => 7120,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            329 => 
            array (
                'id' => 1330,
                'city_id' => 1592,
                'area' => 'Tampilisan',
                'zip_code' => 7116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            330 => 
            array (
                'id' => 1331,
                'city_id' => 1593,
                'area' => 'Pagadian City',
                'zip_code' => 7016,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            331 => 
            array (
                'id' => 1332,
                'city_id' => 1594,
                'area' => 'Zamboanga City',
                'zip_code' => 7000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            332 => 
            array (
                'id' => 1333,
                'city_id' => 1595,
                'area' => 'Aurora',
                'zip_code' => 7020,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            333 => 
            array (
                'id' => 1334,
                'city_id' => 1596,
                'area' => 'Bayog',
                'zip_code' => 7011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            334 => 
            array (
                'id' => 1335,
                'city_id' => 1597,
                'area' => 'Dimataling',
                'zip_code' => 7032,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            335 => 
            array (
                'id' => 1336,
                'city_id' => 1598,
                'area' => 'Dinas',
                'zip_code' => 7030,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            336 => 
            array (
                'id' => 1337,
                'city_id' => 1599,
                'area' => 'Dumalinao',
                'zip_code' => 7015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            337 => 
            array (
                'id' => 1338,
                'city_id' => 1600,
                'area' => 'Dumingag',
                'zip_code' => 7028,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            338 => 
            array (
                'id' => 1339,
                'city_id' => 1601,
                'area' => 'Guipos',
                'zip_code' => 7042,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            339 => 
            array (
                'id' => 1340,
                'city_id' => 1602,
                'area' => 'Josefina',
                'zip_code' => 7027,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            340 => 
            array (
                'id' => 1341,
                'city_id' => 1603,
                'area' => 'Kumalarang',
                'zip_code' => 7005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            341 => 
            array (
                'id' => 1342,
                'city_id' => 1604,
                'area' => 'Labangan',
                'zip_code' => 7017,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            342 => 
            array (
                'id' => 1343,
                'city_id' => 1605,
                'area' => 'Lakewood',
                'zip_code' => 7014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            343 => 
            array (
                'id' => 1344,
                'city_id' => 1606,
                'area' => 'Lapuyan',
                'zip_code' => 7037,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            344 => 
            array (
                'id' => 1345,
                'city_id' => 1607,
                'area' => 'Mahayag',
                'zip_code' => 7026,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            345 => 
            array (
                'id' => 1346,
                'city_id' => 1608,
                'area' => 'Margosatubig',
                'zip_code' => 7035,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            346 => 
            array (
                'id' => 1347,
                'city_id' => 1609,
                'area' => 'Midsalip',
                'zip_code' => 7021,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            347 => 
            array (
                'id' => 1348,
                'city_id' => 1610,
                'area' => 'Molave',
                'zip_code' => 7023,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            348 => 
            array (
                'id' => 1349,
                'city_id' => 1611,
                'area' => 'Pitogo',
                'zip_code' => 7033,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            349 => 
            array (
                'id' => 1350,
                'city_id' => 1613,
                'area' => 'San Miguel',
                'zip_code' => 7029,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            350 => 
            array (
                'id' => 1351,
                'city_id' => 1614,
                'area' => 'San Pablo',
                'zip_code' => 7031,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            351 => 
            array (
                'id' => 1352,
                'city_id' => 1616,
                'area' => 'Tabina',
                'zip_code' => 7034,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            352 => 
            array (
                'id' => 1353,
                'city_id' => 1617,
                'area' => 'Tambulig',
                'zip_code' => 7025,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            353 => 
            array (
                'id' => 1354,
                'city_id' => 1618,
                'area' => 'Tigbao',
                'zip_code' => 7043,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            354 => 
            array (
                'id' => 1355,
                'city_id' => 1619,
                'area' => 'Tukuran',
                'zip_code' => 7019,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            355 => 
            array (
                'id' => 1356,
                'city_id' => 1620,
                'area' => 'Vincenzo A. Sagun',
                'zip_code' => 7036,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            356 => 
            array (
                'id' => 1357,
                'city_id' => 1621,
                'area' => 'Alicia',
                'zip_code' => 7040,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            357 => 
            array (
                'id' => 1358,
                'city_id' => 1622,
                'area' => 'Buug',
                'zip_code' => 7009,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            358 => 
            array (
                'id' => 1359,
                'city_id' => 1623,
                'area' => 'Diplahan',
                'zip_code' => 7039,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            359 => 
            array (
                'id' => 1360,
                'city_id' => 1624,
                'area' => 'Imelda',
                'zip_code' => 7007,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            360 => 
            array (
                'id' => 1361,
                'city_id' => 1625,
                'area' => 'Ipil',
                'zip_code' => 7001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            361 => 
            array (
                'id' => 1362,
                'city_id' => 1626,
                'area' => 'Kabasalan',
                'zip_code' => 7005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            362 => 
            array (
                'id' => 1363,
                'city_id' => 1627,
                'area' => 'Mabuhay',
                'zip_code' => 7010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            363 => 
            array (
                'id' => 1364,
                'city_id' => 1628,
                'area' => 'Malangas',
                'zip_code' => 7038,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            364 => 
            array (
                'id' => 1365,
                'city_id' => 1629,
                'area' => 'Naga',
                'zip_code' => 7004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            365 => 
            array (
                'id' => 1366,
                'city_id' => 1630,
                'area' => 'Olutanga',
                'zip_code' => 7041,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            366 => 
            array (
                'id' => 1367,
                'city_id' => 1631,
                'area' => 'Payao',
                'zip_code' => 7008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            367 => 
            array (
                'id' => 1368,
                'city_id' => 1633,
                'area' => 'Siay',
                'zip_code' => 7006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            368 => 
            array (
                'id' => 1369,
                'city_id' => 1634,
                'area' => 'Talusan',
                'zip_code' => 7012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            369 => 
            array (
                'id' => 1370,
                'city_id' => 1635,
                'area' => 'Titay',
                'zip_code' => 7003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            370 => 
            array (
                'id' => 1371,
                'city_id' => 964,
                'area' => 'Kaybiga/Deparo',
                'zip_code' => 1420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            371 => 
            array (
                'id' => 1372,
                'city_id' => 964,
                'area' => 'Bagumbong/Pag-asa',
                'zip_code' => 1421,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            372 => 
            array (
                'id' => 1373,
                'city_id' => 964,
                'area' => 'Novaliches North',
                'zip_code' => 1422,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            373 => 
            array (
                'id' => 1374,
                'city_id' => 964,
                'area' => 'Lilles Ville Subdivision',
                'zip_code' => 1423,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            374 => 
            array (
                'id' => 1375,
                'city_id' => 964,
                'area' => 'Captol Parkland Subdivision',
                'zip_code' => 1424,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            375 => 
            array (
                'id' => 1376,
                'city_id' => 964,
                'area' => 'Amparo Subdivision',
                'zip_code' => 1425,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            376 => 
            array (
                'id' => 1377,
                'city_id' => 964,
                'area' => 'Bankers Village',
                'zip_code' => 1426,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            377 => 
            array (
                'id' => 1378,
                'city_id' => 964,
                'area' => 'Tala Leprosarium and Victory Heights',
                'zip_code' => 1427,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            378 => 
            array (
                'id' => 1379,
                'city_id' => 964,
                'area' => 'Bagong Silang',
                'zip_code' => 1428,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            379 => 
            array (
                'id' => 1380,
                'city_id' => 964,
                'area' => 'Caloocan City Central Post Office',
                'zip_code' => 1400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            380 => 
            array (
                'id' => 1381,
                'city_id' => 964,
                'area' => 'Baesa',
                'zip_code' => 1401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            381 => 
            array (
                'id' => 1382,
                'city_id' => 964,
                'area' => 'Santa Quiteria',
                'zip_code' => 1402,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            382 => 
            array (
                'id' => 1383,
                'city_id' => 964,
                'area' => 'Grace Park East',
                'zip_code' => 1403,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            383 => 
            array (
                'id' => 1384,
                'city_id' => 964,
                'area' => 'San Jose',
                'zip_code' => 1404,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            384 => 
            array (
                'id' => 1385,
                'city_id' => 964,
                'area' => 'First Avenue to Seventh Avenue West',
                'zip_code' => 1405,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            385 => 
            array (
                'id' => 1386,
                'city_id' => 964,
                'area' => 'Grace Park West',
                'zip_code' => 1406,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            386 => 
            array (
                'id' => 1387,
                'city_id' => 964,
                'area' => 'University Hills',
                'zip_code' => 1407,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            387 => 
            array (
                'id' => 1388,
                'city_id' => 964,
                'area' => 'Sangandaan',
                'zip_code' => 1408,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            388 => 
            array (
                'id' => 1389,
                'city_id' => 964,
            'area' => 'Kaunlaran Village (shared with Malabon City and Navotas)',
                'zip_code' => 1409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            389 => 
            array (
                'id' => 1390,
                'city_id' => 964,
                'area' => 'Maypajo',
                'zip_code' => 1410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            390 => 
            array (
                'id' => 1391,
                'city_id' => 964,
            'area' => 'Fish Market (shared with Navotas)',
                'zip_code' => 1411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            391 => 
            array (
                'id' => 1392,
                'city_id' => 964,
                'area' => 'Isla de Cocomo',
                'zip_code' => 1412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            392 => 
            array (
                'id' => 1393,
                'city_id' => 964,
                'area' => 'Kapitbayahan',
                'zip_code' => 1413,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            393 => 
            array (
                'id' => 1394,
                'city_id' => 965,
                'area' => 'Las Pi?as Central Post Office',
                'zip_code' => 1740,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            394 => 
            array (
                'id' => 1395,
                'city_id' => 965,
                'area' => 'Greymarville Subdivision',
                'zip_code' => 1741,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            395 => 
            array (
                'id' => 1396,
                'city_id' => 965,
                'area' => 'Pulang Lupa and Zapote',
                'zip_code' => 1742,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            396 => 
            array (
                'id' => 1397,
                'city_id' => 965,
                'area' => 'Cut-cut',
                'zip_code' => 1743,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            397 => 
            array (
                'id' => 1398,
                'city_id' => 965,
                'area' => 'Manuyo',
                'zip_code' => 1744,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            398 => 
            array (
                'id' => 1399,
                'city_id' => 965,
                'area' => 'Gatchalian Subdivision',
                'zip_code' => 1745,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            399 => 
            array (
                'id' => 1400,
                'city_id' => 965,
                'area' => 'Verdant Acres Subdivision',
                'zip_code' => 1746,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            400 => 
            array (
                'id' => 1401,
                'city_id' => 965,
                'area' => 'Moonwalk Subdivision and Talon',
                'zip_code' => 1747,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            401 => 
            array (
                'id' => 1402,
                'city_id' => 965,
                'area' => 'Manila Doctors Village',
                'zip_code' => 1748,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            402 => 
            array (
                'id' => 1403,
                'city_id' => 965,
                'area' => 'Angela Village',
                'zip_code' => 1749,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            403 => 
            array (
                'id' => 1404,
                'city_id' => 965,
                'area' => 'Almanza',
                'zip_code' => 1750,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            404 => 
            array (
                'id' => 1405,
                'city_id' => 965,
                'area' => 'T.S. Cruz Subdivision',
                'zip_code' => 1751,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            405 => 
            array (
                'id' => 1406,
                'city_id' => 965,
                'area' => 'Soldiers Hills Subdivision',
                'zip_code' => 1752,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            406 => 
            array (
                'id' => 1407,
                'city_id' => 966,
                'area' => 'Makati Central Post Office',
                'zip_code' => 1200,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            407 => 
            array (
                'id' => 1408,
                'city_id' => 966,
            'area' => 'Fort Bonifacio (now part of Taguig City)',
                'zip_code' => 1201,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            408 => 
            array (
                'id' => 1409,
                'city_id' => 966,
                'area' => 'Fort Bonifacio Naval Station',
                'zip_code' => 1202,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            409 => 
            array (
                'id' => 1410,
                'city_id' => 966,
                'area' => 'San Antonio Village',
                'zip_code' => 1203,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            410 => 
            array (
                'id' => 1411,
                'city_id' => 966,
                'area' => 'La Paz, Singkamas, and Tejeros',
                'zip_code' => 1204,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            411 => 
            array (
                'id' => 1412,
                'city_id' => 966,
                'area' => 'Santa Cruz',
                'zip_code' => 1205,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            412 => 
            array (
                'id' => 1413,
                'city_id' => 966,
                'area' => 'Kasilawan',
                'zip_code' => 1206,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            413 => 
            array (
                'id' => 1414,
                'city_id' => 966,
                'area' => 'Carmona and Olympia',
                'zip_code' => 1207,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            414 => 
            array (
                'id' => 1415,
                'city_id' => 966,
            'area' => 'Valenzuela (includes Rizal, San Miguel, and Santiago Villages)',
                'zip_code' => 1208,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            415 => 
            array (
                'id' => 1416,
                'city_id' => 966,
                'area' => 'Bel-Air',
                'zip_code' => 1209,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            416 => 
            array (
                'id' => 1417,
                'city_id' => 966,
                'area' => 'Poblacion',
                'zip_code' => 1210,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            417 => 
            array (
                'id' => 1418,
                'city_id' => 966,
            'area' => 'Guadalupe Viejo (includes Palm Village)',
                'zip_code' => 1211,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            418 => 
            array (
                'id' => 1419,
                'city_id' => 966,
            'area' => 'Guadalupe Nuevo (includes Visayan Village)',
                'zip_code' => 1212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            419 => 
            array (
                'id' => 1420,
                'city_id' => 966,
                'area' => 'Pinagkaisahan - Pitogo',
                'zip_code' => 1213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            420 => 
            array (
                'id' => 1421,
                'city_id' => 966,
                'area' => 'Cembo',
                'zip_code' => 1214,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            421 => 
            array (
                'id' => 1422,
                'city_id' => 966,
                'area' => 'West Rembo',
                'zip_code' => 1215,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            422 => 
            array (
                'id' => 1423,
                'city_id' => 966,
                'area' => 'East Rembo and Malapad na Bato',
                'zip_code' => 1216,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            423 => 
            array (
                'id' => 1424,
                'city_id' => 966,
                'area' => 'Comembo',
                'zip_code' => 1217,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            424 => 
            array (
                'id' => 1425,
                'city_id' => 966,
                'area' => 'Pembo',
                'zip_code' => 1218,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            425 => 
            array (
                'id' => 1426,
                'city_id' => 966,
                'area' => 'Forbes Park North',
                'zip_code' => 1219,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            426 => 
            array (
                'id' => 1427,
                'city_id' => 966,
                'area' => 'Forbes Park South',
                'zip_code' => 1220,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            427 => 
            array (
                'id' => 1428,
                'city_id' => 966,
                'area' => 'Dasmari?as Village North',
                'zip_code' => 1221,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            428 => 
            array (
                'id' => 1429,
                'city_id' => 966,
                'area' => 'Dasmari?as Village South',
                'zip_code' => 1222,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            429 => 
            array (
                'id' => 1430,
                'city_id' => 966,
                'area' => 'San Lorenzo Village',
                'zip_code' => 1223,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            430 => 
            array (
                'id' => 1431,
                'city_id' => 966,
                'area' => 'Makati Commercial Center',
                'zip_code' => 1224,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            431 => 
            array (
                'id' => 1432,
                'city_id' => 966,
                'area' => 'Urdaneta Village',
                'zip_code' => 1225,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            432 => 
            array (
                'id' => 1433,
                'city_id' => 966,
                'area' => 'Ayala Avenue-Paseo de Roxas',
                'zip_code' => 1226,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            433 => 
            array (
                'id' => 1434,
                'city_id' => 966,
                'area' => 'Salcedo Village',
                'zip_code' => 1227,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            434 => 
            array (
                'id' => 1435,
                'city_id' => 966,
                'area' => 'Greenbelt',
                'zip_code' => 1228,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            435 => 
            array (
                'id' => 1436,
                'city_id' => 966,
                'area' => 'Legaspi Village',
                'zip_code' => 1229,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            436 => 
            array (
                'id' => 1437,
                'city_id' => 966,
                'area' => 'Pio del Pilar',
                'zip_code' => 1230,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            437 => 
            array (
                'id' => 1438,
                'city_id' => 966,
                'area' => 'Pasong Tamo and Ecology Village',
                'zip_code' => 1231,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            438 => 
            array (
                'id' => 1439,
                'city_id' => 966,
                'area' => 'Magallanes Village',
                'zip_code' => 1232,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            439 => 
            array (
                'id' => 1440,
                'city_id' => 966,
                'area' => 'Bangkal',
                'zip_code' => 1233,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            440 => 
            array (
                'id' => 1441,
                'city_id' => 966,
                'area' => 'San Isidro',
                'zip_code' => 1234,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            441 => 
            array (
                'id' => 1442,
                'city_id' => 966,
                'area' => 'Palanan',
                'zip_code' => 1235,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            442 => 
            array (
                'id' => 1443,
                'city_id' => 966,
                'area' => 'Plain-Truth',
                'zip_code' => 700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            443 => 
            array (
                'id' => 1444,
                'city_id' => 966,
                'area' => 'Colgate Palmolive Philippines',
                'zip_code' => 701,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            444 => 
            array (
                'id' => 1445,
                'city_id' => 966,
                'area' => 'Citibank',
                'zip_code' => 702,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            445 => 
            array (
                'id' => 1446,
                'city_id' => 966,
                'area' => 'Sarmiento Enterprises',
                'zip_code' => 703,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            446 => 
            array (
                'id' => 1447,
                'city_id' => 966,
                'area' => 'Producers Bank',
                'zip_code' => 704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            447 => 
            array (
                'id' => 1448,
                'city_id' => 966,
                'area' => 'Union Ajinomoto',
                'zip_code' => 705,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            448 => 
            array (
                'id' => 1449,
                'city_id' => 966,
                'area' => 'Faith Embassy',
                'zip_code' => 706,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            449 => 
            array (
                'id' => 1450,
                'city_id' => 966,
                'area' => 'Canadian Embassy',
                'zip_code' => 707,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            450 => 
            array (
                'id' => 1451,
                'city_id' => 966,
                'area' => 'Philippine National Oil Company',
                'zip_code' => 708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            451 => 
            array (
                'id' => 1452,
                'city_id' => 966,
                'area' => 'A-Z Direct Marketing',
                'zip_code' => 709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            452 => 
            array (
                'id' => 1453,
                'city_id' => 966,
                'area' => 'American Express',
                'zip_code' => 710,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            453 => 
            array (
                'id' => 1454,
                'city_id' => 966,
                'area' => 'Land Bank of the Philippines',
                'zip_code' => 711,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            454 => 
            array (
                'id' => 1455,
                'city_id' => 966,
                'area' => 'Prudential Bank',
                'zip_code' => 712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            455 => 
            array (
                'id' => 1456,
                'city_id' => 966,
                'area' => 'BPI Family Savings Bank',
                'zip_code' => 713,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            456 => 
            array (
                'id' => 1457,
                'city_id' => 966,
                'area' => 'Philippine Manila Mission',
                'zip_code' => 714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            457 => 
            array (
                'id' => 1458,
                'city_id' => 966,
                'area' => 'Marcopper Mining Corporation',
                'zip_code' => 715,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            458 => 
            array (
                'id' => 1459,
                'city_id' => 966,
                'area' => 'Allied Bank',
                'zip_code' => 716,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            459 => 
            array (
                'id' => 1460,
                'city_id' => 966,
                'area' => 'Diners Club',
                'zip_code' => 717,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            460 => 
            array (
                'id' => 1461,
                'city_id' => 966,
                'area' => 'International Center for Aquatic Resources',
                'zip_code' => 718,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            461 => 
            array (
                'id' => 1462,
                'city_id' => 966,
                'area' => 'Security Bank',
                'zip_code' => 719,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            462 => 
            array (
                'id' => 1463,
                'city_id' => 966,
                'area' => 'Bank of the Philippine Islands',
                'zip_code' => 720,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            463 => 
            array (
                'id' => 1464,
                'city_id' => 966,
                'area' => 'Philippine Long Distance Telephone Company',
                'zip_code' => 721,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            464 => 
            array (
                'id' => 1465,
                'city_id' => 966,
                'area' => 'World Executive Digest',
                'zip_code' => 722,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            465 => 
            array (
                'id' => 1466,
                'city_id' => 966,
                'area' => 'Japanese Embassy',
                'zip_code' => 723,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            466 => 
            array (
                'id' => 1467,
                'city_id' => 966,
                'area' => 'Sun Life Financial',
                'zip_code' => 724,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            467 => 
            array (
                'id' => 1468,
                'city_id' => 966,
                'area' => 'Insular Life Assurance Company',
                'zip_code' => 725,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            468 => 
            array (
                'id' => 1469,
                'city_id' => 966,
                'area' => 'Equitable PCI Bank',
                'zip_code' => 726,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            469 => 
            array (
                'id' => 1470,
                'city_id' => 966,
                'area' => 'Rizal Commercial Banking Corporation',
                'zip_code' => 727,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            470 => 
            array (
                'id' => 1471,
                'city_id' => 966,
                'area' => 'United Coconut Planters Bank',
                'zip_code' => 728,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            471 => 
            array (
                'id' => 1472,
                'city_id' => 966,
                'area' => 'Not used',
                'zip_code' => 729,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            472 => 
            array (
                'id' => 1473,
                'city_id' => 966,
                'area' => 'Zuellig Pharma',
                'zip_code' => 730,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            473 => 
            array (
                'id' => 1474,
                'city_id' => 966,
                'area' => 'BCD Direct Marketing',
                'zip_code' => 731,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            474 => 
            array (
                'id' => 1475,
                'city_id' => 966,
                'area' => 'Export and Industry Bank',
                'zip_code' => 732,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            475 => 
            array (
                'id' => 1476,
                'city_id' => 966,
                'area' => 'Not used',
                'zip_code' => 733,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            476 => 
            array (
                'id' => 1477,
                'city_id' => 966,
                'area' => 'Sycip, Gorres and Velayo',
                'zip_code' => 740,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            477 => 
            array (
                'id' => 1478,
                'city_id' => 966,
                'area' => 'Philippine Airlines',
                'zip_code' => 750,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            478 => 
            array (
                'id' => 1479,
                'city_id' => 966,
            'area' => 'Pilipinas Shell (subsidiary of Royal Dutch Shell)',
                'zip_code' => 760,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            479 => 
            array (
                'id' => 1480,
                'city_id' => 966,
                'area' => 'ACCRA Law Offices',
                'zip_code' => 770,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            480 => 
            array (
                'id' => 1481,
                'city_id' => 966,
                'area' => 'Mead Johnson Philippines',
                'zip_code' => 780,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            481 => 
            array (
                'id' => 1482,
                'city_id' => 966,
                'area' => 'Directories Pilipinas Corporation',
                'zip_code' => 788,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            482 => 
            array (
                'id' => 1483,
                'city_id' => 966,
                'area' => 'Atlantic, Gulf and Pacific',
                'zip_code' => 790,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            483 => 
            array (
                'id' => 1484,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1000 to 1099',
                'zip_code' => 1250,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            484 => 
            array (
                'id' => 1485,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1100 to 1199',
                'zip_code' => 1251,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            485 => 
            array (
                'id' => 1486,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1200 to 1299',
                'zip_code' => 1252,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            486 => 
            array (
                'id' => 1487,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1300 to 1399',
                'zip_code' => 1253,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            487 => 
            array (
                'id' => 1488,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1400 to 1499',
                'zip_code' => 1254,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            488 => 
            array (
                'id' => 1489,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1500 to 1599',
                'zip_code' => 1255,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            489 => 
            array (
                'id' => 1490,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1600 to 1699',
                'zip_code' => 1256,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            490 => 
            array (
                'id' => 1491,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1700 to 1799',
                'zip_code' => 1257,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            491 => 
            array (
                'id' => 1492,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1800 to 1899',
                'zip_code' => 1258,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            492 => 
            array (
                'id' => 1493,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 1900 to 1999',
                'zip_code' => 1259,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            493 => 
            array (
                'id' => 1494,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2000 to 2099',
                'zip_code' => 1260,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            494 => 
            array (
                'id' => 1495,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2100 to 2199',
                'zip_code' => 1261,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            495 => 
            array (
                'id' => 1496,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2200 to 2299',
                'zip_code' => 1262,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            496 => 
            array (
                'id' => 1497,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2300 to 2399',
                'zip_code' => 1263,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            497 => 
            array (
                'id' => 1498,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2400 to 2499',
                'zip_code' => 1264,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            498 => 
            array (
                'id' => 1499,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2500 to 2599',
                'zip_code' => 1265,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            499 => 
            array (
                'id' => 1500,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2600 to 2699',
                'zip_code' => 1266,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
        ));
        App\Models\Area::insert(array (
            0 => 
            array (
                'id' => 1501,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2700 to 2799',
                'zip_code' => 1267,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            1 => 
            array (
                'id' => 1502,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2800 to 2899',
                'zip_code' => 1268,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            2 => 
            array (
                'id' => 1503,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 2900 to 2999',
                'zip_code' => 1269,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            3 => 
            array (
                'id' => 1504,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3000 to 3099',
                'zip_code' => 1270,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            4 => 
            array (
                'id' => 1505,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3100 to 3199',
                'zip_code' => 1271,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            5 => 
            array (
                'id' => 1506,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3200 to 3299',
                'zip_code' => 1272,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            6 => 
            array (
                'id' => 1507,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3300 to 3399',
                'zip_code' => 1273,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            7 => 
            array (
                'id' => 1508,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3400 to 3499',
                'zip_code' => 1274,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            8 => 
            array (
                'id' => 1509,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3500 to 3599',
                'zip_code' => 1275,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            9 => 
            array (
                'id' => 1510,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3600 to 3699',
                'zip_code' => 1276,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            10 => 
            array (
                'id' => 1511,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3700 to 3799',
                'zip_code' => 1277,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            11 => 
            array (
                'id' => 1512,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3800 to 3899',
                'zip_code' => 1278,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            12 => 
            array (
                'id' => 1513,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 3900 to 3999',
                'zip_code' => 1279,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            13 => 
            array (
                'id' => 1514,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4000 to 4099',
                'zip_code' => 1280,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            14 => 
            array (
                'id' => 1515,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4100 to 4199',
                'zip_code' => 1281,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            15 => 
            array (
                'id' => 1516,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4200 to 4299',
                'zip_code' => 1282,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            16 => 
            array (
                'id' => 1517,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4300 to 4399',
                'zip_code' => 1283,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            17 => 
            array (
                'id' => 1518,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4400 to 4499',
                'zip_code' => 1284,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            18 => 
            array (
                'id' => 1519,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4500 to 4599',
                'zip_code' => 1285,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            19 => 
            array (
                'id' => 1520,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4600 to 4699',
                'zip_code' => 1286,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            20 => 
            array (
                'id' => 1521,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4700 to 4799',
                'zip_code' => 1287,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            21 => 
            array (
                'id' => 1522,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4800 to 4899',
                'zip_code' => 1288,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            22 => 
            array (
                'id' => 1523,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 4900 to 4999',
                'zip_code' => 1289,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            23 => 
            array (
                'id' => 1524,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5000 to 5099',
                'zip_code' => 1290,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            24 => 
            array (
                'id' => 1525,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5100 to 5199',
                'zip_code' => 1291,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            25 => 
            array (
                'id' => 1526,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5200 to 5299',
                'zip_code' => 1292,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            26 => 
            array (
                'id' => 1527,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5300 to 5399',
                'zip_code' => 1293,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            27 => 
            array (
                'id' => 1528,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5400 to 5499',
                'zip_code' => 1294,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            28 => 
            array (
                'id' => 1529,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5500 to 5599',
                'zip_code' => 1295,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            29 => 
            array (
                'id' => 1530,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5600 to 5699',
                'zip_code' => 1296,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            30 => 
            array (
                'id' => 1531,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5700 to 5799',
                'zip_code' => 1297,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            31 => 
            array (
                'id' => 1532,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5800 to 5899',
                'zip_code' => 1298,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            32 => 
            array (
                'id' => 1533,
                'city_id' => 966,
                'area' => 'Makati CPO-PO Box# 5900 to 5999',
                'zip_code' => 1299,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            33 => 
            array (
                'id' => 1534,
                'city_id' => 967,
            'area' => 'Kaunlaran Village (shared with Caloocan City and Navotas)',
                'zip_code' => 1409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            34 => 
            array (
                'id' => 1535,
                'city_id' => 967,
                'area' => 'Malabon',
                'zip_code' => 1470,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            35 => 
            array (
                'id' => 1536,
                'city_id' => 967,
                'area' => 'Flores',
                'zip_code' => 1471,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            36 => 
            array (
                'id' => 1537,
                'city_id' => 967,
                'area' => 'Longos',
                'zip_code' => 1472,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            37 => 
            array (
                'id' => 1538,
                'city_id' => 967,
                'area' => 'Tonsuya',
                'zip_code' => 1473,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            38 => 
            array (
                'id' => 1539,
                'city_id' => 967,
                'area' => 'Acacia',
                'zip_code' => 1474,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            39 => 
            array (
                'id' => 1540,
                'city_id' => 967,
                'area' => 'Potrero',
                'zip_code' => 1475,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            40 => 
            array (
                'id' => 1541,
                'city_id' => 967,
                'area' => 'Araneta Subdivision',
                'zip_code' => 1476,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            41 => 
            array (
                'id' => 1542,
                'city_id' => 967,
                'area' => 'Maysilo',
                'zip_code' => 1477,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            42 => 
            array (
                'id' => 1543,
                'city_id' => 967,
                'area' => 'Santolan',
                'zip_code' => 1478,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            43 => 
            array (
                'id' => 1544,
                'city_id' => 967,
                'area' => 'Muzon',
                'zip_code' => 1479,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            44 => 
            array (
                'id' => 1545,
                'city_id' => 967,
                'area' => 'Dampalit',
                'zip_code' => 1480,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            45 => 
            array (
                'id' => 1546,
                'city_id' => 967,
                'area' => 'Tinajeros',
                'zip_code' => 1470,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            46 => 
            array (
                'id' => 1547,
                'city_id' => 968,
                'area' => 'Mandaluyong Central Post Office',
                'zip_code' => 1550,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            47 => 
            array (
                'id' => 1548,
                'city_id' => 968,
                'area' => 'Vergara',
                'zip_code' => 1551,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            48 => 
            array (
                'id' => 1549,
                'city_id' => 968,
                'area' => 'Shaw Boulevard',
                'zip_code' => 1552,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            49 => 
            array (
                'id' => 1550,
                'city_id' => 968,
                'area' => 'National Center for Mental Health',
                'zip_code' => 1553,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            50 => 
            array (
                'id' => 1551,
                'city_id' => 968,
                'area' => 'East EDSA',
                'zip_code' => 1554,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            51 => 
            array (
                'id' => 1552,
                'city_id' => 968,
                'area' => 'Wack Wack',
                'zip_code' => 1555,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            52 => 
            array (
                'id' => 1553,
                'city_id' => 968,
                'area' => 'Greenhills South',
                'zip_code' => 1556,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            53 => 
            array (
                'id' => 1554,
                'city_id' => 969,
                'area' => 'Manila Central Post Office',
                'zip_code' => 1000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            54 => 
            array (
                'id' => 1555,
                'city_id' => 969,
                'area' => 'Quiapo',
                'zip_code' => 1001,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            55 => 
            array (
                'id' => 1556,
                'city_id' => 969,
                'area' => 'Intramuros',
                'zip_code' => 1002,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            56 => 
            array (
                'id' => 1557,
                'city_id' => 969,
                'area' => 'Santa Cruz South',
                'zip_code' => 1003,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            57 => 
            array (
                'id' => 1558,
                'city_id' => 969,
                'area' => 'Malate',
                'zip_code' => 1004,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            58 => 
            array (
                'id' => 1559,
                'city_id' => 969,
                'area' => 'San Miguel',
                'zip_code' => 1005,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            59 => 
            array (
                'id' => 1560,
                'city_id' => 969,
                'area' => 'Binondo',
                'zip_code' => 1006,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            60 => 
            array (
                'id' => 1561,
                'city_id' => 969,
                'area' => 'Paco',
                'zip_code' => 1007,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            61 => 
            array (
                'id' => 1562,
                'city_id' => 969,
                'area' => 'Sampaloc East',
                'zip_code' => 1008,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            62 => 
            array (
                'id' => 1563,
                'city_id' => 969,
                'area' => 'Santa Ana',
                'zip_code' => 1009,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            63 => 
            array (
                'id' => 1564,
                'city_id' => 969,
                'area' => 'San Nicolas',
                'zip_code' => 1010,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            64 => 
            array (
                'id' => 1565,
                'city_id' => 969,
                'area' => 'Pandacan',
                'zip_code' => 1011,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            65 => 
            array (
                'id' => 1566,
                'city_id' => 969,
                'area' => 'Tondo South',
                'zip_code' => 1012,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            66 => 
            array (
                'id' => 1567,
                'city_id' => 969,
                'area' => 'Tondo North',
                'zip_code' => 1013,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            67 => 
            array (
                'id' => 1568,
                'city_id' => 969,
                'area' => 'Santa Cruz North',
                'zip_code' => 1014,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            68 => 
            array (
                'id' => 1569,
                'city_id' => 969,
                'area' => 'Sampaloc West',
                'zip_code' => 1015,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            69 => 
            array (
                'id' => 1570,
                'city_id' => 969,
                'area' => 'Santa Mesa',
                'zip_code' => 1016,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            70 => 
            array (
                'id' => 1571,
                'city_id' => 969,
                'area' => 'San Andres',
                'zip_code' => 1017,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            71 => 
            array (
                'id' => 1572,
                'city_id' => 969,
                'area' => 'Port Area South',
                'zip_code' => 1018,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            72 => 
            array (
                'id' => 1573,
                'city_id' => 969,
                'area' => 'Manila Bulletin',
                'zip_code' => 900,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            73 => 
            array (
                'id' => 1574,
                'city_id' => 969,
                'area' => 'Adventist University of the Philippines',
                'zip_code' => 901,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            74 => 
            array (
                'id' => 1575,
                'city_id' => 969,
                'area' => 'Far East Broadcasting Corporation',
                'zip_code' => 902,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            75 => 
            array (
                'id' => 1576,
                'city_id' => 969,
                'area' => 'Manila Hilton',
                'zip_code' => 903,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            76 => 
            array (
                'id' => 1577,
                'city_id' => 969,
                'area' => 'Midland Hotel',
                'zip_code' => 904,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            77 => 
            array (
                'id' => 1578,
                'city_id' => 969,
                'area' => 'The Philippine Star',
                'zip_code' => 905,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            78 => 
            array (
                'id' => 1579,
                'city_id' => 969,
                'area' => 'Manila Medical Center',
                'zip_code' => 906,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            79 => 
            array (
                'id' => 1580,
                'city_id' => 969,
                'area' => 'San Miguel Corporation',
                'zip_code' => 907,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            80 => 
            array (
                'id' => 1581,
                'city_id' => 969,
                'area' => 'Pan-Filipino Shipping',
                'zip_code' => 908,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            81 => 
            array (
                'id' => 1582,
                'city_id' => 969,
                'area' => 'Summer Institute of Linguistics',
                'zip_code' => 909,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            82 => 
            array (
                'id' => 1583,
                'city_id' => 969,
                'area' => 'Department of Labor and Employment',
                'zip_code' => 910,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            83 => 
            array (
                'id' => 1584,
                'city_id' => 969,
                'area' => 'National Statistics Office',
                'zip_code' => 911,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            84 => 
            array (
                'id' => 1585,
                'city_id' => 969,
                'area' => 'Bureau of Plant Industry',
                'zip_code' => 912,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            85 => 
            array (
                'id' => 1586,
                'city_id' => 969,
                'area' => 'Manila Hotel',
                'zip_code' => 913,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            86 => 
            array (
                'id' => 1587,
                'city_id' => 969,
                'area' => 'Philippine Refining Company and Unilever Philippines',
                'zip_code' => 914,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            87 => 
            array (
                'id' => 1588,
                'city_id' => 969,
                'area' => 'International Correspondence Institute',
                'zip_code' => 915,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            88 => 
            array (
                'id' => 1589,
                'city_id' => 969,
                'area' => 'Radio Veritas',
                'zip_code' => 916,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            89 => 
            array (
                'id' => 1590,
                'city_id' => 969,
                'area' => 'Ateneo de Manila University',
                'zip_code' => 917,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            90 => 
            array (
                'id' => 1591,
                'city_id' => 969,
                'area' => 'Fil-Japan Shipping Company',
                'zip_code' => 918,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            91 => 
            array (
                'id' => 1592,
                'city_id' => 969,
                'area' => 'Manila Police District',
                'zip_code' => 919,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            92 => 
            array (
                'id' => 1593,
                'city_id' => 969,
                'area' => 'Sunbursts Publications',
                'zip_code' => 920,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            93 => 
            array (
                'id' => 1594,
                'city_id' => 969,
                'area' => 'Philippine Plaza Hotel',
                'zip_code' => 921,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            94 => 
            array (
                'id' => 1595,
                'city_id' => 969,
                'area' => 'De La Salle University',
                'zip_code' => 922,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            95 => 
            array (
                'id' => 1596,
                'city_id' => 969,
                'area' => 'Don Stewart Evangelistic Association',
                'zip_code' => 923,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            96 => 
            array (
                'id' => 1597,
                'city_id' => 969,
                'area' => 'World Map',
                'zip_code' => 924,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            97 => 
            array (
                'id' => 1598,
                'city_id' => 969,
                'area' => 'Chinabank',
                'zip_code' => 925,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            98 => 
            array (
                'id' => 1599,
                'city_id' => 969,
                'area' => 'Caltex Philippines',
                'zip_code' => 926,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            99 => 
            array (
                'id' => 1600,
                'city_id' => 969,
                'area' => 'Philippine Veterans Affairs Office',
                'zip_code' => 927,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            100 => 
            array (
                'id' => 1601,
                'city_id' => 969,
                'area' => 'Philippine Campus Crusade',
                'zip_code' => 928,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            101 => 
            array (
                'id' => 1602,
                'city_id' => 969,
                'area' => 'Not used',
                'zip_code' => 929,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            102 => 
            array (
                'id' => 1603,
                'city_id' => 969,
                'area' => 'United States Embassy',
                'zip_code' => 930,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            103 => 
            array (
                'id' => 1604,
                'city_id' => 969,
                'area' => 'Philippine National Bank',
                'zip_code' => 940,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            104 => 
            array (
                'id' => 1605,
                'city_id' => 969,
                'area' => 'Manila Midtown Hotel',
                'zip_code' => 950,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            105 => 
            array (
                'id' => 1606,
                'city_id' => 969,
                'area' => 'International Rice Research Institute',
                'zip_code' => 960,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            106 => 
            array (
                'id' => 1607,
                'city_id' => 969,
                'area' => 'Department of Justice',
                'zip_code' => 970,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            107 => 
            array (
                'id' => 1608,
                'city_id' => 969,
                'area' => 'Asian Development Bank',
                'zip_code' => 980,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            108 => 
            array (
                'id' => 1609,
                'city_id' => 969,
                'area' => 'Philamlife',
                'zip_code' => 990,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            109 => 
            array (
                'id' => 1610,
                'city_id' => 969,
                'area' => 'Santa Mesa P.O. Box',
                'zip_code' => 1035,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            110 => 
            array (
                'id' => 1611,
                'city_id' => 969,
                'area' => 'Santa Cruz P.O. Box',
                'zip_code' => 1040,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            111 => 
            array (
                'id' => 1612,
                'city_id' => 969,
                'area' => 'Ermita P.O. Box',
                'zip_code' => 1045,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            112 => 
            array (
                'id' => 1613,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1000 to 1099',
                'zip_code' => 1050,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            113 => 
            array (
                'id' => 1614,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1100 to 1199',
                'zip_code' => 1051,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            114 => 
            array (
                'id' => 1615,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1200 to 1299',
                'zip_code' => 1052,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            115 => 
            array (
                'id' => 1616,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1300 to 1399',
                'zip_code' => 1053,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            116 => 
            array (
                'id' => 1617,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1400 to 1499',
                'zip_code' => 1054,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            117 => 
            array (
                'id' => 1618,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1500 to 1599',
                'zip_code' => 1055,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            118 => 
            array (
                'id' => 1619,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1600 to 1699',
                'zip_code' => 1056,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            119 => 
            array (
                'id' => 1620,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1700 to 1799',
                'zip_code' => 1057,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            120 => 
            array (
                'id' => 1621,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1800 to 1899',
                'zip_code' => 1058,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            121 => 
            array (
                'id' => 1622,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 1900 to 1999',
                'zip_code' => 1059,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            122 => 
            array (
                'id' => 1623,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2000 to 2099',
                'zip_code' => 1060,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            123 => 
            array (
                'id' => 1624,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2100 to 2199',
                'zip_code' => 1061,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            124 => 
            array (
                'id' => 1625,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2200 to 2299',
                'zip_code' => 1062,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            125 => 
            array (
                'id' => 1626,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2300 to 2399',
                'zip_code' => 1063,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            126 => 
            array (
                'id' => 1627,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2400 to 2499',
                'zip_code' => 1064,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            127 => 
            array (
                'id' => 1628,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2500 to 2599',
                'zip_code' => 1065,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            128 => 
            array (
                'id' => 1629,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2600 to 2699',
                'zip_code' => 1066,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            129 => 
            array (
                'id' => 1630,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2700 to 2799',
                'zip_code' => 1067,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            130 => 
            array (
                'id' => 1631,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2800 to 2899',
                'zip_code' => 1068,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            131 => 
            array (
                'id' => 1632,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 2900 to 2999',
                'zip_code' => 1069,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            132 => 
            array (
                'id' => 1633,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3000 to 3099',
                'zip_code' => 1070,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            133 => 
            array (
                'id' => 1634,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3100 to 3199',
                'zip_code' => 1071,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            134 => 
            array (
                'id' => 1635,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3200 to 3299',
                'zip_code' => 1072,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            135 => 
            array (
                'id' => 1636,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3300 to 3399',
                'zip_code' => 1073,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            136 => 
            array (
                'id' => 1637,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3400 to 3499',
                'zip_code' => 1074,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            137 => 
            array (
                'id' => 1638,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3500 to 3599',
                'zip_code' => 1075,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            138 => 
            array (
                'id' => 1639,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3600 to 3699',
                'zip_code' => 1076,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            139 => 
            array (
                'id' => 1640,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3700 to 3799',
                'zip_code' => 1077,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            140 => 
            array (
                'id' => 1641,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3800 to 3899',
                'zip_code' => 1078,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            141 => 
            array (
                'id' => 1642,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 3900 to 3999',
                'zip_code' => 1079,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            142 => 
            array (
                'id' => 1643,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4000 to 4099',
                'zip_code' => 1080,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            143 => 
            array (
                'id' => 1644,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4100 to 4199',
                'zip_code' => 1081,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            144 => 
            array (
                'id' => 1645,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4200 to 4299',
                'zip_code' => 1082,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            145 => 
            array (
                'id' => 1646,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4300 to 4399',
                'zip_code' => 1083,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            146 => 
            array (
                'id' => 1647,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4400 to 4499',
                'zip_code' => 1084,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            147 => 
            array (
                'id' => 1648,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4500 to 4599',
                'zip_code' => 1085,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            148 => 
            array (
                'id' => 1649,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4600 to 4699',
                'zip_code' => 1086,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            149 => 
            array (
                'id' => 1650,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4700 to 4799',
                'zip_code' => 1087,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            150 => 
            array (
                'id' => 1651,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4800 to 4899',
                'zip_code' => 1088,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            151 => 
            array (
                'id' => 1652,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 4900 to 4999',
                'zip_code' => 1089,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            152 => 
            array (
                'id' => 1653,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 5000 to 5099',
                'zip_code' => 1090,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            153 => 
            array (
                'id' => 1654,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 5100 to 5199',
                'zip_code' => 1091,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            154 => 
            array (
                'id' => 1655,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 5200 to 5299',
                'zip_code' => 1092,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            155 => 
            array (
                'id' => 1656,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 5300 to 5399',
                'zip_code' => 1093,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            156 => 
            array (
                'id' => 1657,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 5400 to 5499',
                'zip_code' => 1094,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            157 => 
            array (
                'id' => 1658,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 5500 to 5599',
                'zip_code' => 1095,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            158 => 
            array (
                'id' => 1659,
                'city_id' => 969,
                'area' => 'Manila CPO-PO Box# 5600 to 5699',
                'zip_code' => 1096,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            159 => 
            array (
                'id' => 1660,
                'city_id' => 970,
                'area' => 'Marikina Central Post Office',
                'zip_code' => 1800,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            160 => 
            array (
                'id' => 1661,
                'city_id' => 970,
                'area' => 'San Roque-Calumpang',
                'zip_code' => 1801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            161 => 
            array (
                'id' => 1662,
                'city_id' => 970,
                'area' => 'Industrial Valley',
                'zip_code' => 1802,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            162 => 
            array (
                'id' => 1663,
                'city_id' => 970,
                'area' => 'Barangka and Ta?ong',
                'zip_code' => 1803,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            163 => 
            array (
                'id' => 1664,
                'city_id' => 970,
                'area' => 'J. De La Pe?a',
                'zip_code' => 1804,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            164 => 
            array (
                'id' => 1665,
                'city_id' => 970,
                'area' => 'Malanday',
                'zip_code' => 1805,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            165 => 
            array (
                'id' => 1666,
                'city_id' => 970,
                'area' => 'Northern and Western Marikina River',
                'zip_code' => 1806,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            166 => 
            array (
                'id' => 1667,
                'city_id' => 970,
                'area' => 'Concepcion tarlac',
                'zip_code' => 1807,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            167 => 
            array (
                'id' => 1668,
                'city_id' => 970,
                'area' => 'Nangka',
                'zip_code' => 1808,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            168 => 
            array (
                'id' => 1669,
                'city_id' => 970,
                'area' => 'Parang',
                'zip_code' => 1809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            169 => 
            array (
                'id' => 1670,
                'city_id' => 970,
                'area' => 'Marikina Heights',
                'zip_code' => 1810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            170 => 
            array (
                'id' => 1671,
                'city_id' => 970,
                'area' => 'Concepcion 2',
                'zip_code' => 1811,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            171 => 
            array (
                'id' => 1672,
                'city_id' => 970,
                'area' => 'Not used',
                'zip_code' => 1812,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            172 => 
            array (
                'id' => 1673,
                'city_id' => 970,
                'area' => 'Bagong Nayon, Cupang, Mambagat, and Mayamot',
                'zip_code' => 1820,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            173 => 
            array (
                'id' => 1674,
                'city_id' => 971,
                'area' => 'Muntinlupa Central Post Office',
                'zip_code' => 1770,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            174 => 
            array (
                'id' => 1675,
                'city_id' => 971,
                'area' => 'Buli/Cupang',
                'zip_code' => 1771,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            175 => 
            array (
                'id' => 1676,
                'city_id' => 971,
                'area' => 'Bayanan/Putatan',
                'zip_code' => 1772,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            176 => 
            array (
                'id' => 1677,
                'city_id' => 971,
                'area' => 'Soldiers\' Hills',
                'zip_code' => 1772,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            177 => 
            array (
                'id' => 1678,
                'city_id' => 971,
                'area' => 'Tunasan',
                'zip_code' => 1773,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            178 => 
            array (
                'id' => 1679,
                'city_id' => 971,
                'area' => 'Susana Heights',
                'zip_code' => 1774,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            179 => 
            array (
                'id' => 1680,
                'city_id' => 971,
                'area' => 'Pearl Heights',
                'zip_code' => 1775,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            180 => 
            array (
                'id' => 1681,
                'city_id' => 971,
                'area' => 'Poblacion',
                'zip_code' => 1776,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            181 => 
            array (
                'id' => 1682,
                'city_id' => 971,
                'area' => 'Pleasant Village',
                'zip_code' => 1777,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            182 => 
            array (
                'id' => 1683,
                'city_id' => 971,
                'area' => 'Ayala Alabang Subdivision',
                'zip_code' => 1780,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            183 => 
            array (
                'id' => 1684,
                'city_id' => 971,
                'area' => 'Ayala Alabang P.O. Boxes',
                'zip_code' => 1799,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            184 => 
            array (
                'id' => 1685,
                'city_id' => 972,
                'area' => 'Fish Market',
                'zip_code' => 1411,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            185 => 
            array (
                'id' => 1686,
                'city_id' => 972,
                'area' => 'Isla de Cocomo',
                'zip_code' => 1412,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            186 => 
            array (
                'id' => 1687,
                'city_id' => 972,
                'area' => 'Kapitbahayan [East]',
                'zip_code' => 1413,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            187 => 
            array (
                'id' => 1688,
                'city_id' => 972,
                'area' => 'Kaunlaran Village',
                'zip_code' => 1409,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            188 => 
            array (
                'id' => 1689,
                'city_id' => 972,
                'area' => 'Navotas',
                'zip_code' => 1485,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            189 => 
            array (
                'id' => 1690,
                'city_id' => 972,
                'area' => 'Tangos',
                'zip_code' => 1489,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            190 => 
            array (
                'id' => 1691,
                'city_id' => 972,
                'area' => 'Tanza',
                'zip_code' => 1490,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            191 => 
            array (
                'id' => 1692,
                'city_id' => 973,
                'area' => 'Aeropark Subdivision',
                'zip_code' => 1714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            192 => 
            array (
                'id' => 1693,
                'city_id' => 973,
                'area' => 'Baclaran',
                'zip_code' => 1702,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            193 => 
            array (
                'id' => 1694,
                'city_id' => 973,
                'area' => 'Better Living Subdivision',
                'zip_code' => 1711,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            194 => 
            array (
                'id' => 1695,
                'city_id' => 973,
                'area' => 'BF Homes 1',
                'zip_code' => 1720,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            195 => 
            array (
                'id' => 1696,
                'city_id' => 973,
                'area' => 'BF Homes 2',
                'zip_code' => 1718,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            196 => 
            array (
                'id' => 1697,
                'city_id' => 973,
                'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1000 to 1099',
                'zip_code' => 1375,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            197 => 
            array (
                'id' => 1698,
                'city_id' => 973,
                'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1100 to 1199',
                'zip_code' => 1376,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            198 => 
            array (
                'id' => 1699,
                'city_id' => 973,
                'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1200 to 1299',
                'zip_code' => 1377,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            199 => 
            array (
                'id' => 1700,
                'city_id' => 973,
                'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1300 to 1399',
                'zip_code' => 1378,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            200 => 
            array (
                'id' => 1701,
                'city_id' => 973,
                'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1400 to 1499',
                'zip_code' => 1379,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            201 => 
            array (
                'id' => 1702,
                'city_id' => 973,
                'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1500 to 1599',
                'zip_code' => 1380,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            202 => 
            array (
                'id' => 1703,
                'city_id' => 973,
                'area' => 'Domestic Airport P.O. - P.O. Box Nos. 1600 to 1699',
                'zip_code' => 1381,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            203 => 
            array (
                'id' => 1704,
                'city_id' => 973,
                'area' => 'Executive Heights Subdivision',
                'zip_code' => 1710,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            204 => 
            array (
                'id' => 1705,
                'city_id' => 973,
                'area' => 'Ireneville Subdivision I & III',
                'zip_code' => 1719,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            205 => 
            array (
                'id' => 1706,
                'city_id' => 973,
                'area' => 'Ireneville Subdivision II',
                'zip_code' => 1714,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            206 => 
            array (
                'id' => 1707,
                'city_id' => 973,
                'area' => 'Manila Memorial Park',
                'zip_code' => 1717,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            207 => 
            array (
                'id' => 1708,
                'city_id' => 973,
            'area' => 'Marina Subdivision (Reclamation)',
                'zip_code' => 1703,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            208 => 
            array (
                'id' => 1709,
                'city_id' => 973,
                'area' => 'Maywood Village I',
                'zip_code' => 1719,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            209 => 
            array (
                'id' => 1710,
                'city_id' => 973,
                'area' => 'Maywood Village II',
                'zip_code' => 1716,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            210 => 
            array (
                'id' => 1711,
                'city_id' => 973,
                'area' => 'Miramar Subdivision',
                'zip_code' => 1712,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            211 => 
            array (
                'id' => 1712,
                'city_id' => 973,
                'area' => 'Multinational Village',
                'zip_code' => 1708,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            212 => 
            array (
                'id' => 1713,
                'city_id' => 973,
                'area' => 'Ninoy Aquino International Airport',
                'zip_code' => 1705,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            213 => 
            array (
                'id' => 1714,
                'city_id' => 973,
                'area' => 'Parañaque CPO',
                'zip_code' => 1700,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            214 => 
            array (
                'id' => 1715,
                'city_id' => 973,
                'area' => 'Pulo',
                'zip_code' => 1706,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            215 => 
            array (
                'id' => 1716,
                'city_id' => 973,
                'area' => 'San Antonio Valley 1',
                'zip_code' => 1715,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            216 => 
            array (
                'id' => 1717,
                'city_id' => 973,
                'area' => 'San Antonio Valley 11 & 12',
                'zip_code' => 1707,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            217 => 
            array (
                'id' => 1718,
                'city_id' => 973,
                'area' => 'Santo Niño',
                'zip_code' => 1704,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            218 => 
            array (
                'id' => 1719,
                'city_id' => 973,
                'area' => 'South Admiral Village, Merville Park & Moonwalk Subdivision',
                'zip_code' => 1709,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            219 => 
            array (
                'id' => 1720,
                'city_id' => 973,
                'area' => 'Tambo',
                'zip_code' => 1701,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            220 => 
            array (
                'id' => 1721,
                'city_id' => 973,
                'area' => 'United Parañaque Subdivision',
                'zip_code' => 1713,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            221 => 
            array (
                'id' => 1722,
                'city_id' => 974,
                'area' => 'Pasay City Central Post Office',
                'zip_code' => 1300,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            222 => 
            array (
                'id' => 1723,
                'city_id' => 974,
                'area' => 'Domestic Airport P.O.',
                'zip_code' => 1301,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            223 => 
            array (
                'id' => 1724,
                'city_id' => 974,
                'area' => 'San Rafael',
                'zip_code' => 1302,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            224 => 
            array (
                'id' => 1725,
                'city_id' => 974,
                'area' => 'San Roque',
                'zip_code' => 1303,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            225 => 
            array (
                'id' => 1726,
                'city_id' => 974,
                'area' => 'Santa Clara',
                'zip_code' => 1304,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            226 => 
            array (
                'id' => 1727,
                'city_id' => 974,
                'area' => 'San Jose',
                'zip_code' => 1305,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            227 => 
            array (
                'id' => 1728,
                'city_id' => 974,
                'area' => 'San Isidro',
                'zip_code' => 1306,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            228 => 
            array (
                'id' => 1729,
                'city_id' => 974,
                'area' => 'Philippine International Convention Center',
                'zip_code' => 1307,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            229 => 
            array (
                'id' => 1730,
                'city_id' => 974,
                'area' => 'Bay City',
                'zip_code' => 1308,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            230 => 
            array (
                'id' => 1731,
                'city_id' => 974,
                'area' => 'Villamor Airbase',
                'zip_code' => 1309,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            231 => 
            array (
                'id' => 1732,
                'city_id' => 974,
                'area' => 'Pasay City CPO - P.O. Box Nos. 1000 to 1099',
                'zip_code' => 1350,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            232 => 
            array (
                'id' => 1733,
                'city_id' => 974,
                'area' => 'Pasay City CPO - P.O. Box Nos. 1100 to 1199',
                'zip_code' => 1351,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            233 => 
            array (
                'id' => 1734,
                'city_id' => 974,
                'area' => 'Pasay City CPO - P.O. Box Nos. 1200 to 1299',
                'zip_code' => 1352,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            234 => 
            array (
                'id' => 1735,
                'city_id' => 974,
                'area' => 'Pasay City CPO - P.O. Box Nos. 1300 to 1399',
                'zip_code' => 1353,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            235 => 
            array (
                'id' => 1736,
                'city_id' => 974,
                'area' => 'Pasay City CPO - P.O. Box Nos. 1400 to 1499',
                'zip_code' => 1354,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            236 => 
            array (
                'id' => 1737,
                'city_id' => 975,
                'area' => 'Pasig Central Post Office',
                'zip_code' => 1600,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            237 => 
            array (
                'id' => 1738,
                'city_id' => 975,
                'area' => 'San Joaquin',
                'zip_code' => 1601,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            238 => 
            array (
                'id' => 1739,
                'city_id' => 975,
                'area' => 'Pinagbuhatan',
                'zip_code' => 1602,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            239 => 
            array (
                'id' => 1740,
                'city_id' => 975,
                'area' => 'Kapitolyo',
                'zip_code' => 1603,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            240 => 
            array (
                'id' => 1741,
                'city_id' => 975,
                'area' => 'Ugong',
                'zip_code' => 1604,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            241 => 
            array (
                'id' => 1742,
                'city_id' => 975,
                'area' => 'Ortigas Post Office',
                'zip_code' => 1605,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            242 => 
            array (
                'id' => 1743,
                'city_id' => 975,
                'area' => 'Caniogan',
                'zip_code' => 1606,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            243 => 
            array (
                'id' => 1744,
                'city_id' => 975,
                'area' => 'Maybunga',
                'zip_code' => 1607,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            244 => 
            array (
                'id' => 1745,
                'city_id' => 975,
                'area' => 'Santa Lucia',
                'zip_code' => 1608,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            245 => 
            array (
                'id' => 1746,
                'city_id' => 975,
                'area' => 'Rosario',
                'zip_code' => 1609,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            246 => 
            array (
                'id' => 1747,
                'city_id' => 975,
                'area' => 'Santolan',
                'zip_code' => 1610,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            247 => 
            array (
                'id' => 1748,
                'city_id' => 975,
                'area' => 'Manggahan',
                'zip_code' => 1611,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            248 => 
            array (
                'id' => 1749,
                'city_id' => 975,
                'area' => 'Green Park',
                'zip_code' => 1612,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            249 => 
            array (
                'id' => 1750,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1000 to 1099',
                'zip_code' => 1650,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            250 => 
            array (
                'id' => 1751,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1100 to 1199',
                'zip_code' => 1651,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            251 => 
            array (
                'id' => 1752,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1200 to 1299',
                'zip_code' => 1652,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            252 => 
            array (
                'id' => 1753,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1300 to 1399',
                'zip_code' => 1653,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            253 => 
            array (
                'id' => 1754,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1400 to 1499',
                'zip_code' => 1654,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            254 => 
            array (
                'id' => 1755,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1500 to 1599',
                'zip_code' => 1655,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            255 => 
            array (
                'id' => 1756,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1600 to 1699',
                'zip_code' => 1656,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            256 => 
            array (
                'id' => 1757,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1700 to 1799',
                'zip_code' => 1657,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            257 => 
            array (
                'id' => 1758,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1800 to 1899',
                'zip_code' => 1658,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            258 => 
            array (
                'id' => 1759,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 1900 to 1999',
                'zip_code' => 1659,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            259 => 
            array (
                'id' => 1760,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2000 to 2099',
                'zip_code' => 1660,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            260 => 
            array (
                'id' => 1761,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2100 to 2199',
                'zip_code' => 1661,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            261 => 
            array (
                'id' => 1762,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2200 to 2299',
                'zip_code' => 1662,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            262 => 
            array (
                'id' => 1763,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2300 to 2399',
                'zip_code' => 1663,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            263 => 
            array (
                'id' => 1764,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2400 to 2499',
                'zip_code' => 1664,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            264 => 
            array (
                'id' => 1765,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2500 to 2599',
                'zip_code' => 1665,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            265 => 
            array (
                'id' => 1766,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2600 to 2699',
                'zip_code' => 1666,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            266 => 
            array (
                'id' => 1767,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2700 to 2799',
                'zip_code' => 1667,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            267 => 
            array (
                'id' => 1768,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2800 to 2899',
                'zip_code' => 1668,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            268 => 
            array (
                'id' => 1769,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 2900 to 2999',
                'zip_code' => 1669,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            269 => 
            array (
                'id' => 1770,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3000 to 3099',
                'zip_code' => 1670,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            270 => 
            array (
                'id' => 1771,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3100 to 3199',
                'zip_code' => 1671,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            271 => 
            array (
                'id' => 1772,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3200 to 3299',
                'zip_code' => 1672,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            272 => 
            array (
                'id' => 1773,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3300 to 3399',
                'zip_code' => 1673,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            273 => 
            array (
                'id' => 1774,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3400 to 3499',
                'zip_code' => 1674,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            274 => 
            array (
                'id' => 1775,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3500 to 3599',
                'zip_code' => 1675,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            275 => 
            array (
                'id' => 1776,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3600 to 3699',
                'zip_code' => 1676,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            276 => 
            array (
                'id' => 1777,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3700 to 3799',
                'zip_code' => 1677,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            277 => 
            array (
                'id' => 1778,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3800 to 3899',
                'zip_code' => 1678,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            278 => 
            array (
                'id' => 1779,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 3900 to 3999',
                'zip_code' => 1679,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            279 => 
            array (
                'id' => 1780,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4000 to 4099',
                'zip_code' => 1680,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            280 => 
            array (
                'id' => 1781,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4100 to 4199',
                'zip_code' => 1681,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            281 => 
            array (
                'id' => 1782,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4200 to 4299',
                'zip_code' => 1682,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            282 => 
            array (
                'id' => 1783,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4300 to 4399',
                'zip_code' => 1683,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            283 => 
            array (
                'id' => 1784,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4400 to 4499',
                'zip_code' => 1684,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            284 => 
            array (
                'id' => 1785,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4500 to 4599',
                'zip_code' => 1685,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            285 => 
            array (
                'id' => 1786,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4600 to 4699',
                'zip_code' => 1686,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            286 => 
            array (
                'id' => 1787,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4700 to 4799',
                'zip_code' => 1687,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            287 => 
            array (
                'id' => 1788,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4800 to 4899',
                'zip_code' => 1688,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            288 => 
            array (
                'id' => 1789,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 4900 to 4999',
                'zip_code' => 1689,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            289 => 
            array (
                'id' => 1790,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5000 to 5099',
                'zip_code' => 1690,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            290 => 
            array (
                'id' => 1791,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5100 to 5199',
                'zip_code' => 1691,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            291 => 
            array (
                'id' => 1792,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5200 to 5299',
                'zip_code' => 1692,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            292 => 
            array (
                'id' => 1793,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5300 to 5399',
                'zip_code' => 1693,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            293 => 
            array (
                'id' => 1794,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5400 to 5499',
                'zip_code' => 1694,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            294 => 
            array (
                'id' => 1795,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5500 to 5599',
                'zip_code' => 1695,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            295 => 
            array (
                'id' => 1796,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5600 to 5699',
                'zip_code' => 1696,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            296 => 
            array (
                'id' => 1797,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5700 to 5799',
                'zip_code' => 1697,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            297 => 
            array (
                'id' => 1798,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5800 to 5899',
                'zip_code' => 1698,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            298 => 
            array (
                'id' => 1799,
                'city_id' => 975,
                'area' => 'Pasig Ortigas CTR-PO Box# 5900 to 5999',
                'zip_code' => 1699,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            299 => 
            array (
                'id' => 1800,
                'city_id' => 976,
                'area' => 'Alicia',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            300 => 
            array (
                'id' => 1801,
                'city_id' => 976,
                'area' => 'Amihan',
                'zip_code' => 1102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            301 => 
            array (
                'id' => 1802,
                'city_id' => 976,
                'area' => 'Apolonio Samson',
                'zip_code' => 1106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            302 => 
            array (
                'id' => 1803,
                'city_id' => 976,
                'area' => 'Araneta Center',
                'zip_code' => 810,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            303 => 
            array (
                'id' => 1804,
                'city_id' => 976,
                'area' => 'Araneta Center P.O. Boxes',
                'zip_code' => 1135,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            304 => 
            array (
                'id' => 1805,
                'city_id' => 976,
                'area' => 'Baesa',
                'zip_code' => 1106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            305 => 
            array (
                'id' => 1806,
                'city_id' => 976,
                'area' => 'Bagbag',
                'zip_code' => 1116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            306 => 
            array (
                'id' => 1807,
                'city_id' => 976,
                'area' => 'Bagong Bayan',
                'zip_code' => 1110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            307 => 
            array (
                'id' => 1808,
                'city_id' => 976,
                'area' => 'Bagong Buhay',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            308 => 
            array (
                'id' => 1809,
                'city_id' => 976,
                'area' => 'Bagong Lipunan',
                'zip_code' => 1111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            309 => 
            array (
                'id' => 1810,
                'city_id' => 976,
                'area' => 'Bagong Pag-Asa',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            310 => 
            array (
                'id' => 1811,
                'city_id' => 976,
                'area' => 'Bagong Silangan',
                'zip_code' => 1119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            311 => 
            array (
                'id' => 1812,
                'city_id' => 976,
                'area' => 'Bahay Toro',
                'zip_code' => 1106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            312 => 
            array (
                'id' => 1813,
                'city_id' => 976,
                'area' => 'Balingasa',
                'zip_code' => 1115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            313 => 
            array (
                'id' => 1814,
                'city_id' => 976,
                'area' => 'Balintawak',
                'zip_code' => 1106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            314 => 
            array (
                'id' => 1815,
                'city_id' => 976,
                'area' => 'Balumbato',
                'zip_code' => 1106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            315 => 
            array (
                'id' => 1816,
                'city_id' => 976,
                'area' => 'Batasan Hills',
                'zip_code' => 1126,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            316 => 
            array (
                'id' => 1817,
                'city_id' => 976,
                'area' => 'Bayanihan',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            317 => 
            array (
                'id' => 1818,
                'city_id' => 976,
                'area' => 'BF Homes',
                'zip_code' => 1120,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            318 => 
            array (
                'id' => 1819,
                'city_id' => 976,
                'area' => 'Blue Ridge',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            319 => 
            array (
                'id' => 1820,
                'city_id' => 976,
                'area' => 'Botocan',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            320 => 
            array (
                'id' => 1821,
                'city_id' => 976,
                'area' => 'Broadway Center P.O. Boxes',
                'zip_code' => 1141,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            321 => 
            array (
                'id' => 1822,
                'city_id' => 976,
                'area' => 'Bungad',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            322 => 
            array (
                'id' => 1823,
                'city_id' => 976,
                'area' => 'Bureau of Internal Revenue',
                'zip_code' => 820,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            323 => 
            array (
                'id' => 1824,
                'city_id' => 976,
                'area' => 'Camp Aguinaldo',
                'zip_code' => 1110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            324 => 
            array (
                'id' => 1825,
                'city_id' => 976,
                'area' => 'Camp Aguinaldo',
                'zip_code' => 802,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            325 => 
            array (
                'id' => 1826,
                'city_id' => 976,
                'area' => 'Camp Crame',
                'zip_code' => 801,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            326 => 
            array (
                'id' => 1827,
                'city_id' => 976,
                'area' => 'Capitol Hills/Park',
                'zip_code' => 1126,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            327 => 
            array (
                'id' => 1828,
                'city_id' => 976,
                'area' => 'Capri',
                'zip_code' => 1117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            328 => 
            array (
                'id' => 1829,
                'city_id' => 976,
                'area' => 'Central',
                'zip_code' => 1100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            329 => 
            array (
                'id' => 1830,
                'city_id' => 976,
                'area' => 'Claro',
                'zip_code' => 1102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            330 => 
            array (
                'id' => 1831,
                'city_id' => 976,
                'area' => 'Commission on Audit',
                'zip_code' => 880,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            331 => 
            array (
                'id' => 1832,
                'city_id' => 976,
                'area' => 'Commonwealth',
                'zip_code' => 1121,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            332 => 
            array (
                'id' => 1833,
                'city_id' => 976,
                'area' => 'Crame',
                'zip_code' => 1111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            333 => 
            array (
                'id' => 1834,
                'city_id' => 976,
                'area' => 'Cubao',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            334 => 
            array (
                'id' => 1835,
                'city_id' => 976,
                'area' => 'Culiat',
                'zip_code' => 1128,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            335 => 
            array (
                'id' => 1836,
                'city_id' => 976,
                'area' => 'Damar',
                'zip_code' => 1115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            336 => 
            array (
                'id' => 1837,
                'city_id' => 976,
                'area' => 'Damayan',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            337 => 
            array (
                'id' => 1838,
                'city_id' => 976,
                'area' => 'Damayan Lagi',
                'zip_code' => 1112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            338 => 
            array (
                'id' => 1839,
                'city_id' => 976,
                'area' => 'Damong Maliit',
                'zip_code' => 1123,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            339 => 
            array (
                'id' => 1840,
                'city_id' => 976,
                'area' => 'Del Monte',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            340 => 
            array (
                'id' => 1841,
                'city_id' => 976,
                'area' => 'Diliman',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            341 => 
            array (
                'id' => 1842,
                'city_id' => 976,
                'area' => 'Dioquino Zobel',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            342 => 
            array (
                'id' => 1843,
                'city_id' => 976,
                'area' => 'Don Manuel',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            343 => 
            array (
                'id' => 1844,
                'city_id' => 976,
                'area' => 'Do?a Aurora',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            344 => 
            array (
                'id' => 1845,
                'city_id' => 976,
                'area' => 'Do?a Faustina Subdivision',
                'zip_code' => 1125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            345 => 
            array (
                'id' => 1846,
                'city_id' => 976,
                'area' => 'Do?a Imelda',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            346 => 
            array (
                'id' => 1847,
                'city_id' => 976,
                'area' => 'Do?a Josefa',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            347 => 
            array (
                'id' => 1848,
                'city_id' => 976,
                'area' => 'Duyan-Duyan',
                'zip_code' => 1102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            348 => 
            array (
                'id' => 1849,
                'city_id' => 976,
                'area' => 'E. Rodriguez',
                'zip_code' => 1102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            349 => 
            array (
                'id' => 1850,
                'city_id' => 976,
                'area' => 'Escopa',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            350 => 
            array (
                'id' => 1851,
                'city_id' => 976,
                'area' => 'Fairview',
                'zip_code' => 1118,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            351 => 
            array (
                'id' => 1852,
                'city_id' => 976,
                'area' => 'Fairview [North]',
                'zip_code' => 1121,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            352 => 
            array (
                'id' => 1853,
                'city_id' => 976,
                'area' => 'Fairview [South]',
                'zip_code' => 1122,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            353 => 
            array (
                'id' => 1854,
                'city_id' => 976,
                'area' => 'Gintong Silahis',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            354 => 
            array (
                'id' => 1855,
                'city_id' => 976,
                'area' => 'Gulod',
                'zip_code' => 1117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            355 => 
            array (
                'id' => 1856,
                'city_id' => 976,
                'area' => 'Holy Spirit',
                'zip_code' => 1127,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            356 => 
            array (
                'id' => 1857,
                'city_id' => 976,
                'area' => 'Horseshoe',
                'zip_code' => 1112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            357 => 
            array (
                'id' => 1858,
                'city_id' => 976,
                'area' => 'Immaculate Concepcion',
                'zip_code' => 1111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            358 => 
            array (
                'id' => 1859,
                'city_id' => 976,
                'area' => 'Kaligayahan',
                'zip_code' => 1124,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            359 => 
            array (
                'id' => 1860,
                'city_id' => 976,
                'area' => 'Kalusugan',
                'zip_code' => 1112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            360 => 
            array (
                'id' => 1861,
                'city_id' => 976,
                'area' => 'Kamias',
                'zip_code' => 1102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            361 => 
            array (
                'id' => 1862,
                'city_id' => 976,
                'area' => 'Kamuning',
                'zip_code' => 1103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            362 => 
            array (
                'id' => 1863,
                'city_id' => 976,
                'area' => 'Katipunan',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            363 => 
            array (
                'id' => 1864,
                'city_id' => 976,
                'area' => 'Kaunlaran',
                'zip_code' => 1111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            364 => 
            array (
                'id' => 1865,
                'city_id' => 976,
                'area' => 'Kristong Hari',
                'zip_code' => 1112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            365 => 
            array (
                'id' => 1866,
                'city_id' => 976,
                'area' => 'Krus na Ligas',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            366 => 
            array (
                'id' => 1867,
                'city_id' => 976,
                'area' => 'La Loma',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            367 => 
            array (
                'id' => 1868,
                'city_id' => 976,
                'area' => 'Laging Handa',
                'zip_code' => 1103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            368 => 
            array (
                'id' => 1869,
                'city_id' => 976,
                'area' => 'Libis',
                'zip_code' => 1110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            369 => 
            array (
                'id' => 1870,
                'city_id' => 976,
                'area' => 'Lourdes',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            370 => 
            array (
                'id' => 1871,
                'city_id' => 976,
                'area' => 'Loyola Heights',
                'zip_code' => 1108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            371 => 
            array (
                'id' => 1872,
                'city_id' => 976,
                'area' => 'Maharlika',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            372 => 
            array (
                'id' => 1873,
                'city_id' => 976,
                'area' => 'Malaya',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            373 => 
            array (
                'id' => 1874,
                'city_id' => 976,
                'area' => 'Mangga',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            374 => 
            array (
                'id' => 1875,
                'city_id' => 976,
                'area' => 'Manresa',
                'zip_code' => 1115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            375 => 
            array (
                'id' => 1876,
                'city_id' => 976,
                'area' => 'Mariana',
                'zip_code' => 1112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            376 => 
            array (
                'id' => 1877,
                'city_id' => 976,
                'area' => 'Mariblo',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            377 => 
            array (
                'id' => 1878,
                'city_id' => 976,
                'area' => 'Marilag',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            378 => 
            array (
                'id' => 1879,
                'city_id' => 976,
                'area' => 'Masagana',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            379 => 
            array (
                'id' => 1880,
                'city_id' => 976,
                'area' => 'Masambong',
                'zip_code' => 1115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            380 => 
            array (
                'id' => 1881,
                'city_id' => 976,
                'area' => 'Matalahib',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            381 => 
            array (
                'id' => 1882,
                'city_id' => 976,
                'area' => 'Matandang Balara',
                'zip_code' => 1119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            382 => 
            array (
                'id' => 1883,
                'city_id' => 976,
                'area' => 'Milagrosa',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            383 => 
            array (
                'id' => 1884,
                'city_id' => 976,
                'area' => 'Murphy District P.O. Boxes',
                'zip_code' => 1138,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            384 => 
            array (
                'id' => 1885,
                'city_id' => 976,
                'area' => 'Nagkaisang Nayon',
                'zip_code' => 1125,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            385 => 
            array (
                'id' => 1886,
                'city_id' => 976,
                'area' => 'National Irrigation Administration',
                'zip_code' => 830,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            386 => 
            array (
                'id' => 1887,
                'city_id' => 976,
                'area' => 'Nayon Kaunlaran',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            387 => 
            array (
                'id' => 1888,
                'city_id' => 976,
                'area' => 'New Era',
                'zip_code' => 1107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            388 => 
            array (
                'id' => 1889,
                'city_id' => 976,
                'area' => 'Novaliches P.O. Boxes',
                'zip_code' => 1147,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            389 => 
            array (
                'id' => 1890,
                'city_id' => 976,
                'area' => 'Novaliches Proper',
                'zip_code' => 1123,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            390 => 
            array (
                'id' => 1891,
                'city_id' => 976,
                'area' => 'Obrero',
                'zip_code' => 1103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            391 => 
            array (
                'id' => 1892,
                'city_id' => 976,
                'area' => 'Old Capitol Site',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            392 => 
            array (
                'id' => 1893,
                'city_id' => 976,
                'area' => 'Paang Bundok',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            393 => 
            array (
                'id' => 1894,
                'city_id' => 976,
                'area' => 'Pag-Ibig sa Nayon',
                'zip_code' => 1115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            394 => 
            array (
                'id' => 1895,
                'city_id' => 976,
                'area' => 'Paligsahan',
                'zip_code' => 1103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            395 => 
            array (
                'id' => 1896,
                'city_id' => 976,
                'area' => 'Paltok',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            396 => 
            array (
                'id' => 1897,
                'city_id' => 976,
                'area' => 'Pansol',
                'zip_code' => 1108,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            397 => 
            array (
                'id' => 1898,
                'city_id' => 976,
                'area' => 'Paraiso',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            398 => 
            array (
                'id' => 1899,
                'city_id' => 976,
                'area' => 'Pasong Putik',
                'zip_code' => 1118,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            399 => 
            array (
                'id' => 1900,
                'city_id' => 976,
                'area' => 'Pasong Tamo',
                'zip_code' => 1107,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            400 => 
            array (
                'id' => 1901,
                'city_id' => 976,
                'area' => 'Payatas',
                'zip_code' => 1119,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            401 => 
            array (
                'id' => 1902,
                'city_id' => 976,
                'area' => 'Phil-Am',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            402 => 
            array (
                'id' => 1903,
                'city_id' => 976,
                'area' => 'Philippine Heart Center',
                'zip_code' => 850,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            403 => 
            array (
                'id' => 1904,
                'city_id' => 976,
                'area' => 'Pinagkaisahan',
                'zip_code' => 1111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            404 => 
            array (
                'id' => 1905,
                'city_id' => 976,
                'area' => 'Pi?ahan',
                'zip_code' => 1100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            405 => 
            array (
                'id' => 1906,
                'city_id' => 976,
                'area' => 'Project 4',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            406 => 
            array (
                'id' => 1907,
                'city_id' => 976,
                'area' => 'Project 6',
                'zip_code' => 1100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            407 => 
            array (
                'id' => 1908,
                'city_id' => 976,
                'area' => 'Project 7',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            408 => 
            array (
                'id' => 1909,
                'city_id' => 976,
                'area' => 'Project 8',
                'zip_code' => 1106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            409 => 
            array (
                'id' => 1910,
                'city_id' => 976,
                'area' => 'Quezon City CPO',
                'zip_code' => 1100,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            410 => 
            array (
                'id' => 1911,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1000 to 1099',
                'zip_code' => 1150,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            411 => 
            array (
                'id' => 1912,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1100 to 1199',
                'zip_code' => 1151,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            412 => 
            array (
                'id' => 1913,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1200 to 1299',
                'zip_code' => 1152,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            413 => 
            array (
                'id' => 1914,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1300 to 1399',
                'zip_code' => 1153,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            414 => 
            array (
                'id' => 1915,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1400 to 1499',
                'zip_code' => 1154,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            415 => 
            array (
                'id' => 1916,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1500 to 1599',
                'zip_code' => 1155,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            416 => 
            array (
                'id' => 1917,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1600 to 1699',
                'zip_code' => 1156,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            417 => 
            array (
                'id' => 1918,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1700 to 1799',
                'zip_code' => 1157,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            418 => 
            array (
                'id' => 1919,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1800 to 1899',
                'zip_code' => 1158,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            419 => 
            array (
                'id' => 1920,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 1900 to 1999',
                'zip_code' => 1159,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            420 => 
            array (
                'id' => 1921,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2000 to 2099',
                'zip_code' => 1160,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            421 => 
            array (
                'id' => 1922,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2100 to 2199',
                'zip_code' => 1161,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            422 => 
            array (
                'id' => 1923,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2200 to 2299',
                'zip_code' => 1162,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            423 => 
            array (
                'id' => 1924,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2300 to 2399',
                'zip_code' => 1163,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            424 => 
            array (
                'id' => 1925,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2400 to 2499',
                'zip_code' => 1164,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            425 => 
            array (
                'id' => 1926,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2500 to 2599',
                'zip_code' => 1165,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            426 => 
            array (
                'id' => 1927,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2600 to 2699',
                'zip_code' => 1166,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            427 => 
            array (
                'id' => 1928,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2700 to 2799',
                'zip_code' => 1167,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            428 => 
            array (
                'id' => 1929,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2800 to 2899',
                'zip_code' => 1168,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            429 => 
            array (
                'id' => 1930,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 2900 to 2999',
                'zip_code' => 1169,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            430 => 
            array (
                'id' => 1931,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3000 to 3099',
                'zip_code' => 1170,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            431 => 
            array (
                'id' => 1932,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3100 to 3199',
                'zip_code' => 1171,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            432 => 
            array (
                'id' => 1933,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3200 to 3299',
                'zip_code' => 1172,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            433 => 
            array (
                'id' => 1934,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3300 to 3399',
                'zip_code' => 1173,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            434 => 
            array (
                'id' => 1935,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3400 to 3499',
                'zip_code' => 1174,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            435 => 
            array (
                'id' => 1936,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3500 to 3599',
                'zip_code' => 1175,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            436 => 
            array (
                'id' => 1937,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3600 to 3699',
                'zip_code' => 1176,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            437 => 
            array (
                'id' => 1938,
                'city_id' => 976,
                'area' => 'Quezon City CPO - P.O. Box Nos. 3700 to 3799',
                'zip_code' => 1177,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            438 => 
            array (
                'id' => 1939,
                'city_id' => 976,
                'area' => 'Quezon City Hall',
                'zip_code' => 860,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            439 => 
            array (
                'id' => 1940,
                'city_id' => 976,
            'area' => 'Quirino District (Project 2 & 3)',
                'zip_code' => 1102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            440 => 
            array (
                'id' => 1941,
                'city_id' => 976,
                'area' => 'R. Magsaysay',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            441 => 
            array (
                'id' => 1942,
                'city_id' => 976,
                'area' => 'Roxas District',
                'zip_code' => 1103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            442 => 
            array (
                'id' => 1943,
                'city_id' => 976,
                'area' => 'Sacred Heart',
                'zip_code' => 1103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            443 => 
            array (
                'id' => 1944,
                'city_id' => 976,
                'area' => 'Salvacion',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            444 => 
            array (
                'id' => 1945,
                'city_id' => 976,
                'area' => 'San Agustin',
                'zip_code' => 1117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            445 => 
            array (
                'id' => 1946,
                'city_id' => 976,
                'area' => 'San Antonio, Quezon City',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            446 => 
            array (
                'id' => 1947,
                'city_id' => 976,
                'area' => 'San Bartolome',
                'zip_code' => 1116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            447 => 
            array (
                'id' => 1948,
                'city_id' => 976,
                'area' => 'San Isidro',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            448 => 
            array (
                'id' => 1949,
                'city_id' => 976,
                'area' => 'San Isidro Labrador',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            449 => 
            array (
                'id' => 1950,
                'city_id' => 976,
                'area' => 'San Jose',
                'zip_code' => 1115,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            450 => 
            array (
                'id' => 1951,
                'city_id' => 976,
                'area' => 'San Roque',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            451 => 
            array (
                'id' => 1952,
                'city_id' => 976,
                'area' => 'San Vicente',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            452 => 
            array (
                'id' => 1953,
                'city_id' => 976,
                'area' => 'Sangandaan',
                'zip_code' => 1116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            453 => 
            array (
                'id' => 1954,
                'city_id' => 976,
                'area' => 'Santa Cruz',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            454 => 
            array (
                'id' => 1955,
                'city_id' => 976,
                'area' => 'Santa Lucia',
                'zip_code' => 1117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            455 => 
            array (
                'id' => 1956,
                'city_id' => 976,
                'area' => 'Santa Monica',
                'zip_code' => 1117,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            456 => 
            array (
                'id' => 1957,
                'city_id' => 976,
                'area' => 'Santa Teresita',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            457 => 
            array (
                'id' => 1958,
                'city_id' => 976,
                'area' => 'Santo Cristo',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            458 => 
            array (
                'id' => 1959,
                'city_id' => 976,
                'area' => 'Santo Ni?o',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            459 => 
            array (
                'id' => 1960,
                'city_id' => 976,
                'area' => 'Santol',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            460 => 
            array (
                'id' => 1961,
                'city_id' => 976,
                'area' => 'Sauyo',
                'zip_code' => 1116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            461 => 
            array (
                'id' => 1962,
                'city_id' => 976,
                'area' => 'Sienna',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            462 => 
            array (
                'id' => 1963,
                'city_id' => 976,
                'area' => 'Sikatuna Village',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            463 => 
            array (
                'id' => 1964,
                'city_id' => 976,
                'area' => 'Silangan',
                'zip_code' => 1102,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            464 => 
            array (
                'id' => 1965,
                'city_id' => 976,
                'area' => 'Social Security System',
                'zip_code' => 800,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            465 => 
            array (
                'id' => 1966,
                'city_id' => 976,
                'area' => 'Socorro',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            466 => 
            array (
                'id' => 1967,
                'city_id' => 976,
                'area' => 'South Triangle',
                'zip_code' => 1103,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            467 => 
            array (
                'id' => 1968,
                'city_id' => 976,
                'area' => 'St. Ignatius',
                'zip_code' => 1110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            468 => 
            array (
                'id' => 1969,
                'city_id' => 976,
                'area' => 'St. Martin de Porres',
                'zip_code' => 1111,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            469 => 
            array (
                'id' => 1970,
                'city_id' => 976,
                'area' => 'St. Peter',
                'zip_code' => 1114,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            470 => 
            array (
                'id' => 1971,
                'city_id' => 976,
                'area' => 'Tagumpay',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            471 => 
            array (
                'id' => 1972,
                'city_id' => 976,
                'area' => 'Talampas',
                'zip_code' => 1110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            472 => 
            array (
                'id' => 1973,
                'city_id' => 976,
                'area' => 'Talayan',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            473 => 
            array (
                'id' => 1974,
                'city_id' => 976,
                'area' => 'Talipapa',
                'zip_code' => 1116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            474 => 
            array (
                'id' => 1975,
                'city_id' => 976,
                'area' => 'Tandang Sora',
                'zip_code' => 1116,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            475 => 
            array (
                'id' => 1976,
                'city_id' => 976,
                'area' => 'Tatalon',
                'zip_code' => 1113,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            476 => 
            array (
                'id' => 1977,
                'city_id' => 976,
                'area' => 'Teachers Village',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            477 => 
            array (
                'id' => 1978,
                'city_id' => 976,
                'area' => 'Ugong Norte',
                'zip_code' => 1110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            478 => 
            array (
                'id' => 1979,
                'city_id' => 976,
                'area' => 'Unang Sigaw',
                'zip_code' => 1106,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            479 => 
            array (
                'id' => 1980,
                'city_id' => 976,
                'area' => 'University of the Philippines Post Office',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            480 => 
            array (
                'id' => 1981,
                'city_id' => 976,
                'area' => 'University of the Philippines P.O. Boxes',
                'zip_code' => 1144,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            481 => 
            array (
                'id' => 1982,
                'city_id' => 976,
                'area' => 'University of the Philippines Village',
                'zip_code' => 1101,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            482 => 
            array (
                'id' => 1983,
                'city_id' => 976,
                'area' => 'V. Luna Hospital',
                'zip_code' => 840,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            483 => 
            array (
                'id' => 1984,
                'city_id' => 976,
                'area' => 'Valencia',
                'zip_code' => 1112,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            484 => 
            array (
                'id' => 1985,
                'city_id' => 976,
                'area' => 'Vasra',
                'zip_code' => 1128,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            485 => 
            array (
                'id' => 1986,
                'city_id' => 976,
                'area' => 'Veterans Hospital',
                'zip_code' => 870,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            486 => 
            array (
                'id' => 1987,
                'city_id' => 976,
                'area' => 'Veterans Village',
                'zip_code' => 1105,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            487 => 
            array (
                'id' => 1988,
                'city_id' => 976,
                'area' => 'Villa Maria Clara',
                'zip_code' => 1109,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            488 => 
            array (
                'id' => 1989,
                'city_id' => 976,
                'area' => 'Violago Homes',
                'zip_code' => 1120,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            489 => 
            array (
                'id' => 1990,
                'city_id' => 976,
                'area' => 'West Triangle',
                'zip_code' => 1104,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            490 => 
            array (
                'id' => 1991,
                'city_id' => 976,
                'area' => 'White Plains',
                'zip_code' => 1110,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            491 => 
            array (
                'id' => 1992,
                'city_id' => 977,
                'area' => 'Eisenhower - Crame',
                'zip_code' => 1504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            492 => 
            array (
                'id' => 1993,
                'city_id' => 977,
                'area' => 'Greenhills Post Office',
                'zip_code' => 1502,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            493 => 
            array (
                'id' => 1994,
                'city_id' => 977,
                'area' => 'Greenhills [North]',
                'zip_code' => 1503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            494 => 
            array (
                'id' => 1995,
                'city_id' => 977,
                'area' => 'San Juan Central Post Office',
                'zip_code' => 1500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            495 => 
            array (
                'id' => 1996,
                'city_id' => 977,
                'area' => 'International Correspondence School',
                'zip_code' => 400,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            496 => 
            array (
                'id' => 1997,
                'city_id' => 977,
                'area' => 'Asian Development Bank',
                'zip_code' => 401,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            497 => 
            array (
                'id' => 1998,
                'city_id' => 977,
                'area' => 'Radio Bible Class',
                'zip_code' => 410,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            498 => 
            array (
                'id' => 1999,
                'city_id' => 977,
                'area' => 'Bible School on the Air',
                'zip_code' => 420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            499 => 
            array (
                'id' => 2000,
                'city_id' => 977,
                'area' => 'Greenhills P.O. Box Nos. 1000 to 1099',
                'zip_code' => 1530,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
        ));
        App\Models\Area::insert(array (
            0 => 
            array (
                'id' => 2001,
                'city_id' => 977,
                'area' => 'Greenhills P.O. Box Nos. 1100 to 1199',
                'zip_code' => 1531,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            1 => 
            array (
                'id' => 2002,
                'city_id' => 977,
                'area' => 'Greenhills P.O. Box Nos. 1200 to 1299',
                'zip_code' => 1532,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            2 => 
            array (
                'id' => 2003,
                'city_id' => 977,
                'area' => 'Greenhills P.O. Box Nos. 1300 to 1399',
                'zip_code' => 1533,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            3 => 
            array (
                'id' => 2004,
                'city_id' => 977,
                'area' => 'Greenhills P.O. Box Nos. 1400 to 1499',
                'zip_code' => 1534,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            4 => 
            array (
                'id' => 2005,
                'city_id' => 977,
                'area' => 'Greenhills P.O. Box Nos. 1500 to 1599',
                'zip_code' => 1535,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            5 => 
            array (
                'id' => 2006,
                'city_id' => 977,
                'area' => 'Greenhills P.O. Box Nos. 1600 to 1699',
                'zip_code' => 1536,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            6 => 
            array (
                'id' => 2007,
                'city_id' => 978,
                'area' => 'Bay Breeze Executive Village',
                'zip_code' => 1636,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            7 => 
            array (
                'id' => 2008,
                'city_id' => 978,
                'area' => 'Bicutan',
                'zip_code' => 1631,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            8 => 
            array (
                'id' => 2009,
                'city_id' => 978,
                'area' => 'ususan',
                'zip_code' => 1632,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            9 => 
            array (
                'id' => 2010,
                'city_id' => 978,
                'area' => 'Upper Bicutan',
                'zip_code' => 1633,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            10 => 
            array (
                'id' => 2011,
                'city_id' => 978,
            'area' => 'Western Bicutan (including Food Terminal, Inc. complex)',
                'zip_code' => 1630,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            11 => 
            array (
                'id' => 2012,
                'city_id' => 978,
                'area' => 'Ligid',
                'zip_code' => 1638,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            12 => 
            array (
                'id' => 2013,
                'city_id' => 978,
                'area' => 'Nichols - McKinley',
                'zip_code' => 1634,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            13 => 
            array (
                'id' => 2014,
                'city_id' => 978,
                'area' => 'Tuktukan',
                'zip_code' => 1637,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            14 => 
            array (
                'id' => 2015,
                'city_id' => 979,
                'area' => 'Arkong Bato',
                'zip_code' => 1444,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            15 => 
            array (
                'id' => 2016,
                'city_id' => 979,
                'area' => 'Balangkas - Caloong',
                'zip_code' => 1445,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            16 => 
            array (
                'id' => 2017,
                'city_id' => 979,
                'area' => 'Dalandanan - West Canumay',
                'zip_code' => 1443,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            17 => 
            array (
                'id' => 2018,
                'city_id' => 979,
                'area' => 'East Canumay - Lawang Bato Punturin',
                'zip_code' => 1447,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            18 => 
            array (
                'id' => 2019,
                'city_id' => 979,
                'area' => 'Fortune Village',
                'zip_code' => 1442,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            19 => 
            array (
                'id' => 2020,
                'city_id' => 979,
                'area' => 'General T. de Leon',
                'zip_code' => 1442,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            20 => 
            array (
                'id' => 2021,
                'city_id' => 979,
                'area' => 'Karuhatan',
                'zip_code' => 1441,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            21 => 
            array (
                'id' => 2022,
                'city_id' => 979,
                'area' => 'Lingunan',
                'zip_code' => 1446,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            22 => 
            array (
                'id' => 2023,
                'city_id' => 979,
                'area' => 'Mabolo',
                'zip_code' => 1444,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            23 => 
            array (
                'id' => 2024,
                'city_id' => 979,
                'area' => 'Malanday',
                'zip_code' => 1444,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            24 => 
            array (
                'id' => 2025,
                'city_id' => 979,
                'area' => 'Mapulang Lupa',
                'zip_code' => 1448,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            25 => 
            array (
                'id' => 2026,
                'city_id' => 979,
                'area' => 'Paso de Blas',
                'zip_code' => 1442,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            26 => 
            array (
                'id' => 2027,
                'city_id' => 979,
                'area' => 'Pasolo',
                'zip_code' => 1444,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            27 => 
            array (
                'id' => 2028,
                'city_id' => 979,
                'area' => 'Polo',
                'zip_code' => 1444,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            28 => 
            array (
                'id' => 2029,
                'city_id' => 979,
                'area' => 'Rincon',
                'zip_code' => 1444,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            29 => 
            array (
                'id' => 2030,
                'city_id' => 979,
                'area' => 'Valenzuela Central Post Office - Malinta',
                'zip_code' => 1440,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            30 => 
            array (
                'id' => 2031,
                'city_id' => 979,
                'area' => 'Valenzuela P.O. Boxes',
                'zip_code' => 1469,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            31 => 
            array (
                'id' => 2032,
                'city_id' => 979,
                'area' => 'Far East Broadcasting Corporation',
                'zip_code' => 560,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            32 => 
            array (
                'id' => 2033,
                'city_id' => 979,
                'area' => 'Febias College of Bible',
                'zip_code' => 550,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            33 => 
            array (
                'id' => 2034,
                'city_id' => 980,
                'area' => 'Aguho',
                'zip_code' => 1620,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
            34 => 
            array (
                'id' => 2035,
                'city_id' => 980,
                'area' => 'Santa Ana',
                'zip_code' => 1621,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')                
            ),
        ));

        $this->command->info('Areas table seeded!');
    }
}
