<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FoodSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $data = [
            [
                'name'        => 'Bika Ambon Original',
                'description' => 'Bika Ambon klasik dengan rasa pandan yang wangi dan tekstur kenyal bersarang sempurna.',
                'price'       => 50000.00,
                'image'       => 'original.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Bika Ambon Keju',
                'description' => 'Perpaduan manisnya Bika Ambon dengan taburan keju gurih melimpah di atasnya.',
                'price'       => 60000.00,
                'image'       => 'keju.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Bika Ambon Cokelat',
                'description' => 'Sensasi Bika Ambon dengan adonan cokelat premium yang legit dan lumer di mulut.',
                'price'       => 55000.00,
                'image'       => 'cokelat.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Bika Ambon Durian',
                'description' => 'Dibuat dengan daging durian asli Medan pilihan, memberikan aroma dan rasa yang kuat.',
                'price'       => 75000.00,
                'image'       => 'durian.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Bika Ambon Mocha',
                'description' => 'Bika Ambon aroma kopi moka yang khas, cocok dinikmati bersama teh hangat.',
                'price'       => 55000.00,
                'image'       => 'mocha.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Bika Ambon Pandan Suji',
                'description' => 'Warna hijau alami dari daun suji dan aroma pandan yang lebih pekat dan wangi.',
                'price'       => 55000.00,
                'image'       => 'pandan.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Bika Ambon Kismis',
                'description' => 'Rasa klasik Bika Ambon dengan tambahan buah kismis yang memberikan kejutan rasa asam manis.',
                'price'       => 60000.00,
                'image'       => 'kismis.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ],
            [
                'name'        => 'Bika Ambon Nangka',
                'description' => 'Inovasi Bika Ambon dengan irisan buah nangka yang manis legit, menciptakan aroma menggugah selera.',
                'price'       => 65000.00,
                'image'       => 'nangka.jpg',
                'created_at'  => $now,
                'updated_at'  => $now,
            ]
        ];

        $this->db->table('foods')->insertBatch($data);
    }
}
