<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
            'nofak' => [
                'type'           => 'Varchar',
                'constraint'     => 50,
            ],
            'kode' => [
                'type'           => 'Varchar',
                'constraint'     => 50,
            ],
            'jumlah_anak' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
            'jumlah_dewasa' => [
                'type'           => 'INT',
                'constraint'     => 50,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}
