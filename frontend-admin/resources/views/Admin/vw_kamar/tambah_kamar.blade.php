<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tambah Kamar</title>
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
                    <h3 class="page-title mt-5">Tambah Kamar</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Kode Kamar</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Kode Kamar" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Kamar</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Nama Kamar" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Lantai</label>
                                <select class="form-control" id="sel3" name="sellist1">
                                    <option>Pilih Lantai</option>
                                    <option>Lantai 1</option>
                                    <option>Lantai 2</option>
                                    <option>Lantai 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="sel3" name="sellist1">
                                    <option>Pilih Status</option>
                                    <option>Kosong</option>
                                    <option>Booking</option>
                                    <option>Penuh</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Harga</label>
                                <input class="form-control" type="text" value="" placeholder="Masukkan Harga" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Upload Foto</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="filename" />
                                    <label class="custom-file-label" for="customFile">Pilih File</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Deskripsi Kamar</label>
                                <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Masukkan Deskripsi Kamar"></textarea>
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
