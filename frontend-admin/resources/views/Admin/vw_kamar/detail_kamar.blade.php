<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Detail Data Kamar</title>
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
                    <h3 class="page-title mt-5">Detail Data Kamar</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    @foreach ($result->DetailKamar as $output)
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_kamar" id="lbl_kode_kamar">Kode Kamar</label>
                                <input class="form-control" type="text" name="txt_kode_kamar" id="txt_kode_kamar"
                                    maxlength="8" value="{{ $output->kode_kamar }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_nama_kamar" id="lbl_nama_kamar">Nama Kamar</label>
                                <input class="form-control" type="text" name="txt_nama_kamar" id="txt_nama_kamar"
                                    maxlength="20" value="{{ $output->nama_kamar }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_lantai" id="lbl_lantai">Lantai</label>
                                <input class="form-control" type="text" name="txt_lantai" id="txt_lantai"
                                    maxlength="20" value="{{ $output->lantai }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_deskripsi_kamar" id="lbl_deskripsi_kamar">Deskripsi Kamar</label>
                                <input class="form-control" type="text" name="txt_deskripsi_kamar" id="txt_deskripsi_kamar"
                                    maxlength="255" value="{{ $output->deskripsi_kamar }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_status" id="lbl_status">Status</label>
                                <input class="form-control" type="text" name="txt_status" id="txt_status"
                                    maxlength="20" value="{{ $output->status }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_harga" id="lbl_harga">Harga</label>
                                <input class="form-control" type="text" name="txt_harga" id="txt_harga"
                                    maxlength="20" value="{{ $output->harga }}" placeholder="" readonly/>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_foto_kamar" id="lbl_foto_kamar">Foto Kamar</label>
                                <input class="form-control" type="text" name="txt_foto_kamar" id="txt_foto_kamar"
                                    maxlength="20" value="{{ $output->foto_kamar }}" placeholder="" readonly/>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
        <button id="btn_kembali" class="btn btn-primary buttonedit">
            Kembali
        </button>
    </div>
</div>

<!-- Custom function JS -->
<!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- End Jquery -->

<script>

    // Buat function untuk btn_kembali
    document.getElementById("btn_kembali").addEventListener('click',
        function () {
            location.href = '{{ url('/Admin/vw_kamar/tampil_kamar') }}'
        })

</script>
<!-- End Function JS -->


@endsection
<!-- End Content -->
