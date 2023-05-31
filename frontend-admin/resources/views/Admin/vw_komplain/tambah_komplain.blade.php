<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tambah Komplain</title>
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
                    <h3 class="page-title mt-5">Tambah Komplain</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kode Komplain</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Kode Komplain" />
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
                                <label>Deskripsi Kamar</label>
                                <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Masukkan Deskripsi Komplain"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Perihal</label>
                                <select class="form-control" id="sel3" name="sellist1">
                                    <option>Pilih Perihal</option>
                                    <option>Token Listrik Habis</option>
                                    <option>Air Tidak Mengalir</option>
                                    <option>Genteng Bocor</option>
                                    <option>Keran Air Macet</option>
                                    <option>Lainnya...</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="sel3" name="sellist1">
                                    <option>Pilih Status</option>
                                    <option>Belum</option>
                                    <option>Proses</option>
                                    <option>Sudah</option>
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
