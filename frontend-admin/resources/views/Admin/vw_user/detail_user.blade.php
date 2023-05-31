<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Detail Data User</title>
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
                    <h3 class="page-title mt-5">Detail Data User</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    @foreach ($result->DetailUser as $output)
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kodeuser" id="lbl_kodeuser">Kode User</label>
                                <input class="form-control" type="text" name="txt_kodeuser" id="txt_kodeuser"
                                    maxlength="8" value="{{ $output->kode_user }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_nama" id="lbl_nama">Nama</label>
                                <input class="form-control" type="text" name="txt_nama" id="txt_nama" maxlength="50"
                                    value="{{ $output->nama }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_email" id="lbl_email">Email</label>
                                <input class="form-control" type="text" name="txt_email" id="txt_email" maxlength="50"
                                    value="{{ $output->email }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <input type="password" name='password' class="form-control" name="password" value="{{ $output->password }}" required autocomplete="current-password" readonly>
                                <div class="input-group-append">
                                    <a href="" class="btn btn-outline-secondary"><i class="bi bi-eye-slash" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_jk" id="lbl_jk">Jenis Kelamin</label>
                                <input class="form-control" type="text" name="txt_jk" id="txt_jk"
                                    value="{{ $output->jk }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_alamat" id="lbl_alamat">Alamat</label>
                                <input class="form-control" type="text" name="txt_alamat" id="txt_alamat"
                                    value="{{ $output->alamat }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_status" id="lbl_status">Status</label>
                                <input class="form-control" type="text" name="txt_status" id="txt_status"
                                    value="{{ $output->status_user }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_telepon" id="lbl_telepon">Telepon</label>
                                <input class="form-control" type="text" name="txt_telepon" id="txt_telepon"
                                    maxlength="13" value="{{ $output->no_telepon }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_fotouser" id="lbl_fotouser">Foto User</label>
                                <input class="form-control" type="text" name="txt_fotouser" id="txt_fotouser"
                                    value="{{ $output->foto_user }}" placeholder="" readonly/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_role" id="lbl_role">Role</label>
                                <input class="form-control" type="text" name="txt_role" id="txt_role"
                                    value="{{ $output->role }}" placeholder="" readonly/>
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
            location.href = '{{ url('/Admin/vw_user/tampil_user') }}'
        })


    // Hide Password
     $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if($('#show_hide_password input').attr("type") == "text"){
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass( "bi bi-eye-slash" );
                    $('#show_hide_password i').removeClass( "bi bi-eye" );
                }else if($('#show_hide_password input').attr("type") == "password"){
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass( "bi bi-eye-slash" );
                    $('#show_hide_password i').addClass( "bi bi-eye" );
                }
            });
            });
    // End Hide Password

</script>
<!-- End Function JS -->


@endsection
<!-- End Content -->
