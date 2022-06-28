<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisModel extends Model
{
    protected $id = 'id';
    protected $table = 'jenis_kegiatan';
    protected $allowField = ['nama'];

    //    Buat data get all jenis kegiatan
    public function getAll()
    {
        return $this->findAll();
    }

    //    Buat model get data by id jenis kegiatan
    public function getJenisId($id)
    {
        return $this->where(['id' => $id])->first();
    }

    //    Buat model insert data jenis kegiatan
    public function insertKegiatan($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
