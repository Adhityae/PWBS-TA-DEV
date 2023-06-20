<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Edit Data User</title>
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
                    <h3 class="page-title mt-5">Edit Data User</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kodeuser" id="lbl_kodeuser">Kode User</label>
                                <input class="form-control" type="text" name="txt_kodeuser" id="txt_kodeuser"
                                    maxlength="8" placeholder=""/>
                                <label id="err_kodeuser" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode User Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_nama" id="lbl_nama">Nama</label>
                                <input class="form-control" type="text" name="txt_nama" id="txt_nama" maxlength="50"
                                 placeholder="" />
                                <label id="err_nama" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Nama Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_email" id="lbl_email">Email</label>
                                <input class="form-control" type="text" name="txt_email" id="txt_email" maxlength="50"
                                 placeholder="" />
                                <label id="err_email" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Email Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_password" id="lbl_password">Password</label>
                                <input class="form-control" type="password" name="txt_password" id="txt_password"
                                    maxlength="50" />
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
                                    <option id="txt_jk" name="txt_jk">Pilih Jenis Kelamin
                                    </option>
                                    <option id="txt_jk" name="txt_jk">Pria</option>
                                    <option id="txt_jk" name="txt_jk">Wanita</option>
                                </select>
                                <label id="err_jk" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Jenis Kelamin
                                    Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_alamat" id="lbl_alamat">Alamat</label>
                                <input class="form-control" type="text" name="txt_alamat" id="txt_alamat"
                                    placeholder="" />
                                <label id="err_alamat" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Alamat Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_status" id="lbl_status">Pilih Status</label>
                                <select class="form-control" id="txt_status" name="txt_status">
                                    <option name="txt_status" id="txt_status">Pilih Status</option>
                                    <option name="txt_status" id="txt_status">
                                        Pelajar/Mahasiswa</option>
                                    <option name="txt_status" id="txt_status">
                                        Karyawan</option>
                                    <option name="txt_status" id="txt_status">Pegawai
                                    </option>
                                    <option name="txt_status" id="txt_status">
                                        Lainnya...</option>
                                </select>
                                <label id="err_status" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Status Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_telepon" id="lbl_telepon">Telepon</label>
                                <input class="form-control" type="text" name="txt_telepon" id="txt_telepon"
                                    maxlength="13" placeholder="" />
                                    <label id="err_telepon" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Telepon Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_fotouser" id="lbl_fotouser">Foto User</label>
                                <input class="form-control" type="text" name="txt_fotouser" id="txt_fotouser"
                                 placeholder="" />
                                     <label id="err_fotouser" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Foto USer Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_role" id="lbl_role">Role</label>
                                <select class="form-control" id="txt_role" name="txt_role">
                                    <option id="txt_role" name="txt_role">
                                        Pilih Role</option>
                                    <option id="txt_role" name="txt_role">Admin</option>
                                    <option id="txt_role" name="txt_role">Customer</option>
                                </select>
                                <label id="err_role" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Role Harus Diisi
                                    !</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <button id="btn_ubah" class="btn btn-primary buttonedit ml-2" onclick="edit()">
            Ubah
        </button>
        <button id="btn_batal" class="btn btn-primary buttonedit ml-2">
            Batal
        </button>
        <button id="btn_kembali" class="btn btn-primary buttonedit">
            Kembali
        </button>
    </div>
</div>


<!-- Custom function JS -->
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
<!-- End Jquery -->

