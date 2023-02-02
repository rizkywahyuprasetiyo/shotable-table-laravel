<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaRequest;

class MahasiswaController extends Controller
{
    public function index(Mahasiswa $mahasiswa)
    {
        $dataMahasiswa = $mahasiswa->get();

        return view('index', compact('dataMahasiswa'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Mahasiswa $mahasiswa, MahasiswaRequest $mahasiswaRequest)
    {
        $data = $mahasiswaRequest->validated();

        $mahasiswa->create($data);

        return redirect(route('mahasiswa.index'))->with('berhasil', 'Data mahasiswa berhasil ditambahkan.');
    }
}
