<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Jurusan extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Teknik Informatika',
                'kelas_id' => 1,
            ],
            [
                'nama' => 'Teknik Mesin',
                'kelas_id' => 1,
            ]

        ];
        $this->db->table('jurusan')->insertBatch($data);
    }
}
