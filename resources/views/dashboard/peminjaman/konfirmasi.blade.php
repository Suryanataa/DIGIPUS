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
                    <h1 class="m-0">Konfirmasi Peminjaman</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard/peminjaman">Peminjaman</a></li>
                        <li class="breadcrumb-item active">Konfirmasi Peminjaman</li>
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
                <form action="{{ route('dashboard.peminjaman.store', $invoice->invoice) }}" method="POST"
                    class="pb-5 mt-5 text-lg border-bottom">
                    @csrf
                    @method('put')
                    <h1 class="text-xl">Detail Peminjaman</h1>
                    <p>Nama Peminjam: <span class="font-weight-bold">{{ $invoice->user->nama }}</span></p>
                    <p>Tanggal Peminjaman: <span class="font-weight-bold">{{ $invoice->tgl_pinjam }}</span></p>
                    {{-- <p>Status Peminjaman: <span class="font-weight-bold">{{ $invoice->status }}</span></p> --}}
                    <div class="mb-3 w-100">
                        <label for="tenggat" class="form-label">Tenggat Kembali (2 minggu sejak dipinjam)</label>
                        <input type="date" name="tenggat_pinjam" id="tenggat" class="form-control"
                            value="{{ $tenggat }}" readonly>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="status" class="form-label">Status Peminjaman</label>
                        <select class="custom-select" name="status">
                            <option selected>Ubah Status</option>
                            <option value="pending" {{ $invoice->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="pinjam" {{ $invoice->status == 'pinjam' ? 'selected' : '' }}>Pinjam</option>
                        </select>
                    </div>
                    <button type="submit" class="mt-4 btn btn-success">konfirmasi</button>
                </form>
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
