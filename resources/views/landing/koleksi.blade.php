@extends('layout.landing_layout')

@section('content')
    <div class="px-[100px] mt-20">
        <h2 class="font-bold text-center text-primary text-[28px] mb-10">KOLEKSI BUKU</h2>

        <div class="grid grid-cols-4 gap-6">
            @foreach ($koleksi as $item)
                <div class="flex flex-col font-semibold bg-white text-primary text-[20px] py-5 px-[50px] gap-2 rounded-xl">
                    <img src="/gambar/{{ $item->buku->gambar }}" alt="sampul" width="100" class="mx-auto ">
                    <p>Judul buku: {{ $item->buku->judul }}</p>
                    <p class="line-clamp-2">Deskripsi: {{ $item->buku->deskripsi }}</p>
                    <form action="{{ route('koleksi.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <div class="flex flex-col gap-3">
                            <button type="submit"
                                class="py-3 text-white rounded-md px-7 bg-primary hover:bg-secondary">hapus koleksi</button>
                            <a href="{{ route('buku.detail', $item->buku->slug) }}"
                                class="w-full py-3 text-center border-2 rounded-md px-7 border-primary hover:bg-primary hover:text-white">lihat buku</a>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
