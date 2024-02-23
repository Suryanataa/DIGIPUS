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
                    <h1 class="m-0">Peminjaman Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Peminjaman</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="align-items-center card-header d-flex w-100 ">
                <h3 class="card-title">Data Peminjaman</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="table" class="table text-center table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>Peminjam</th>
                            <th>Tanggal Pinjam</th>
                            <th>Ketepatan Kembali</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $item)
                            <tr>
                                <td>{{ $item->invoice }}</td>
                                <td>{{ $item->user->nama }}</td>
                                <td>{{ $item->tgl_pinjam }}</td>
                                <td>{{ $item->tgl_kembali == null ? 'Belum Kembali' : ($item->tenggat_pinjam < $item->tgl_kembali ? 'Telat' : 'Tepat Waktu') }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <div class="justify-content-center d-flex" style="gap: .5rem;">
                                        <a href="{{ route('dashboard.peminjaman.show', $item->invoice) }}" class="btn btn-info">Detail</a>
                                        @if ($item->tgl_pinjam != null && $item->status == 'pending')
                                            <a href="{{ route('dashboard.peminjaman.konfirmasi', $item->invoice) }}" class="btn btn-success">Konfirmasi
                                                Pinjam</a>
                                        @endif

                                        @if ($item->status == 'pinjam')
                                            <a href="{{ route('dashboard.peminjaman.kembali', $item->invoice) }}" class="btn btn-danger"
                                                data-confirm-delete="true">Konfirmasi Kembali</a>
                                        @endif
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
