<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Dashboard</title>
@endsection

<!-- header -->
@section('headerAdmin')
@include('Layout.headerAdmin')
@endsection
<!-- end header -->

<!-- sidebar -->
@section('sidebarAdmin')
@include('Layout.sidebarAdmin')
@endsection
<!-- end sidebar -->

<!-- content -->
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h4 class="page-title mt-3">Hallo Admin, Selamat Datang di Dashboard Kami.</h4>
                    <br>
                    <br>
                    <ul class="breadcrumb">
                        <h5>
                        <li class="breadcrumb-item active">Dashboard</li>
                        </h5>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Notif Atas -->
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">10</h3>
                                <h6 class="text-muted">Total Booking</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <i class="fas fa-users fa-3x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">20</h3>
                                <h6 class="text-muted">Kamar Kosong</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <i class="fas fa-bed fa-3x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">10</h3>
                                <h6 class="text-muted">Kamar Terisi</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <i class="fas fa-bed fa-3x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">3</h3>
                                <h6 class="text-muted">Komplain</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i class="fas fa-wrench fa-3x"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Notif Atas -->

        <div class="row">
            <div class="col-md-12 d-flex">
                <div class="card card-table flex-fill">
                    <div class="card-header">
                        <h4 class="card-title float-left mt-2">Data Booking</h4>
                        <!-- <button type="button" class="btn btn-primary float-right veiwbutton">
                            <a href="{{ route('Admin/vw_pesan/tampil_pesan') }}">Veiw All
                        </button> -->
                        <a href="{{ route('Admin/vw_pesan/tampil_pesan') }}" class="btn btn-primary float-right veiwbutton">
                            <span> View All </span></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Kode Sewa</th>
                                        <th class="text-center">Kode Pesan</th>
                                        <th class="text-center">Kode User</th>
                                        <th class="text-center">Kode kamar</th>
                                        <th class="text-center">Tanggal Keluar</th>
                                        <th class="text-center">Pembayaran</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result->DataSewa as $output)
                                    <tr>
                                        <td class="text-center">{{ $output->kode_sewa }}</td>
                                        <td class="text-center">{{ $output->kode_pesan }}</td>
                                        <td class="text-center">{{ $output->kode_user }}</td>
                                        <td class="text-center">{{ $output->kode_kamar }}</td>
                                        <td class="text-center">{{ $output->tanggal_keluar }}</td>
                                        <td class="text-center">{{ $output->pembayaran }}</td>
                                        <td class="text-center">{{ $output->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<!-- end content -->
