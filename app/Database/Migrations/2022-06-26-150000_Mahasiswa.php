<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
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
            'nim'       => [
                'type'           => 'INT',
                'constraint'     => 11,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 45,
            ],
            'gender'       => [
                'type'           => 'VARCHAR',
                'constraint'     => 1,
            ],
            'tmp_lahir'       => [
                'type'           => 'DATE'
            ],
            'tgl_lahir'       => [
                'type'           => 'DATE'
            ],
            'ipk'               => [
                'type'           => 'DOUBLE'
            ],
            'id_prodi'       => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'id_kelas'       => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel kategori peserta
        $this->forge->createTable('mahasiswa', TRUE);
    }

    public function down()
    {
        /// menghapus tabel kategori peserta
        $this->forge->dropTable('mahasiswa');
    }
}
