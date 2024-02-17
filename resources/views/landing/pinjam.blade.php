@extends('layout.landing_layout')

@section('content')
    <div class="flex items-center justify-center mt-12">
        <div class="flex flex-col items-center w-2/5 gap-5 px-10 font-semibold bg-white py-7 text-primary rounded-xl">
            <h1 class="text-[28px] font-bold">BUAT PEMINJAMAN</h1>

            <p class="text-center text-[20px]">Buat invoice peminjaman dulu sebelum memilih buku yang dipinjam, hanya bisa
                meminjam 1
                buku
                pada masing
                masing
                judul!!</p>

            <form class="mt-6">
                <button type="submit" class="py-3 text-white px-7 bg-primary rounded-xl hover:bg-secondary">buat
                    invoice</button>
            </form>
        </div>
    </div>
@endsection
