<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'language'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'timezone'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'dateformat'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'timeformat'  => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'iprestriction'=> [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'created_at'  => [
                'type' => 'DATETIME',
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('settings');
    }

    public function down()
    {
        $this->forge->dropTable('settings');
    }
}
