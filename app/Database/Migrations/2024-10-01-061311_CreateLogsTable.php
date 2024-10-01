<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLogsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 255,
                'auto_increment' => true,
            ],
            'date'        => [
                'type' => 'DATE',
            ],
            'time'        => [
                'type' => 'TIME',
            ],
            'reference'   => [
                'type'       => 'INT',
                'constraint' => 255,
            ],
            'name'        => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ip'          => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'location'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'browser'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'status'      => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at'  => [
                'type' => 'DATETIME',
            ],
            'updated_at'  => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('logs');
    }

    public function down()
    {
        $this->forge->dropTable('logs');
    }
}
