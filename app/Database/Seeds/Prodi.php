<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Prodi extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'Saepul',
                'kaprodi' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama' => 'Junaedi',
                'kaprodi' => 'Teknik Komputer dan Jaringan',
            ],


        ];
        $this->db->table('prodi')->insertBatch($data);
    }
}
