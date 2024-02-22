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
                    <h1 class="m-0">Detail Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard/buku">Buku</a></li>
                        <li class="breadcrumb-item active">Detail Buku</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="align-items-center card-header d-flex w-100 ">
                <h3 class="card-title">Data Buku</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="mb-3">
                    <img src="/gambar/{{ $buku->gambar }}" alt="sampul buku" class="mb-1">
                    <p class="text-bold">Kategori: {{ $buku->kategori->kategori }}</p>
                </div>
                <div class="d-flex">
                    <div class="mb-3 mr-4 w-100">
                        <label for="judul" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="judul"
                            value="{{ $buku->judul }}" readonly>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="penulis" class="form-label">Penulis Buku</label>
                        <input type="text" class="form-control" name="penulis" id="penulis"
                            placeholder="penulis" value="{{ $buku->penulis }}" readonly>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mb-3 mr-4 w-100">
                        <label for="penerbit" class="form-label">Penerbit Buku</label>
                        <input type="text" class="form-control" name="penerbit" id="penerbit"
                            placeholder="penerbit" value="{{ $buku->penerbit }}" readonly>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="thn_terbit" class="form-label">Tahun terbit</label>
                        <input type="number" class="form-control" name="thn_terbit" id="thn_terbit"
                            placeholder="tahun terbit" value="{{ $buku->thn_terbit }}" readonly> 
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mb-3 mr-4 w-100">
                        <label for="deskripsi" class="form-label">Deskripsi Buku</label>
                        <textarea readonly name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10">{{ $buku->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="mb-3 mr-4 w-100">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stok" id="stok" placeholder="stok"
                            value="{{ $buku->stok }}" readonly>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="jml_pinjam" class="form-label">Jumah buku dipinjam</label>
                        <input type="number" class="form-control" name="jml_pinjam" id="jml_pinjam" placeholder="jumlah pinjam"
                            value="{{ $buku->jml_pinjam }}" readonly>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

@section('script')
    @include('partial.datables')
@endsection
