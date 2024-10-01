<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email'         => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
                'unique'     => true,
            ],
            'new_email'     => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
                'null' => true,
            ],
            'password_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
            ],
            'name'          => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
            ],
            'firstname'     => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
                'null' => true,
            ],
            'lastname'      => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
                'null' => true,
            ],
            'activate_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
                'null' => true,
            ],
            'reset_hash'    => [
                'type'       => 'VARCHAR',
                'constraint' => '191',
                'null' => true,
            ],
            'reset_expires' => [
                'type'       => 'BIGINT',
                'null' => true,
            ],
            'active'        => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'created_at'    => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at'    => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
