@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if(session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ session()->get('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card">
                <form action="{{ route('mahasiswa.ubahPosisi') }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Data Mahasiswa</h4>
                        <div>
                            <a href="{{ route('mahasiswa.tambah') }}" class="btn btn-primary">Tambah</a>
                            <button type="submit" class="btn btn-secondary">Simpan Urutan</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="ayam">
                                @foreach($dataMahasiswa as $index => $mahasiswa)
                                <tr class="handle">
                                    <input type="hidden" name="index[]" value="{{ $mahasiswa->id }}">
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->kelas }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-success btn-sm">Edit</a>
                                            {{-- <form action="{{ route('mahasiswa.hapus', $mahasiswa->id) }}" method="post" class="d-inline" onsubmit="return confirm('Data akan dihapus. Lanjutkan?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form> --}}
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
{{-- <script src="{{ asset('js/shortable.js') }}"></script> --}}
{{-- <script src="https://raw.githack.com/SortableJS/Sortable/master/Sortable.js"></script> --}}
<script>
    var el = document.getElementById('ayam');
    new Sortable.create(el);
    // function shortable(){
    // // let player = document.getElementById("player-list");
    // var el = document.getElementById('list-subTahapan');
    // new Sortable.create(el);
    // }
    // shortable();
</script>
@endpush