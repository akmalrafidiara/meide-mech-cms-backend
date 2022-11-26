<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Messages extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'uuid' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'subject' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'message' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'ip_address' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'user_agent' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'reading_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'browser_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'sendBy' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'sendDate' => [
                'type'       => 'DATETIME',
            ],
            'action' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('messages');
    }

    public function down()
    {
        $this->forge->dropTable('messages');
    }
}
