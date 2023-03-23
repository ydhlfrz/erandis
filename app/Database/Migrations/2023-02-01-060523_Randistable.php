<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Randistable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_randis' => [
                'type' => 'BIGINT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
    
            'id_opd' => [
                'type' => 'BIGINT',
                'constraint' => '20',
                'unsigned' => true
            ],
    
            'id_group' => [
                'type' => 'ENUM',
                'constraint' => "'Roda 6', 'Roda 4', 'Roda 3', 'Roda 2', 'Alat Berat'",
            ],

            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'merk' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'no_rang' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'no_mesin' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'th_pembuatan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'th_perolehan' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'no_pol' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'kondisi' => [
                'type' => 'ENUM',
                'constraint' => "'Baik', 'Rusak Ringan', 'Rusak Berat'",
            ],

            'pengguna' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'ket' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],

            'dokumen' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id_randis', true);
        $this->forge->addForeignkey('id_opd', 'opd', 'id_opd');
        $this->forge->createTable('randistable');
    }

    public function down()
    {
        $this->forge->dropForeignKey('randistable', 'randistable_id_opd_foreign');
        $this->forge->dropTable('randistable');
    }
}
