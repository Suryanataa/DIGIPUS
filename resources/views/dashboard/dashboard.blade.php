@extends('layout.dashboard_layout')
@section('style')
    <!-- DataTables -->
    <link rel="stylesheet" href="/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            @include('partial.dashboard.sumbox')
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="card-title">
                                Buku terbaru
                            </h3>
                            <a href="/dashboard/buku" class="ml-auto btn btn-info">Lihat detail</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table text-center table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Penulis</th>
                                        <th>Tahun Terbit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="card-title">
                                Data Peminjaman terbaru
                            </h3>
                            <a href="/dashboard/peminjaman" class="ml-auto btn btn-info">Lihat detail</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table text-center table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Peminjam</th>
                                        <th>Tanggal Pinjam</th>
                                        <th>Tanggal Kembali</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="card-title">
                                Ulasan Terbaru
                            </h3>
                            <a href="/dashboard/ulasan" class="ml-auto btn btn-info">Lihat detail</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="table" class="table text-center table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Buku</th>
                                        <th>Ulasan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('script')
    <!-- DataTables  & Plugins -->
    <script src="/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/AdminLTE/plugins/jszip/jszip.min.js"></script>
    <script src="/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("table").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "searching": false,
                "paginate": false,
                "info": false
            }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');

        });
    </script>
@endsection
