<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email'         => 'admin@example.com',
                'new_email'     => null,
                'password_hash' => '$2y$10$/clmNLUUxGnREFHqraU7P.aVfJ5Mk0iEKRgKVz8.ZKOZIUGJGXlya', // hashed password
                'name'          => 'Admin',
                'firstname'     => 'Admin',
                'lastname'      => 'User',
                'activate_hash' => 'ZEWv2TUIY5oDqgw9FkjnmAS78zJNKfpL',
                'reset_hash'    => null,
                'reset_expires' => null,
                'active'        => 1,
                'created_at'    => '2020-08-04 16:07:50',
                'updated_at'    => '2020-09-11 14:32:51',
            ],
            [
                'email'         => 'user@example.com',
                'new_email'     => null,
                'password_hash' => '$2y$10$/clmNLUUxGnREFHqraU7P.aVfJ5Mk0iEKRgKVz8.ZKOZIUGJGXlya', // hashed password
                'name'          => 'Regular User',
                'firstname'     => 'User',
                'lastname'      => 'Example',
                'activate_hash' => 'ABC123456789',
                'reset_hash'    => null,
                'reset_expires' => null,
                'active'        => 1,
                'created_at'    => '2020-08-05 10:00:00',
                'updated_at'    => '2020-09-11 14:32:51',
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
