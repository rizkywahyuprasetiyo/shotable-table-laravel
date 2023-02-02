@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4>Data Mahasiswa</h4>
                    <div>
                        <a href="#" class="btn btn-primary">Tambah</a>
                        <a href="#" class="btn btn-secondary">Simpan Urutan</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Rizky Wahyu Prasetiyo</td>
                            <td>171220372</td>
                            <td>04</td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dani Firmansyah</td>
                            <td>171220375</td>
                            <td>04</td>
                            <td>
                                <div>
                                    <a href="#" class="btn btn-success btn-sm">Edit</a>
                                    <form action="#" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection