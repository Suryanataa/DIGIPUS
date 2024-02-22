@extends('layout.dashboard_layout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Kategori</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard/kategori">Kategori</a></li>
                        <li class="breadcrumb-item active">Tambah Kategori</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="align-items-center card-header d-flex w-100 ">
                <h3 class="card-title">Kategori Buku</h3>
            </div>
            <div class="card-body">
                <form action="{{route('kategori.store')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori Buku</label>
                        <input type="text" class="form-control" name="kategori" id="kategori" placeholder="masukan kategori">
                    </div>

                    <button type="submit" class="btn-success btn">simpan</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
