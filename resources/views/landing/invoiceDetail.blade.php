@extends('layout.landing_layout')

@section('content')
    <div class="px-[100px] mt-20">
        <h2 class="font-bold text-center text-primary text-[28px] mb-10">DETAIL PEMINJAMAN</h2>

        <div class="flex justify-center gap-6">
            <div class="flex flex-col font-semibold bg-white text-primary text-[20px] py-5 px-[50px] gap-2 rounded-xl w-1/2">
                <div class="flex items-center justify-between">
                    <img src="/images/digipus-logo.png" width="200" alt="logo">
                    <p>{{ $invoice->invoice }}</p>
                </div>
                <div class="flex items-center justify-between">

                    <p>Nama: {{ $invoice->user->nama }}</p>
                    <p>Status Pinjam: {{ $invoice->status }}</p>
                </div>
                <p>Tanggal Pinjam: {{ $invoice->tgl_pinjam }}</p>
                <p>Tenggat Pinjam: {{ $invoice->tenggat_pinjam }}</p>
                <p>Tanggal Kembali: {{ $invoice->tgl_kembali }}</p>
                <p>Ketepatan Pengembalian:
                    {{ $invoice->tgl_kembali == null ? 'Belum Kembali' : ($invoice->tenggat_pinjam < $invoice->tgl_kembali ? 'Telat' : 'Tepat Waktu') }}
                </p>
                
                <p>List Buku</p>
                <table class="w-full text-sm text-left rtl:text-right text-primary">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Judul Buku
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penulis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Penerbit
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tahun <Tt></Tt>erbit
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                            <tr class="bg-white border-b ">
                                <td class="px-6 py-4">
                                    {{ $item->buku->judul }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->buku->penulis }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->buku->penerbit }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $item->buku->thn_terbit }}
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
