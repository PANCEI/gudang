<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Akses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_profil' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'profil' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'profil_created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'profil_updated_at' => [
                'type' => 'DATETIME',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id_profil', true);
        $this->forge->createTable('profil');
    }

    public function down()
    {
        $this->forge->dropTable('profil');
    }
}
