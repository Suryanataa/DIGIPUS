@extends('layout.landing_layout')

@section('content')
    <div class="relative h-[550px]">
        <img src="/images/perpustakaan-bg.jpg" alt="hero image" width="100%"
            style="object-fit: fill; height: 550px; position: absolute;">

        <h1 style="transform: translate(-50%, -50%); text-shadow: 5px 5px black"
            class="absolute font-bold text-white text-[40px] w-3/5 text-center top-1/2 left-1/2">
            TINGKATKAN LITERASI BANGSA DENGAN MEMBACA BUKU FAVORIT MU DISINI
        </h1>
    </div>

    <div class="px-[100px] mt-20">
        <div class="w-3/4 mb-10 ms-auto">
            <h2 class="font-bold text-center text-primary text-[28px]">SEMUA BUKU</h2>
        </div>
        <div class="flex justify-between gap-10">
            <div class="flex flex-col w-1/4 gap-5">
                <form class="flex items-center">
                    <input type="search" name="search" placeholder="Cari buku"
                        class="w-3/4 px-3 py-2 border-2 rounded-l-xl text-primary border-primary">

                    <button type="submit"
                        class="w-1/4 px-3 py-2 text-white border-2 bg-primary rounded-r-xl border-primary">cari</button>
                </form>

                <div class="w-full px-5 pt-4 pb-6 bg-white text-primary rounded-xl">
                    <h3 class="font-bold">FILTER KATEGORI</h3>

                    <ul class="flex flex-col gap-1 px-6 mt-1 font-semibold">
                        <li><a href="">semua buku</a></li>
                        <li><a href="">komik</a></li>
                        <li><a href="">novel</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-3/4">
                <div class="grid grid-cols-4 gap-5 2xl:gap-16">
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                    <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                        <img src="/images/buku2.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                        <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                            <h3 class="line-clamp-1 text-[20px]">
                                Buku Pelajaran
                            </h3>
                            <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
