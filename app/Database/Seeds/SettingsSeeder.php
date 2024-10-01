<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'language'    => 'en',
            'timezone'    => 'Asia/Manila',
            'dateformat'  => 'yyyy-mm-dd',
            'timeformat'  => '24',
            'iprestriction'=> '',
            'created_at'  => '2020-08-21 17:43:51',
            'updated_at'  => '2020-09-11 14:34:44',
        ];

        $this->db->table('settings')->insert($data);
    }
}
