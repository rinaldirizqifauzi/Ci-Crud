<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Objekwisata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type'           => 'Varchar',
                'constraint'     => 50,
            ],
            'kode' => [
                'type'           => 'Varchar',
                'constraint'     => 50,
            ],
            'harga_anak' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'harga_dewasa' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'image' => [
                'type'          => 'Varchar',
                'constraint'    => 50
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('objekwisata');
    }

    public function down()
    {
        $this->forge->dropTable('objekwisata');
    }
}
