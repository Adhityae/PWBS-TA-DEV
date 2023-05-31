<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Profile</title>
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
        <div class="page-header mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Profile</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content profile-tab-cont">
                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Detail Profile</span>
                                            <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                                    class="fa fa-edit mr-1"></i>Edit</a>
                                        </h5>

                                        <div class="content container-fluid">
                                            <div class="row mt-5">
                                                <div class="row align-items-center">
                                                    <div class="col-auto profile-image">
                                                        <img class="rounded-circle" alt="User Image"
                                                            src="{{ asset('/template/assets/img/profiles/avatar-10.jpg') }}" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-5">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    Kode User
                                                </p>
                                                <p class="col-sm-9">KDSR01</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    Nama
                                                </p>
                                                <p class="col-sm-9">Admin</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    Email
                                                </p>
                                                <p class="col-sm-9">admin@gnail.com</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    JK
                                                </p>
                                                <p class="col-sm-9">Pria</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    Alamat
                                                </p>
                                                <p class="col-sm-9">Bandar Lampung</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    Telepon
                                                </p>
                                                <p class="col-sm-9">089626255162</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    Status
                                                </p>
                                                <p class="col-sm-9">Karyawan</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-sm-left mb-0 mb-sm-3">
                                                    Role
                                                </p>
                                                <p class="col-sm-9">Admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Detail Profil</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row form-row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Kode User</label>
                                                                <input type="text" class="form-control"
                                                                    value="KDSR01" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Nama</label>
                                                                <input type="text" class="form-control" value="Admin" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Email</label>
                                                                <input type="email" class="form-control"
                                                                    value="admin@gmail.com" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Telepon</label>
                                                                <input type="text" value="08956772834"
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Jenis Kelamin</label>
                                                                <select class="form-control" id="sel3" name="sellist1">
                                                                    <option>Pilih Jenis Kelamin</option>
                                                                    <option>Pria</option>
                                                                    <option>Wanita</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Alamat</label>
                                                                <input type="text" class="form-control"
                                                                    value="Bandar Lampung" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <input type="text" class="form-control"
                                                                    value="Karyawan" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Role</label>
                                                                <input type="text" class="form-control" value="Admin" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block">
                                                        Save Changes
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- End Content -->
