<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContactUs extends Migration
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
            'content' => [
                'type' => 'TEXT',
            ],
            'createdBy' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'createdDate' => [
                'type'       => 'DATETIME',
            ],
            'updatedBy' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'updatedDate' => [
                'type'       => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contact_us');
    }

    public function down()
    {
        $this->forge->dropTable('contact_us');
    }
}