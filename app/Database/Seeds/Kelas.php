<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kelas extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'XI RPL 1',
                'id_jurusan' => 1,
            ],
            [
                'nama' => 'XI RPL 2',
                'id_jurusan' => 1,
            ],


        ];
        $this->db->table('kelas')->insertBatch($data);
    }
}
