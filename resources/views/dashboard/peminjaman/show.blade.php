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
                    <h1 class="m-0">Detail Peminjaman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard/peminjaman">Peminjaman</a></li>
                        <li class="breadcrumb-item active">Detail Peminjaman</li>
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
                <div class="border-bottom d-flex justify-content-between align-items-center">
                    <img src="/images/digipus-logo.png" alt="logo digipus" width="200">
                    <p class="text-xl">{{ $invoice->invoice }}</p>
                </div>
                <div class="pb-5 mt-5 text-lg border-bottom">
                    <h1 class="text-xl">Detail Peminjaman</h1>
                    <p>
                        Nama Peminjam: <span class="font-weight-bold">{{ $invoice->user->nama }}</span></p>
                    <p>
                        Status Peminjaman: <span class="font-weight-bold">{{ $invoice->status }}</span></p>
                    <p>
                        Tanggal Peminjaman: <span class="font-weight-bold">{{ $invoice->tgl_pinjam }}</span></p>
                    <p>
                        Tenggat Dikembalikan: <span
                            class="font-weight-bold">{{ $invoice->tenggat_pinjam ? $invoice->tenggat_pinjam : '-' }}</span>
                    </p>
                    <p>
                        Tanggal Dikembalikan: <span
                            class="font-weight-bold">{{ $invoice->tgl_kembali ? $invoice->tgl_kembali : '-' }}</span>
                    </p>
                    <p>
                        Ketepatan Pengembalian: <span
                            class="font-weight-bold">{{ $invoice->tgl_kembali == null ? 'Belum Kembali' : ($invoice->tenggat_pinjam < $invoice->tgl_kembali ? 'Telat' : 'Tepat Waktu') }}</span>
                    </p>
                </div>
                <div class="mt-5 text-lg">
                    <h2 class="text-xl">List Buku</h2>
                    <table id="table" class="table text-center table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $item)
                                <tr>
                                    <td>{{ $item->buku->judul }}</td>
                                    <td>{{ $item->buku->penulis }}</td>
                                    <td>{{ $item->buku->penerbit }}</td>
                                    <td>{{ $item->buku->thn_terbit }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

@section('script')
    @include('partial.datables')
@endsection
