<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$sumBuku}}</h3>
                <p>Total Buku</p>
            </div>
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <a href="/dashboard/buku" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{$sumPinjam}}</h3>

                <p>Total Buku Dipinjam</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{$sumAkun}}</h3>

                <p>Total Akun</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="/dashboard/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box" style="background-color: purple">
            <div class="inner">
                <h3>{{$sumUlasan}}</h3>

                <p>Total Ulasan</p>
            </div>
            <div class="icon">
                <i class="fas fa-star"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
