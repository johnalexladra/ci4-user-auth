<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmailConfigTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'fromemail'   => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'fromname'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'protocol'     => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'host'        => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'username'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'security'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'port'        => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'password'    => [
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
        $this->forge->createTable('emailconfig');
    }

    public function down()
    {
        $this->forge->dropTable('emailconfig');
    }
}
