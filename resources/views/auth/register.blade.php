@extends('layout.auth_layout')

@section('content')
    <div class="w-50 register-box">
        <div class="register-logo text-bold">
            <a href="../../index2.html">DIGIPUS</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Daftar akun perpustakaan baru</p>

                <form action="{{route('auth.register')}}" method="post">
                    @csrf
                    <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <input type="text" class="form-control" name="nama" placeholder="Full name" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="tanggal lahir">
                        </div>
                        <div class="mb-3 input-group">
                            <input type="number" class="form-control" name="telp" placeholder="no.telepon">
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
                                        value="L" checked>
                                    <label class="form-check-label" for="jk1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk2"
                                        value="P">
                                    <label class="form-check-label" for="jk2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 input-group d-flex flex-column ">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" placeholder="tempat tinggal" class="form-control w-100" id="alamat" cols="30"
                                rows="5"></textarea>
                        </div>
                    </div>
                    <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <input minlength="8" type="password" class="form-control" name="password"
                                placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 input-group">
                            <input minlength="8" type="password" class="form-control" name="password_confirmation"
                                placeholder="konfirmasi password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 text-center">sudah memiliki akun?<a href="/login"> login</a></p>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
@endsection
