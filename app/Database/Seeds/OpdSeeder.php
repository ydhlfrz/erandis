<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OpdSeeder extends Seeder
{
    public function run()
    {

        for($i = 1; $i <= 10; $i++) {

            $data = [
                'name_opd' => static::faker()->name,
                'kode_opd' => static::faker()->postcode,
            ];

            $this->db->table('opd')->insert($data);

        }
    }
}
