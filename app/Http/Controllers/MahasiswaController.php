<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Requests\MahasiswaRequest;
use App\Http\Requests\UrutanMahasiswaRequest;

class MahasiswaController extends Controller
{
    public function index(Mahasiswa $mahasiswa)
    {
        $dataMahasiswa = $mahasiswa->orderby('index', 'asc')->get();

        return view('index', compact('dataMahasiswa'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Mahasiswa $mahasiswa, MahasiswaRequest $mahasiswaRequest)
    {
        $data = $mahasiswaRequest->validated();

        // ambil data posisi terakhir
        $dataPosisi = $mahasiswa->orderby('index', 'asc')->latest()->first();
        if ($dataPosisi) {
            $data['index'] = $dataPosisi->index + 1;
        } else {
            $data['index'] = 1;
        }

        $mahasiswa->create($data);

        return redirect(route('mahasiswa.index'))->with('berhasil', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('edit', compact('mahasiswa'));
    }

    public function update(Mahasiswa $mahasiswa, MahasiswaRequest $mahasiswaRequest)
    {
        $data = $mahasiswaRequest->validated();

        $mahasiswa->update($data);

        return redirect(route('mahasiswa.index'))->with('berhasil', 'Data mahasiswa berhasil diperbaharui.');
    }

    public function hapus(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return back()->with('berhasil', 'Data mahasiswa berhasil dihapus.');
    }

    public function ubahPosisi(Mahasiswa $mahasiswa, UrutanMahasiswaRequest $shortableMahasiswaRequest)
    {
        $data = $shortableMahasiswaRequest->validated();
        $dataPosisi = $data['index'];

        for ($index = 0; $index < count($dataPosisi); $index++) {
            $dataMahasiswa = $mahasiswa->find($dataPosisi[$index]);
            $dataMahasiswa->update(['index' => $index]);
        }

        return back()->with('berhasil', 'Data posisi berhasil disimpan.');
    }
}
