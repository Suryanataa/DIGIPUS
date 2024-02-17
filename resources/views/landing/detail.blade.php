@extends('layout.landing_layout')

@section('content')
    <h1 class="font-bold text-center text-primary text-[28px]">DETAIL BUKU</h1>

    <div class="flex px-[100px] gap-12 mt-10">
        <div class="flex flex-col items-end w-2/5">
            <span>
                <img src="/images/buku3.jpg" alt="sampul buku" class="object-contain">
                <form class="mt-6">
                    <button type="submit" class="w-full py-3 text-white px-7 bg-primary rounded-xl hover:bg-secondary">simpan
                        koleksi</button>
                </form>
            </span>
        </div>
        <div class="flex flex-col w-3/5 text-[20px] text-primary font-semibold gap-4">
            <p>JUDUL: ONE PIECE</p>
            <p>PENULIS: EICHIRO ODA</p>
            <p>PENERBIT: SHONEN JUMP</p>
            <p>TAHUN TERBIT: 1998</p>
            <p class="flex gap-4">RATING: <span class="flex gap-2">@include('landing.partial.star') 4.5 </span></p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis expedita id pariatur nulla tenetur ducimus
                consequuntur fugiat velit est non. Sint dignissimos qui praesentium tempore minus id aliquid, temporibus
                dolores, voluptatem animi magni ad consequatur doloremque quos, rerum ea tenetur! Ipsam quos similique
                doloremque dolorum quidem amet, et, in deserunt, ex pariatur numquam corporis necessitatibus eligendi
                ratione laboriosam soluta vitae quasi nobis? Error eligendi aperiam sed sit ipsam necessitatibus inventore
                est laboriosam laudantium rerum assumenda ut labore asperiores ullam quis animi, eum quam perspiciatis quia.
                Cumque praesentium quae culpa nemo dolores, ullam eos earum enim! Blanditiis, neque. Laboriosam, corporis
                ratione?
            </p>

            <form class="flex flex-col px-10 mt-10 bg-white py-7 text-primary rounded-xl">
                <h3 class="font-bold text-center">BERIKAN ULASAN</h3>

                <div class="flex flex-row-reverse justify-center gap-5 mt-2 rating">
                    <input value="5" name="rate" id="star5" type="radio">
                    <label title="text" for="star5"></label>
                    <input value="4" name="rate" id="star4" type="radio">
                    <label title="text" for="star4"></label>
                    <input value="3" name="rate" id="star3" type="radio">
                    <label title="text" for="star3"></label>
                    <input value="2" name="rate" id="star2" type="radio">
                    <label title="text" for="star2"></label>
                    <input value="1" name="rate" id="star1" type="radio">
                    <label title="text" for="star1"></label>
                </div>

                <textarea name="ulasan" id="ulasan" cols="30" rows="5"
                    class="w-9/12 mx-auto mt-5 rounded-lg border-primary text-primary bg-dasar"></textarea>

                <button type="submit"
                    class="px-16 py-3 mx-auto mt-5 text-sm text-white w-fit bg-primary rounded-xl hover:bg-secondary">kirim</button>
            </form>
        </div>
    </div>

    <div class="px-[100px] mt-20">
        <h2 class="font-bold text-center text-primary text-[28px] mb-10">ULASAN BUKU</h2>

        <div class="grid grid-cols-3 gap-6">
            <div class="flex flex-col font-semibold bg-white text-primary text-[20px] py-5 px-10 gap-2 rounded-xl">
                <span>Nama: Surya Nata Ardhana</span>
                <span class="flex gap-2">Rating: <span class="flex gap-1">@include('landing.partial.star') 5</span></span>
                <div class="flex flex-col gap-2">
                    <span>Ulasan:</span>
                    <textarea name="ulasan" readonly cols="30" disabled
                        class="w-full mx-auto rounded-lg border-primary text-primary bg-dasar"></textarea>
                </div>
            </div>
            <div class="flex flex-col font-semibold bg-white text-primary text-[20px] py-5 px-10 gap-2 rounded-xl">
                <span>Nama: Surya Nata Ardhana</span>
                <span class="flex gap-2">Rating: <span class="flex gap-1">@include('landing.partial.star') 5</span></span>
                <div class="flex flex-col gap-2">
                    <span>Ulasan:</span>
                    <textarea name="ulasan" readonly cols="30" disabled
                        class="w-full mx-auto rounded-lg border-primary text-primary bg-dasar">rekomen</textarea>
                </div>
            </div>
            <div class="flex flex-col font-semibold bg-white text-primary text-[20px] py-5 px-10 gap-2 rounded-xl">
                <span>Nama: Surya Nata Ardhana</span>
                <span class="flex gap-2">Rating: <span class="flex gap-1">@include('landing.partial.star') 5</span></span>
                <div class="flex flex-col gap-2">
                    <span>Ulasan:</span>
                    <textarea name="ulasan" readonly cols="30" disabled
                        class="w-full mx-auto rounded-lg border-primary text-primary bg-dasar">bagus</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection
