@extends('layout.landing_layout')

@section('content')
    <div class="px-[100px] mt-16">
        <h1 class="text-[28px] font-bold text-center mb-10 text-primary">PROFILE</h1>

        <div class="flex justify-center gap-20">
            <div class="w-1/2 bg-white rounded-xl text-primary" style="padding: 50px 80px">
                <form action="{{ route('profil.update', Auth::user()->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="w-full border-2 rounded-xl border-primary" name="nama" placeholder="nama Lengkap" autofocus value="{{ Auth::user()->nama}}">
                           
                        </div>
                        <div class="mb-3 input-group">
                            <label for="email">Email</label>
                            <input type="email" class="w-full border-2 rounded-xl border-primary" name="email" placeholder="Email" value="{{ Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <label for="tgl_lahir">Tanggal lahir</label>
                            <input type="date" class="w-full border-2 rounded-xl border-primary" name="tgl_lahir" placeholder="tanggal lahir" value="{{ Auth::user()->tgl_lahir}}"> 
                        </div>
                        <div class="mb-3 input-group">
                            <label for="telp">No.Telpon</label>
                            <input type="number" class="w-full border-2 rounded-xl border-primary" name="telp" placeholder="no.telepon" value="{{ Auth::user()->telp}}">
                           
                        </div>
                    </div>
                    <div class="flex flex-col " style="gap: 1rem">
                        <div class="mb-3 input-group d-block">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="flex" style="gap: 1rem">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk1"
                                        value="L" {{ Auth::user()->jk == 'L' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="jk1">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="jk2"
                                        value="P" {{ Auth::user()->jk == 'P' ? 'checked' : ''}}>
                                    <label class="form-check-label" for="jk2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 input-group d-flex flex-column ">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" placeholder="tempat tinggal" class="w-full border-2 rounded-xl border-primary w-100" id="alamat" cols="30"
                                rows="5">{{Auth::user()->alamat}}</textarea>
                        </div>
                    </div>
                    {{-- <div class="d-flex" style="gap: 1rem">
                        <div class="mb-3 input-group">
                            <label for="password">Password</label>
                            <input minlength="8" type="password" class="w-full border-2 rounded-xl border-primary" name="password"
                                placeholder="Password">
                           
                        </div>
                        <div class="mb-3 input-group">
                            <label for="confirm_password">Konfirmasi password</label>
                            <input minlength="8" type="password" class="w-full border-2 rounded-xl border-primary" name="password_confirmation"
                                placeholder="konfirmasi password">
                        </div>
                    </div> --}}
                    <button type="submit" class="w-full py-3 mt-5 text-white px-7 bg-primary rounded-xl hover:bg-secondary">edit profile</button>
                </form> 
            </div>
        </div>
    </div>
@endsection
