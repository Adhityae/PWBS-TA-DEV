<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Detail Data Booking</title>
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
                    <h3 class="page-title mt-5">Detail Data Booking</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    @foreach ($result->DetailPesan as $output)
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_pesan" id="lbl_kode_pesan">Kode Pesan</label>
                                <input class="form-control" type="text" name="txt_kode_pesan" id="txt_kode_pesan"
                                    maxlength="8" value="{{ $output->kode_pesan }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_kamar" id="lbl_kode_kamar">Kode Kamar</label>
                                <input class="form-control" type="text" name="txt_kode_kamar" id="txt_kode_kamar"
                                    maxlength="8" value="{{ $output->kode_kamar }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_user" id="lbl_kode_user">Kode User</label>
                                <input class="form-control" type="text" name="txt_kode_user" id="txt_kode_user"
                                    maxlength="8" value="{{ $output->kode_user }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_tanggal_masuk" id="lbl_tanggal_masuk">Tanggal Masuk</label>
                                <input class="form-control" type="text" name="txt_tanggal_masuk" id="txt_tanggal_masuk"
                                    maxlength="8" value="{{ $output->tanggal_masuk }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_lama_tinggal" id="lbl_lama_tinggal">Lama Tinggal</label>
                                <input class="form-control" type="text" name="txt_lama_tinggal" id="txt_lama_tinggal"
                                    maxlength="8" value="{{ $output->lama_tinggal }}" placeholder="" readonly/>
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
            location.href = '{{ url('/Admin/vw_pesan/tampil_pesan') }}'
        })


</script>
<!-- End Function JS -->


@endsection
<!-- End Content -->
