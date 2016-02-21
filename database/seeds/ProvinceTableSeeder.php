<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();
        
        App\Models\Province::insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Abra',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Agusan del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Agusan del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'Aklan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'Albay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            5 => 
            array (
                'id' => '6',
                'name' => 'Antique',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            6 => 
            array (
                'id' => '7',
                'name' => 'Apayao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            7 => 
            array (
                'id' => '8',
                'name' => 'Aurora',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            8 => 
            array (
                'id' => '9',
                'name' => 'Basilan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            9 => 
            array (
                'id' => '10',
                'name' => 'Bataan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            10 => 
            array (
                'id' => '11',
                'name' => 'Batanes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            11 => 
            array (
                'id' => '12',
                'name' => 'Batangas',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            12 => 
            array (
                'id' => '13',
                'name' => 'Benguet',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            13 => 
            array (
                'id' => '14',
                'name' => 'Biliran',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            14 => 
            array (
                'id' => '15',
                'name' => 'Bohol',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            15 => 
            array (
                'id' => '16',
                'name' => 'Bukidnon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            16 => 
            array (
                'id' => '17',
                'name' => 'Bulacan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            17 => 
            array (
                'id' => '18',
                'name' => 'Cagayan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            18 => 
            array (
                'id' => '19',
                'name' => 'Camarines Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            19 => 
            array (
                'id' => '20',
                'name' => 'Camarines Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            20 => 
            array (
                'id' => '21',
                'name' => 'Camiguin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            21 => 
            array (
                'id' => '22',
                'name' => 'Capiz',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            22 => 
            array (
                'id' => '23',
                'name' => 'Catanduanes',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            23 => 
            array (
                'id' => '24',
                'name' => 'Cavite',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            24 => 
            array (
                'id' => '25',
                'name' => 'Cebu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            25 => 
            array (
                'id' => '26',
                'name' => 'Compostela Valley',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            26 => 
            array (
                'id' => '27',
                'name' => 'Cotabato',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            27 => 
            array (
                'id' => '28',
                'name' => 'Davao del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            28 => 
            array (
                'id' => '29',
                'name' => 'Davao del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            29 => 
            array (
                'id' => '30',
                'name' => 'Davao Oriental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            30 => 
            array (
                'id' => '31',
                'name' => 'Eastern Samar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            31 => 
            array (
                'id' => '32',
                'name' => 'Guimaras',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            32 => 
            array (
                'id' => '33',
                'name' => 'Ifugao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            33 => 
            array (
                'id' => '34',
                'name' => 'Ilocos Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            34 => 
            array (
                'id' => '35',
                'name' => 'Ilocos Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            35 => 
            array (
                'id' => '36',
                'name' => 'Iloilo',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            36 => 
            array (
                'id' => '37',
                'name' => 'Isabela',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            37 => 
            array (
                'id' => '38',
                'name' => 'Kalinga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            38 => 
            array (
                'id' => '39',
                'name' => 'La Union',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            39 => 
            array (
                'id' => '40',
                'name' => 'Laguna',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            40 => 
            array (
                'id' => '41',
                'name' => 'Lanao del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            41 => 
            array (
                'id' => '42',
                'name' => 'Lanao del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            42 => 
            array (
                'id' => '43',
                'name' => 'Leyte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            43 => 
            array (
                'id' => '44',
                'name' => 'Maguindanao',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            44 => 
            array (
                'id' => '45',
                'name' => 'Marinduque',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            45 => 
            array (
                'id' => '46',
                'name' => 'Masbate',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            46 => 
            array (
                'id' => '47',
                'name' => 'Metro Manila',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            47 => 
            array (
                'id' => '48',
                'name' => 'Misamis Occidental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            48 => 
            array (
                'id' => '49',
                'name' => 'Misamis Oriental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            49 => 
            array (
                'id' => '50',
                'name' => 'Mountain Province',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            50 => 
            array (
                'id' => '51',
                'name' => 'Negros Occidental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            51 => 
            array (
                'id' => '52',
                'name' => 'Negros Oriental',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            52 => 
            array (
                'id' => '53',
                'name' => 'Northern Samar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            53 => 
            array (
                'id' => '54',
                'name' => 'Nueva Ecija',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            54 => 
            array (
                'id' => '55',
                'name' => 'Nueva Vizcaya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            55 => 
            array (
                'id' => '56',
                'name' => 'Occidental Mindoro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            56 => 
            array (
                'id' => '57',
                'name' => 'Oriental Mindoro',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            57 => 
            array (
                'id' => '58',
                'name' => 'Palawan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            58 => 
            array (
                'id' => '59',
                'name' => 'Pampanga',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            59 => 
            array (
                'id' => '60',
                'name' => 'Pangasinan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            60 => 
            array (
                'id' => '61',
                'name' => 'Quezon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            61 => 
            array (
                'id' => '62',
                'name' => 'Quirino',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            62 => 
            array (
                'id' => '63',
                'name' => 'Rizal',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            63 => 
            array (
                'id' => '64',
                'name' => 'Romblon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            64 => 
            array (
                'id' => '65',
                'name' => 'Samar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            65 => 
            array (
                'id' => '66',
                'name' => 'Sarangani',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            66 => 
            array (
                'id' => '67',
                'name' => 'Siquijor',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            67 => 
            array (
                'id' => '68',
                'name' => 'Sorsogon',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            68 => 
            array (
                'id' => '69',
                'name' => 'South Cotabato',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            69 => 
            array (
                'id' => '70',
                'name' => 'Southern Leyte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            70 => 
            array (
                'id' => '71',
                'name' => 'Sultan Kudarat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            71 => 
            array (
                'id' => '72',
                'name' => 'Sulu',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            72 => 
            array (
                'id' => '73',
                'name' => 'Surigao del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            73 => 
            array (
                'id' => '74',
                'name' => 'Surigao del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            74 => 
            array (
                'id' => '75',
                'name' => 'Tarlac',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            75 => 
            array (
                'id' => '76',
                'name' => 'Tawi-Tawi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            76 => 
            array (
                'id' => '77',
                'name' => 'Zambales',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            77 => 
            array (
                'id' => '78',
                'name' => 'Zamboanga del Norte',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            78 => 
            array (
                'id' => '79',
                'name' => 'Zamboanga del Sur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            79 => 
            array (
                'id' => '80',
                'name' => 'Zamboanga Sibugay',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
        ));

        $this->command->info('Province table seeded!');
    }
}
