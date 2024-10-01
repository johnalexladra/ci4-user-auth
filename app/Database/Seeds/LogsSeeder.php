<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LogsSeeder extends Seeder
{
    public function run()
    {
        // Sample log data
        $data = [
            [
                'date'        => '2020-09-10',
                'time'        => '10:00:00',
                'reference'   => 1,
                'name'        => 'Admin User',
                'ip'          => '127.0.0.1',
                'location'    => 'Localhost',
                'browser'     => 'Chrome',
                'status'      => 'Success',
                'created_at'  => '2020-09-10 10:00:00',
                'updated_at'  => '2020-09-10 10:00:00',
            ],
            // Add more logs if needed
        ];

        $this->db->table('logs')->insertBatch($data);
    }
}
