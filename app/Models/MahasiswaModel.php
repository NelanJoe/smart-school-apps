<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'mahasiswa';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'nim', 'ipk', 'id_kelas', 'tmp_lahir', 'tgl_lahir', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getMahasiswa()
    {
        $query =  $this->db->table('mahasiswa')
            ->select("mahasiswa.*,kelas.nama as nama_kelas,prodi.nama as nama_prodi")
            ->join('kelas', 'kelas.id = mahasiswa.id_kelas')
            ->join('prodi', 'prodi.id = mahasiswa.id_prodi')
            ->get();
        return $query;
    }

    public function createMahasiswa($data)
    {
        $query = $this->db->table('mahasiswa')
            ->insert($data);
        return $query;
    }

    public function getMahasiswaById($id)
    {
        $query = $this->db->table('mahasiswa')
            ->select("mahasiswa.*,kelas.nama as nama_kelas,prodi.nama as nama_prodi")
            ->join('kelas', 'kelas.id = mahasiswa.id_kelas')
            ->join('prodi', 'prodi.id = mahasiswa.id_prodi')
            ->where('mahasiswa.id', $id)
            ->get();
        return $query;
    }

    public function updateMahasiswa($data, $id)
    {
        $query = $this->db->table('mahasiswa')
            ->where('id', $id)
            ->update($data);
        return $query;
    }

    public function deleteMahasiswa($id)
    {
        $query = $this->db->table('mahasiswa')
            ->where('id', $id)
            ->delete();
        return $query;
    }


    // get all prodi
    public function getProdi()
    {
        $query = $this->db->table('prodi')
            ->get();
        return $query;
    }

    // get all kelas
    public function getKelas()
    {
        $query = $this->db->table('kelas')
            ->get();
        return $query;
    }
}
