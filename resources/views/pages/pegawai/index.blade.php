@extends('layouts.default')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">

            <div class="button-added mb-3">
                <a href="{{ route('pegawai.create') }}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data Pegawai</span>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nik Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jabatan</th>
                            <th>Agama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <tbody>
                        @forelse ($datas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data->nik_pegawai }}</td>
                            <td>{{ $data->nama_pegawai }}</td>
                            <td>{{ $data->tgl_lahir }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->jabatan }}</td>
                            <td>{{ $data->agama }}</td>
                            <td style="width:50px;">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="{{ route('pegawai.edit', $data->id) }}" class="btn btn-warning btn-circle">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('pegawai.destroy', $data->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="mt-3 btn btn-danger btn-circle" aria-label="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="sm:w-2/3 lg:w-3/4 p-4 text-center">
                                Data tidak tersedia
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
