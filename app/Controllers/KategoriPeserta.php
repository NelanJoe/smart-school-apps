<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriPesertaModel;

class KategoriPeserta extends BaseController
{

    protected $kategoriPeserta;

    function __construct()
    {
        $this->kategoriPeserta = new KategoriPesertaModel();
    }

    public function index()
    {
        $data['kategoriPeserta'] = $this->kategoriPeserta->findAll();

        return view('pages/master/kategori-peserta/index', $data);
    }

    public function create()
    {
        return view('pages/master/kategori-peserta/create');
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->kategoriPeserta->insert([
            'nama' => $this->request->getVar('nama'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Kategori Berhasil');
        return redirect()->to('/kategori-peserta');
    }

    public function edit($id)
    {
        $data['kategoriPeserta'] = $this->kategoriPeserta->find($id);
        return view('pages/master/kategori-peserta/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->kategoriPeserta->update($id, [
            'nama' => $this->request->getVar('nama'),
        ]);
        session()->setFlashdata('message', 'Update Data Kategori Berhasil');
        return redirect()->to('/kategori-peserta');
    }

    public function delete($id)
    {
        $this->kategoriPeserta->delete($id);
        session()->setFlashdata('message', 'Hapus Data Kategori Berhasil');
        return redirect()->to('/kategori-peserta');
    }
}
