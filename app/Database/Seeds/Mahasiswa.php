<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim' => 1,
                'nama' => 'Saepul',
                'gender' => 'L',
                'tmp_lahir' => date('Y-m-d H:i:s'),
                'tgl_lahir' => date('Y-m-d H:i:s'),
                'ipk' => 38,
                'id_prodi' => 1,
                'id_kelas' => 1,
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
