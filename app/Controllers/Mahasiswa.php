<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswa;

    function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        $data['mahasiswa'] = $this->mahasiswa->getMahasiswa()->getResult();

        return view('pages/mahasiswa/index', $data);
    }

    public function create()
    {
        $data = [
            'prodi' => $this->mahasiswa->getProdi()->getResultArray(),
            'kelas' => $this->mahasiswa->getKelas()->getResultArray()
        ];
        return view('pages/mahasiswa/create', $data);
    }

    // buat fungsi store
    public function store()
    {
        if (!$this->validate([
            'nama' => 'required|min_length[3]|max_length[20]',
            'nim' => 'required|min_length[3]|max_length[20]',
            'ipk' => 'required|min_length[3]|max_length[20]',
            'id_kelas' => 'required|min_length[3]|max_length[20]',
            'id_prodi' => 'required|min_length[3]|max_length[20]',
            'tmp_lahir' => 'required|min_length[3]|max_length[20]',
            'tgl_lahir' => 'required|min_length[3]|max_length[20]',
        ])) {
            $data = [
                'nama' => $this->request->getPost('nama'),
                'nim' => $this->request->getPost('nim'),
                'ipk' => $this->request->getPost('ipk'),
                'gender' => $this->request->getPost('jenis_kelamin'),
                'id_kelas' => $this->request->getPost('id_kelas'),
                'id_prodi' => $this->request->getPost('id_prodi'),
                'tmp_lahir' => $this->request->getPost('tmp_lahir'),
                'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            ];

            session()->setFlashdata('success_add', 'Data berhasil ditambahkan');
            $this->mahasiswa->createMahasiswa($data);
            return redirect()->to('/mahasiswa');
        } else {
            return view('pages/mahasiswa/create');
        }
    }

    // buat fungsi mahasiswa delet
    public function delete($id)
    {
        session()->setFlashdata('success_delete', 'Data berhasil dihapus');
        $this->mahasiswa->deleteMahasiswa($id);
        return redirect()->to('/mahasiswa');
    }
}
