<nav id="nav" class="sticky top-0 z-50 flex items-center justify-between text-primary"
    style="padding-left: 100px; padding-right: 100px;">
    <img src="/images/digipus-logo.png" alt="logo" width="150">

    <ul class="flex font-bold gap-7">
        <li class="hover:text-aksen"><a href="/">BERANDA</a></li>
        <li class="hover:text-aksen"><a href="/#tentang">TENTANG</a></li>
        <li class="hover:text-aksen"><a href="/buku">BUKU</a></li>
        <li class="hover:text-aksen"><a href="/peminjaman">PEMINJAMAN</a></li>
    </ul>

    @auth
    <form action="{{route('auth.logout')}}" method="post">
        @csrf
        <button type="submit" class="py-3 text-white bg-red-500 px-7 rounded-xl hover:bg-red-800">keluar</button>
    </form>
    @endauth

    @guest
        <a href="/login" class="py-3 text-white px-7 bg-primary rounded-xl hover:bg-secondary">Masuk</a>
    @endguest
</nav>
