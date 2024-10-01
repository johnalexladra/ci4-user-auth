<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmailConfigSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'fromemail'   => 'codeigniter@example.com',
            'fromname'    => 'Codeigniter Auth',
            'protocol'     => 'smtp',
            'host'        => 'gmail.google.com',
            'username'    => 'official@gmail.com',
            'security'    => 'tls',
            'port'        => '22',
            'password'    => '$2y$10$PK65kpF6SflIk/iAJql6R.PRXX9GEaoRrJHHORqReU2I0E/60pVtC',
            'created_at'  => '2020-08-21 17:43:51',
            'updated_at'  => '2020-09-11 14:34:52',
        ];
        $this->db->table('emailconfig')->insert($data);
    }
}
