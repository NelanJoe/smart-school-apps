<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel kategori peseerta
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 45,
            ],
            'kaprodi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 45,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel kategori peserta
        $this->forge->createTable('prodi', TRUE);
    }

    public function down()
    {
         /// menghapus tabel kategori peserta
         $this->forge->dropTable('prodi');
    }
}
