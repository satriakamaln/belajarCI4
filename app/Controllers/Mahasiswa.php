<?php

namespace App\Controllers;

use App\Models\MahasiswaModel; //Hubungkan ke Mahasiswa Model

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa()
        ];

        return view('mahasiswa/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->detailMahasiswa($id)
        ];

        return view('mahasiswa/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa',
            'validation' => session()->getFlashdata('validation') ?? \Config\Services::validation()
        ];

        return view('mahasiswa/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'npm' => [
                'rules' => 'required|is_unique[mahasiswa.npm]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'is_unique' => '{field} sudah ada'
                ]
            ],
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ])) {
            session()->setFlashdata('validation', \Config\Services::validation());
            return redirect()->to('/mahasiswa/create')->withInput();
        }

        $this->mahasiswaModel->save([
            'npm' => $this->request->getVar('npm'),
            'nama' => $this->request->getVar('nama'),
            'jurusan' => $this->request->getVar('jurusan')
        ]);

        session()->setFlashdata('pesan', 'Data Mahasiswa Berhasil Ditambahkan');

        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->mahasiswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Mahasiswa Berhasil Dihapus');
        return redirect()->to('/mahasiswa');
    }
}
