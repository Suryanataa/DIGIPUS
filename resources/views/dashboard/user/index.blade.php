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
                    <h1 class="m-0">Manajemen Akun</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Akun User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="align-items-center card-header d-flex w-100 ">
                <h3 class="card-title">Data Akun User</h3>
                <a href="{{ route('user.create') }}" class="ml-auto btn btn-success">Tambah data</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table" class="table text-center table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->jk  == "L" ? "Laki-laki" : "Perempuan" }}</td>
                                <td>{{ $item->tgl_lahir }}</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <div class="justify-content-center d-flex" style="gap: .5rem;">
                                        <a href="{{ route('user.show', $item->id) }}" class="btn btn-info">Detail</a>
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('user.destroy', $item->id) }}" class="btn btn-danger"
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
