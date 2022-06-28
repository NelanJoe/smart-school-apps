<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $this->call('Jurusan');
        $this->call('Kelas');
        $this->call('Mahasiswa');
        $this->call('Prodi');
        $this->call('Users');
    }
}
