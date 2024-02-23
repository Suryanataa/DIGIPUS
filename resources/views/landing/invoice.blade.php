@extends('layout.landing_layout')

@section('content')
    <div class="px-[100px] mt-20">
        <h2 class="font-bold text-center text-primary text-[28px] mb-10">RIWAYAT PEMINJAMAN</h2>

        <div class="grid grid-cols-3 gap-6">
            @foreach ($invoice as $item)
                <div class="flex flex-col font-semibold bg-white text-primary text-[20px] py-5 px-[50px] gap-2 rounded-xl">
                    <p>Invoice: {{ $item->invoice }}</p>
                    <p>Tanggal Pinjang: {{ $item->tgl_pinjam }}</p>
                    <p>Status Pinjam: {{ $item->status }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
