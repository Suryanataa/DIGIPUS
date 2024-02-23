@extends('layout.landing_layout')

@section('content')
    <div class="px-[100px] mt-16">
        <h1 class="text-[28px] font-bold text-center mb-10 text-primary">KONFIRMASI PEMINJAMAN</h1>

        <div class="flex justify-center gap-20">
            <div class="flex justify-center w-1/2" style="padding: 25px 100px">
                <img src="/images/illust-confirm.png" alt="illustrasi konfirmasi">
            </div>
            <form action="{{ route('peminjaman.update', $invoice->invoice) }}" method="POST"
                class="flex flex-col justify-center w-1/2 gap-5 text-xl font-bold text-left bg-white rounded-xl text-primary"style="padding: 25px 100px">
                @method('PUT')
                @csrf
                <p>Invoice: {{$invoice->invoice}}</p>
                <p >Peminjam: {{$invoice->user->nama}}</p>
                <p >Jumlah: {{$buku}} buku</p>
                <div class="flex flex-col gap-3">
                    <label for="tgl_pinjam">Tanggal Pinjam:</label>
                    <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="border-2 rounded-xl border-primary">
                </div>
                    
                <button type="submit"
                    class="py-3 mt-5 text-white px-7 bg-primary rounded-xl hover:bg-secondary">konfirmasi</button>
            </form>
        </div>
    </div>
@endsection
