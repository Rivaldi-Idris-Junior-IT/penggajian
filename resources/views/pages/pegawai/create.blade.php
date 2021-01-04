@extends('layouts.default')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Data Pegawai</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
                <div class="form-group">
                    <label for="nik_pegawai" class="form-control-label">Nik Pegawai </label>
                    <input type="text" name="nik_pegawai" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_pegawai" class="form-control-label">Nama Pegawai </label>
                    <input type="text" name="nama_pegawai" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir" class="form-control-label">Tanggal Lahir </label>
                    <input type="date" name="tgl_lahir" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="alamat" class="form-control-label">Alamat </label>
                    <textarea name="alamat" id="" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="jabatan" class="form-control-label">Jabatan </label>
                    <input type="text" name="jabatan" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="agama" class="form-control-label">Agama </label>
                    <input type="text" name="agama" class="form-control" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Tambah Data Pegawai
                    </button>
                </div>
            </form>            
        </div>
    </div>

</div>

@endsection
