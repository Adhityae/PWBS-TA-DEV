<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tambah RRiwayat Booking</title>
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

<!-- Content -->
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Tambah Riwayat Booking</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kode Sewa</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Kode Sewa" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kode Pesan</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Kode Pesan" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kode User</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Kode User" />
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label>Kode Kamar</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Kode Kamar" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input class="form-control" type="date" value="" placeholder="Masukkan Tanggal Keluar" />
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label>Pembayaran</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Pembayaran" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="sel3" name="sellist1">
                                    <option>Pilih Status</option>
                                    <option>Belum Bayar</option>
                                    <option>DP</option>
                                    <option>DiCicil</option>
                                    <option>Sudah Bayar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <button type="button" class="btn btn-primary buttonedit ml-2">
            Simpan
        </button>
        <button type="button" class="btn btn-primary buttonedit">
            Batal
        </button>
    </div>
</div>

@endsection
<!-- End Content -->
