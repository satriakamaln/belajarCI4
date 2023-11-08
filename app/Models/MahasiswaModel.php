<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $allowedFields = ['npm', 'nama', 'jurusan'];

    public function getMahasiswa()
    {
        return $this->findAll();
    }

    public function detailMahasiswa($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
