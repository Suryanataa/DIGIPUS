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
                    <h1 class="m-0">Edit User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item "><a href="/dashboard/user">User</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="align-items-center card-header d-flex w-100 ">
                <h3 class="card-title">Data User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <input type="text" class="form-control" name="nama" placeholder="nama Lengkap" autofocus
                                value="{{ $user->nama }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                value="{{ $user->email }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="tanggal lahir"
                                value="{{ $user->tgl_lahir }}">
                        </div>
                        <div class="mb-3 input-group">
                            <input type="number" class="form-control" name="telp" placeholder="no.telepon"
                                value="{{ $user->telp }}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row d-flex " style="gap: 1rem">
                        <div class="mb-3 input-group d-block">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="d-flex" style="gap: 1rem">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk1"
                                        value="L" {{ $user->jk == 'L' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jk1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk2"
                                        value="P" {{ $user->jk == 'P' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jk2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 input-group d-flex flex-column ">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" placeholder="tempat tinggal" class="form-control w-100" id="alamat" cols="30"
                                rows="5">{{ $user->alamat }}</textarea>
                        </div>
                    </div>

                    <div class="mb-3 w-100">
                        <label for="role" class="form-label">Role User</label>
                        <select class="custom-select" name="role">
                            <option selected>Pilih role</option>
                            <option value="peminjam" {{ $user->role == 'peminjam' ? 'selected' : '' }}>peminjam</option>
                            <option value="petugas" {{ $user->role == 'petugas' ? 'selected' : '' }}>petugas</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>admin</option>
                        </select>
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
