@extends('layout.dashboard_layout')
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="align-items-center card-header d-flex w-100 ">
                <h3 class="card-title">Data Buku</h3>
                <a href="{{ route('buku.create') }}" class="ml-auto btn btn-success">Tambah data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table" class="table text-center table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Tahun Terbit</th>
                            <th>Stok</th>
                            <th>Buku Dipinjam</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $item)
                            <tr>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->penulis }}</td>
                                <td>{{ $item->thn_terbit }}</td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->jml_pinjam }}</td>
                                <td>
                                    <div class="justify-content-center d-flex" style="gap: .5rem;">
                                        <a href="{{ route('buku.show', $item->id) }}" class="btn btn-info">Detail</a>
                                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('buku.destroy', $item->id) }}" class="btn btn-danger"
                                            data-confirm-delete="true">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

@section('script')
    @include('partial.datables')
@endsection
