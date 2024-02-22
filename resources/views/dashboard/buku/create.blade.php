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
                    <h1 class="m-0">Tambah Buku</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard/buku">Buku</a></li>
                        <li class="breadcrumb-item active">Tambah Buku</li>
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
                <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex">
                        <div class="mb-3 mr-4 w-100">
                            <label for="judul" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul"
                                placeholder="masukan judul">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="penulis" class="form-label">Penulis Buku</label>
                            <input type="text" class="form-control" name="penulis" id="penulis"
                                placeholder="masukan penulis">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 mr-4 w-100">
                            <label for="penerbit" class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit"
                                placeholder="masukan penerbit">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="thn_terbit" class="form-label">Tahun terbit</label>
                            <input type="number" class="form-control" name="thn_terbit" id="thn_terbit"
                                placeholder="masukan tahun terbit">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 mr-4 w-100">
                            <label for="deskripsi" class="form-label">Deskripsi Buku</label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10"></textarea>

                        </div>
                        <div class="mb-3 w-100">
                            <label for="gambar" class="form-label">Sampul Buku</label>
                            <input type="file" class="form-control" name="gambar" id="gambar"
                                placeholder="masukan gambar">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="mb-3 mr-4 w-100">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok" id="stok"
                                placeholder="masukan stok">
                        </div>
                        <div class="mb-3 w-100">
                            <label for="gambar" class="form-label">Kategori Buku</label>
                            <select class="custom-select" name="id_kategori">
                                <option selected>Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{$item->id}}">{{$item->kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="mt-4 btn-success btn">simpan</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection

@section('script')
    @include('partial.datables')
@endsection
