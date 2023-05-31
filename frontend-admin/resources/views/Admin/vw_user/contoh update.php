<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

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
                    <h3 class="page-title mt-5">Ubah Data User</h3>
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
                                <input class="form-control" type="text" name="txt_kodeuser" id="txt_kodeuser" maxlength="8" value="089900"
                                value="{{ $output->kode_user }}"    placeholder="Kode User (Harus Angka - Tidak Boleh Karakter)" />
                                <label id="err_kodeuser" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode User Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_nama" id="lbl_nama">Nama</label>
                                <input class="form-control" type="text" name="txt_nama" id="txt_nama" maxlength="50"
                                value="{{ $output->nama }}"    placeholder="Masukkan Nama" />
                                <label id="err_nama" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Nama Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_email" id="lbl_email">Email</label>
                                <input class="form-control" type="text" name="txt_email" id="txt_email" maxlength="50"
                                value="{{ $output->email }}"    placeholder="Masukkan Email" />
                                <label id="err_email" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Email Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_password" id="lbl_password">Password</label>
                                <input class="form-control" type="password" name="txt_password" id="txt_password" maxlength="50"
                                value="{{ $output->password }}"    placeholder="Masukkan Password" />
                                <label id="err_password" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Password Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_jk" id="lbl_jk">JK</label>
                                <select class="form-control" id="txt_jk" name="txt_jk">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option id="txt_jk" name="txt_jk" value="{{ $output->jk }}">Pria</option>
                                    <option id="txt_jk" name="txt_jk" value="{{ $output->jk }}">Wanita</option>
                                </select>
                                <label id="err_jk" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Jenis Kelamin
                                    Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_status" id="lbl_status">Pilih Status</label>
                                <select class="form-control" id="txt_status" name="txt_status">
                                    <option>Select</option>
                                    <option name="txt_status" id="txt_status" value="{{ $output->status_user }}">Pelajar/Mahasiswa</option>
                                    <option name="txt_status" id="txt_status" value="{{ $output->status_user }}">Karyawan</option>
                                    <option name="txt_status" id="txt_status" value="{{ $output->status_user }}">Pegawai</option>
                                    <option name="txt_status" id="txt_status" value="{{ $output->status_user }}">Lainnya...</option>
                                </select>
                                <label id="err_status" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Status Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_telepon" id="lbl_telepon">Telepon</label>
                                <input class="form-control" type="text" name="txt_telepon" id="txt_telepon" maxlength="13"
                                value="{{ $output->no_telepon }}"    placeholder="Masukkan Telepon" />
                                <label id="err_telepon" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Telepon Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_alamat" id="lbl_alamat">Alamat</label>
                                <textarea class="form-control" rows="5" name="txt_alamat" id="txt_alamat"
                                value="{{ $output->alamat }}"    placeholder="Masukkan Alamat"></textarea>
                                <label id="err_alamat" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Alamat Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_fotouser" id="lbl_fotouser">Foto User</label>
                                <input class="form-control" type="text" name="txt_fotouser" id="txt_fotouser"
                                value="{{ $output->foto_user }}"    placeholder="Masukkan fotouser" />
                                <label id="err_fotouser" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Foto USer Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_role" id="lbl_role">Role</label>
                                <select class="form-control" id="txt_role" name="txt_role">
                                    <option>Pilih Role</option>
                                    <option id="txt_role" name="txt_role" value="{{ $output->role }}">Admin</option>
                                    <option id="txt_role" name="txt_role" value="{{ $output->role }}">Customer</option>
                                </select>
                                <label id="err_role" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Role Harus Diisi
                                    !</label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
        <button id="btn_simpan" class="btn btn-primary buttonedit ml-2" onclick="save()">
            Simpan
        </button>
        <button id="btn_batal" class="btn btn-primary buttonedit ml-2">
            Batal
        </button>
        <button id="btn_kembali" class="btn btn-primary buttonedit">
            Kembali
        </button>
    </div>
</div>

@endsection
<!-- End Content -->
