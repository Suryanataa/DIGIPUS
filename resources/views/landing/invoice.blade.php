@extends('layout.landing_layout')

@section('content')
    <div class="px-[100px] mt-20">
        <h2 class="font-bold text-center text-primary text-[28px] mb-10">RIWAYAT PEMINJAMAN</h2>
        @if ($invoice->count() == 0)
            <img src="/images/illus-lib.png" alt="illustrasi" class="mx-auto" width="350">
            <h1 class="font-bold text-center text-primary text-[24px] mt-7">Data Belum Ada</h1>
        @else
            <div class="grid grid-cols-3 gap-6">
                @foreach ($invoice as $item)
                    <div
                        class="flex flex-col font-semibold bg-white text-primary text-[20px] py-5 px-[50px] gap-2 rounded-xl">
                        <p>Invoice: {{ $item->invoice }}</p>
                        <p>Tanggal Pinjam: {{ $item->tgl_pinjam }}</p>
                        <p>Status Pinjam: {{ $item->status }}</p>
                        @if ($item->status == 'pinjam' || $item->status == 'kembali')
                            <a href="{{ route('invoice.show', $item->invoice) }}"
                                class="w-full px-16 py-3 mx-auto mt-5 text-center text-white bg-primary rounded-xl hover:bg-secondary">detail</a>
                        @else
                            <a href="{{ route('list-pinjam.show', $item->invoice) }}"
                                class="w-full px-16 py-3 mx-auto mt-5 text-center text-white bg-primary rounded-xl hover:bg-secondary">detail</a>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
