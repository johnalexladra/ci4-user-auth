<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the seeders
        $this->call('EmailConfigSeeder');
        $this->call('LogsSeeder');
        $this->call('SettingsSeeder');
        $this->call('UsersSeeder');
    }
}
