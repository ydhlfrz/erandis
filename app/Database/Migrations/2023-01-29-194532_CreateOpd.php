<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOpd extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_opd' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
    
            'name_opd' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
    
            'kode_opd' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_opd', true);
        $this->forge->createTable('opd');
    }

    public function down()
    {
        $this->forge->dropTable('opd');
    }
}
