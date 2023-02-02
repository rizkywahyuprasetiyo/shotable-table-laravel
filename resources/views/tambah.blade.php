@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('mahasiswa.simpan') }}" method="post">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="contoh. Rizky Wahyu Prasetiyo" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" name="nim" id="nim" placeholder="contoh. 171220300" value="{{ old('nim') }}">
                            @error('nim')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="contoh. 04" value="{{ old('kelas') }}">
                            @error('kelas')
                            <div class="text-danger mt-1">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection