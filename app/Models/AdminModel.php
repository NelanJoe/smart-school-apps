<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table            = 'jenis_kegiatan';
    protected $allowField = ['nama'];
    public function getAll()
    {
        return $this->findAll();
    }
}