<script>
    // Buat function untuk btn_kembali
    document.getElementById("btn_kembali").addEventListener('click',
        function () {
            location.href = '{{ url('/Admin/vw_user/tampil_user') }}'
        })

    // Fungsi "btn_batal"
        document.querySelector("#btn_batal").addEventListener('click',
            function() {
                location.href = "{{ url('/Admin/vw_user/edit_user/updateUser') }}/" + kode_user_lama;
            })

    // Hilangkan pesan error kodeuser
    document.querySelector("#err_kodeuser").style.display = 'none'
    // Hilangkan pesan error nama
    document.querySelector("#err_nama").style.display = 'none'
    // Hilangkan pesan error email
    document.querySelector("#err_email").style.display = 'none'
    // Hilangkan pesan error password
    document.querySelector("#err_password").style.display = 'none'
    // Hilangkan pesan error jk
    document.querySelector("#err_jk").style.display = 'none'
    // Hilangkan pesan error alamat
    document.querySelector("#err_alamat").style.display = 'none'
    // Hilangkan pesan error telepon
    document.querySelector("#err_telepon").style.display = 'none'
    // Hilangkan pesan error status
    document.querySelector("#err_status").style.display = 'none'
    // Hilangkan pesan error fotouser
    document.querySelector("#err_fotouser").style.display = 'none'
    // Hilangkan pesan error role
    document.querySelector("#err_role").style.display = 'none'


     // Tampilkan data
        let kode_user_lama = "{{$kode_user_lama}}"

        document.querySelector("#txt_kodeuser").value = "{{$kode_user}}"
        document.querySelector("#txt_nama").value = "{{$nama}}"
        document.querySelector("#txt_email").value = "{{$email}}"
        document.querySelector("#txt_password").value = "{{$password}}"
        document.querySelector("#txt_jk").value = "{{$jk}}"
        document.querySelector("#txt_alamat").value = "{{$alamat}}"
        document.querySelector("#txt_telepon").value = "{{$no_telepon}}"
        document.querySelector("#txt_status").value = "{{$status_user}}"
        document.querySelector("#txt_fotouser").value = "{{$foto_user}}"
        document.querySelector("#txt_role").value = "{{$role}}"


    // fungsi "btn_simpan"
    const edit = () => {

            // Ternary Computer
             const kode_user = document.querySelector("#txt_kodeuser").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error kodeuser
                    document.querySelector("#err_kodeuser").style.display = 'unset',
                    // Ubah class "txt_kodeuser"
                    document.querySelector("#txt_kodeuser").className = "form-control",
                    // set error = 0
                    err_kodeuser = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_kodeuser
                    document.querySelector("#err_kodeuser").style.display = 'none',

                    document.querySelector("#txt_kodeuser").className = "form-control",
                    // set error = 0
                    err_kodeuser = 0
                ]

            const nama = document.querySelector("#txt_nama").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error nama
                    document.querySelector("#err_nama").style.display = 'unset',
                    // Ubah class "txt_nama"
                    document.querySelector("#txt_nama").className = "form-control",
                    // set error = 0
                    err_nama = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_nama
                    document.querySelector("#err_nama").style.display = 'none',

                    document.querySelector("#txt_nama").className = "form-control",
                    // set error = 0
                    err_nama = 0
                ]

            const email = document.querySelector("#txt_email").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error email
                    document.querySelector("#err_email").style.display = 'unset',
                    // Ubah class "txt_email"
                    document.querySelector("#txt_email").className = "form-control",
                    // set error = 0
                    err_email = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_email
                    document.querySelector("#err_email").style.display = 'none',

                    document.querySelector("#txt_email").className = "form-control",
                    // set error = 0
                    err_email = 0
                ]

            const password = document.querySelector("#txt_password").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error password
                    document.querySelector("#err_password").style.display = 'unset',
                    // Ubah class "txt_password"
                    document.querySelector("#txt_password").className = "form-control",
                    // set error = 0
                    err_password = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_password
                    document.querySelector("#err_password").style.display = 'none',

                    document.querySelector("#txt_password").className = "form-control",
                    // set error = 0
                    err_password = 0
                ]

            const jk = document.querySelector("#txt_jk").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error jk
                    document.querySelector("#err_jk").style.display = 'unset',
                    // Ubah class "txt_jk"
                    document.querySelector("#txt_jk").className = "form-control",
                    // set error = 0
                    err_jk = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_jk
                    document.querySelector("#err_jk").style.display = 'none',

                    document.querySelector("#txt_jk").className = "form-control",
                    // set error = 0
                    err_jk = 0
                ]

            const alamat = document.querySelector("#txt_alamat").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error alamat
                    document.querySelector("#err_alamat").style.display = 'unset',
                    // Ubah class "txt_alamat"
                    document.querySelector("#txt_alamat").className = "form-control",
                    // set error = 0
                    err_alamat = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_alamat
                    document.querySelector("#err_alamat").style.display = 'none',

                    document.querySelector("#txt_alamat").className = "form-control",
                    // set error = 0
                    err_alamat = 0
                ]

            const no_telepon = document.querySelector("#txt_telepon").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error telepon
                    document.querySelector("#err_telepon").style.display = 'unset',
                    // Ubah class "txt_telepon"
                    document.querySelector("#txt_telepon").className = "form-control",
                    // set error = 0
                    err_telepon = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_telepon
                    document.querySelector("#err_telepon").style.display = 'none',

                    document.querySelector("#txt_telepon").className = "form-control",
                    // set error = 0
                    err_telepon = 0
                ]

            const status_user = document.querySelector("#txt_status").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error status
                    document.querySelector("#err_status").style.display = 'unset',
                    // Ubah class "txt_status"
                    document.querySelector("#txt_status").className = "form-control",
                    // set error = 0
                    err_status = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_status
                    document.querySelector("#err_status").style.display = 'none',

                    document.querySelector("#txt_status").className = "form-control",
                    // set error = 0
                    err_status = 0
                ]

            const foto_user = document.querySelector("#txt_fotouser").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error fotouser
                    document.querySelector("#err_fotouser").style.display = 'unset',
                    // Ubah class "txt_fotouser"
                    document.querySelector("#txt_fotouser").className = "form-control",
                    // set error = 0
                    err_fotouser = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_fotouser
                    document.querySelector("#err_fotouser").style.display = 'none',

                    document.querySelector("#txt_fotouser").className = "form-control",
                    // set error = 0
                    err_fotouser = 0
                ]

            const role = document.querySelector("#txt_role").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error role
                    document.querySelector("#err_role").style.display = 'unset',
                    // Ubah class "txt_role"
                    document.querySelector("#txt_role").className = "form-control",
                    // set error = 0
                    err_role = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_role
                    document.querySelector("#err_role").style.display = 'none',

                    document.querySelector("#txt_role").className = "form-control",
                    // set error = 0
                    err_role = 0
                ]

        // jika seluruh komponen sudah diisi
        const check = (kode_user[2] === 0 && nama[2] === 0 && email[2] === 0 && password[2] === 0 && jk[2] === 0 && alamat[2] === 0 &&
                no_telepon[2] === 0 && status_user[2] === 0 && foto_user[2] === 0 && role[2] === 0) ?
            // proses simpan data (panggil fungsi editData)
            editData(document.querySelector("#txt_kodeuser").value,document.querySelector("#txt_nama").value, document.querySelector("#txt_email").value,
                document.querySelector("#txt_password").value, document.querySelector("#txt_jk").value,
                document.querySelector("#txt_alamat").value, document.querySelector("#txt_telepon").value,
                document.querySelector("#txt_status").value, document.querySelector("#txt_fotouser").value,
                document.querySelector("#txt_role").value)
                :
            ""
    }

        // buat fungsi edit data (Metode async/await)
        const editData = async (kode_user, nama, email, password, jk, alamat, no_telepon, status_user, foto_user, role) => {
            // Collecting data
            let data = {
                "kode_user": kode_user,
                "nama": nama,
                "email": email,
                "password": password,
                "jk": jk,
                "alamat": alamat,
                "no_telepon": no_telepon,
                "status_user": status_user,
                "foto_user": foto_user,
                "role": role,
            }
            // proses kirim data
            try {
                // await fetch (url dan atribut)
                let response = await fetch("{{ url('/Admin/vw_user/edit_user/editUser') }}/"+kode_user_lama, {
                    method: "PUT",
                    headers: {
                        'Content-type': 'application/json',
                        'X-CSRF-Token': document.querySelector('meta[name="_token"]').content
                    },
                    body: JSON.stringify(data)
                })
                // baca hasil dari controller
                let result = await response.json()
                alert(result.pesan)
                document.querySelector("#btn_kembali").click()
            } catch (error) {
                alert("Data gagal di kirim !")
            }
        }

</script>
<!-- End Function JS -->


@endsection
<!-- End Content -->
