<!-- master_user -->
@extends('Layout.master_user')
<!-- end master_user -->

@section('title_tamplate')
<title>Sistem Customer E-KOS | Dashboard</title>
@endsection

<!-- header -->
@section('headerUser')
@include('Layout.headerUser')
@endsection
<!-- end header -->

<!-- sidebar -->
@section('sidebarUser')
@include('Layout.sidebarUser')
@endsection
<!-- end sidebar -->

<!-- content -->
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h4 class="page-title mt-3">Hallo User, Selamat Datang di Dashboard Kami.</h4>
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
                      <h3 class="card_widget_header">1</h3>
                      <h6 class="text-muted">Belum Bayar</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted">
                        <i class="fas fa-book fa-3x"></i>
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
                      <h3 class="card_widget_header">2</h3>
                      <h6 class="text-muted">Sudah Bayar</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted">
                        <i class="fas fa-file-invoice-dollar fa-3x"></i>
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
                      <h3 class="card_widget_header">1</h3>
                      <h6 class="text-muted">Komplain</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"
                        ><i class="fas fa-wrench fa-3x"></i
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- End Notif Atas -->
    </div>
</div>

@endsection
<!-- end content -->
