@extends('layout.landing_layout')

@section('content')
    <div class="mx-[100px] font-bold flex items-center justify-between">
        <div class="flex flex-col w-3/5 gap-2">
            <h1 class="text-primary text-[36px]">PERPUTAKAAN DIGITAL - DIGIPUS</h1>
            <p class="text-aksen text-[24px] w-5/6">
                Cara terbaik untuk meningkatkan literasi mu dengan membaca buku disini!!!
            </p>
        </div>
        <div class="w-2/5">
            <img src="/images/illus-read.png" alt="illustrasi baca buku" width="100%">
        </div>
    </div>

    <div class="mx-[100px] text-primary">
        <h2 class="text-[28px] font-bold text-center mb-10">BUKU KAMI</h2>

        <div class="grid grid-cols-5 gap-16 2xl:gap-28">
            <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                <img src="/images/buku1.png" alt="sampul buku" class="h-[280px] rounded-t-xl">
                <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                    <h3 class="line-clamp-1 text-[20px]">
                        Lukisan Senja
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
                <img src="/images/buku3.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                    <h3 class="line-clamp-1 text-[20px]">
                        One Piece
                    </h3>
                    <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                </div>
            </a>
            <a href="/buku/detail"class="flex flex-col bg-white rounded-xl h-fit">
                <img src="/images/buku4.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                    <h3 class="line-clamp-1 text-[20px]">
                        The King SNBP
                    </h3>
                    <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                </div>
            </a>
            <a href="/buku/detail" class="flex flex-col bg-white rounded-xl h-fit">
                <img src="/images/buku5.jpg" alt="sampul buku" class="h-[280px] rounded-t-xl">
                <div class="flex flex-col gap-2 mx-3 mt-2 mb-6 font-semibold text-primary">
                    <h3 class="line-clamp-1 text-[20px]">
                        ATOMIC HABBIT
                    </h3>
                    <p class="flex items-center gap-2">@include('landing.partial.star') 4.5</p>
                </div>
            </a>
        </div>

        <div class="flex justify-center w-full mt-10">
            <a href="/buku" class="px-10 py-2 border-2 rounded-md w-fit border-primary hover:bg-primary hover:text-white">
                Lihat Semua
            </a>
        </div>


        <h2 class="text-[28px] font-bold text-center mt-28 relative">
            TENTANG KAMI
            <div id="tentang" class="absolute -top-32"></div>
        </h2>
        <div class="flex">
            <div class="flex justify-center w-1/2">
                <img src="/images/illus-lib.png" alt="illustrasi perpustakaan" class="w-9/12">
            </div>
            <div class="flex flex-col justify-center w-1/2 gap-10 font-semibold text-[20px]">
                <p>
                    digipus merupakan sebuah perpustakaan yang memiliki buku yang sangat lengkap dengan berbagai kategori
                </p>
                <p>
                    digipus sudah menerapkan sistem perpustakaan digital yang dapat membantu dalam peminjaman dan manajemen
                    buku
                </p>
            </div>
        </div>

        <h2 class="text-[28px] font-bold text-center mt-20 mb-10">KONTAK & LOKASI</h2>
        <div class="flex gap-12">
            <div class="flex flex-col justify-center items-end w-2/5 font-semibold text-[20px]">
                <div class="flex flex-col gap-7">
                    <p class="flex items-center gap-5 fill-[#395886]">
                        @include('landing.partial.email') digipus@gmail.com
                    </p>
                    <p class="flex items-center gap-5">
                        @include('landing.partial.phone') 089630000000
                    </p>
                </div>
            </div>
            <div class="flex justify-center w-3/5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.623033233787!2d106.82434547482869!3d-6.181182593806282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f442596e0c93%3A0x4ba58be40979fe36!2sPerpustakaan%20Nasional%20Republik%20Indonesia!5e0!3m2!1sid!2sid!4v1708142588616!5m2!1sid!2sid"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-xl"></iframe>

            </div>
        </div>

    </div>
@endsection
