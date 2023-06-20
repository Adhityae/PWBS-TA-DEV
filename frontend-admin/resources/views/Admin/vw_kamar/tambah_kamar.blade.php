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
                                <label for="txt_kode_kamar" id="lbl_kode_kamar">Kode Kamar</label>
                                <input class="form-control" type="text"name="txt_kode_kamar" id="txt_kode_kamar" maxlength="8" placeholder="Masukkan Kode Kamar" />
                                <label id="err_kode_kamar" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode Kamar Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_nama_kamar" id="lbl_nama_kamar">Nama_kamar Kamar</label>
                                <input class="form-control" type="text" name="txt_nama_kamar" id="txt_nama_kamar" maxlength="50" placeholder="Masukkan Nama Kamar Kamar" />
                                <label id="err_nama_kamar" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Nama Kamar Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_lantai" id="lbl_lantai">Lantai</label>
                                <select class="form-control" id="txt_lantai" name="txt_lantai">
                                    <option>Pilih Lantai</option>
                                    <option id="txt_lantai" name="txt_lantai">Lantai 1</option>
                                    <option id="txt_lantai" name="txt_lantai">Lantai 2</option>
                                    <option id="txt_lantai" name="txt_lantai">Lantai 3</option>
                                </select>
                                <label id="err_lantai" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Harga Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_deskripsi_kamar" id="lbl_deskripsi_kamar">Deskripsi Kamar</label>
                                <textarea class="form-control" type="text"name="txt_deskripsi_kamar" id="txt_deskripsi_kamar" rows="5" placeholder="Masukkan Kode Kamar" ></textarea>
                                <label id="err_deskripsi_kamar" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Deskripsi Kamar Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_status" id="lbl_status">Status</label>
                                <select class="form-control" id="txt_status" name="txt_status">
                                    <option>Pilih Status</option>
                                    <option id="txt_status" name="txt_status">Kosong</option>
                                    <option id="txt_status" name="txt_status">Booking</option>
                                    <option id="txt_status" name="txt_status">Penuh</option>
                                </select>
                                <label id="err_status" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Status Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_harga" id="lbl_harga">Harga</label>
                                <input class="form-control" type="text" name="txt_harga" id="txt_harga" maxlength="50" placeholder="Masukkan Harga" />
                                <label id="err_harga" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Harga Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_foto_kamar" id="lbl_foto_kamar">Foto Kamar</label>
                                <input class="form-control" type="text" name="txt_foto_kamar" id="txt_foto_kamar" maxlength="50" placeholder="Masukkan Foto Kamar" />
                                <label id="err_foto_kamar" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Foto Kamar Harus
                                    Diisi
                                    !</label>
                            </div>
                        </div>
                    </div>
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

<!-- Custom function JS -->

<script>
    // Hilangkan pesan error kode_kamar
    document.querySelector("#err_kode_kamar").style.display = 'none'
    // Hilangkan pesan error nama_kamar
    document.querySelector("#err_nama_kamar").style.display = 'none'
    // Hilangkan pesan error lantai
    document.querySelector("#err_lantai").style.display = 'none'
    // Hilangkan pesan error deskripsi_kamar
    document.querySelector("#err_deskripsi_kamar").style.display = 'none'
    // Hilangkan pesan error status
    document.querySelector("#err_status").style.display = 'none'
    // Hilangkan pesan error harga
    document.querySelector("#err_harga").style.display = 'none'
    // Hilangkan pesan error foto_kamar
    document.querySelector("#err_foto_kamar").style.display = 'none'


    // Buat function untuk btn_batal
    document.getElementById("btn_batal").addEventListener('click',
        function () {
            location.href = '{{ url('Admin/vw_kamar/tambah_kamar') }}'
        })

    // Buat function untuk btn_kembali
    document.getElementById("btn_kembali").addEventListener('click',
        function () {
            location.href = '{{ url('/Admin/vw_kamar/tampil_kamar') }}'
        })

    // fungsi "btn_simpan"
    const save = () => {

            // Ternary Computer
             const kode_kamar = document.querySelector("#txt_kode_kamar").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error kodeuser
                    document.querySelector("#err_kode_kamar").style.display = 'unset',
                    // Ubah class "txt_kode_kamar"
                    document.querySelector("#txt_kode_kamar").className = "form-control",
                    // set error = 0
                    err_kode_kamar = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_kode_kamar
                    document.querySelector("#err_kode_kamar").style.display = 'none',

                    document.querySelector("#txt_kode_kamar").className = "form-control",
                    // set error = 0
                    err_kode_kamar = 0
                ]

            const nama_kamar = document.querySelector("#txt_nama_kamar").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error nama_kamar
                    document.querySelector("#err_nama_kamar").style.display = 'unset',
                    // Ubah class "txt_nama_kamar"
                    document.querySelector("#txt_nama_kamar").className = "form-control",
                    // set error = 0
                    err_nama_kamar = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_nama_kamar
                    document.querySelector("#err_nama_kamar").style.display = 'none',

                    document.querySelector("#txt_nama_kamar").className = "form-control",
                    // set error = 0
                    err_nama_kamar = 0
                ]

            const lantai = document.querySelector("#txt_lantai").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error lantai
                    document.querySelector("#err_lantai").style.display = 'unset',
                    // Ubah class "txt_lantai"
                    document.querySelector("#txt_lantai").className = "form-control",
                    // set error = 0
                    err_lantai = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_lantai
                    document.querySelector("#err_lantai").style.display = 'none',

                    document.querySelector("#txt_lantai").className = "form-control",
                    // set error = 0
                    err_lantai = 0
                ]

            const deskripsi_kamar = document.querySelector("#txt_deskripsi_kamar").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error deskripsi_kamar
                    document.querySelector("#err_deskripsi_kamar").style.display = 'unset',
                    // Ubah class "txt_deskripsi_kamar"
                    document.querySelector("#txt_deskripsi_kamar").className = "form-control",
                    // set error = 0
                    err_deskripsi_kamar = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_deskripsi_kamar
                    document.querySelector("#err_deskripsi_kamar").style.display = 'none',

                    document.querySelector("#txt_deskripsi_kamar").className = "form-control",
                    // set error = 0
                    err_deskripsi_kamar = 0
                ]

            const status = document.querySelector("#txt_status").value === "" ?
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

            const harga = document.querySelector("#txt_harga").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error harga
                    document.querySelector("#err_harga").style.display = 'unset',
                    // Ubah class "txt_harga"
                    document.querySelector("#txt_harga").className = "form-control",
                    // set error = 0
                    err_harga = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_harga
                    document.querySelector("#err_harga").style.display = 'none',

                    document.querySelector("#txt_harga").className = "form-control",
                    // set error = 0
                    err_harga = 0
                ]

            const foto_kamar = document.querySelector("#txt_foto_kamar").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error foto_kamar
                    document.querySelector("#err_foto_kamar").style.display = 'unset',
                    // Ubah class "txt_foto_kamar"
                    document.querySelector("#txt_foto_kamar").className = "form-control",
                    // set error = 0
                    err_foto_kamar = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_foto_kamar
                    document.querySelector("#err_foto_kamar").style.display = 'none',

                    document.querySelector("#txt_foto_kamar").className = "form-control",
                    // set error = 0
                    err_foto_kamar = 0
                ]


        // jika seluruh komponen sudah diisi
        const check = (kode_kamar[2] === 0 && nama_kamar[2] === 0 && lantai[2] === 0 && deskripsi_kamar[2] === 0 && status[2] === 0 && harga[2] === 0 && foto_kamar [2] === 0) ?
            // proses simpan data (panggil fungsi saveData)
            saveData(document.querySelector("#txt_kode_kamar").value,document.querySelector("#txt_nama_kamar").value, document.querySelector("#txt_lantai").value,
                document.querySelector("#txt_deskripsi_kamar").value, document.querySelector("#txt_status").value,
                document.querySelector("#txt_harga").value, document.querySelector("#txt_foto_kamar").value)
                :
            ""
    }

        // buat fungsi save data (Metode async/await)
        const saveData = async (kode_kamar, nama_kamar, lantai, deskripsi_kamar, status, harga, foto_kamar) => {
            // Collecting data
            let data = {
                "kode_kamar": kode_kamar,
                "nama_kamar": nama_kamar,
                "lantai": lantai,
                "deskripsi_kamar": deskripsi_kamar,
                "status": status,
                "harga": harga,
                "foto_kamar": foto_kamar,
            }
            // proses kirim data
            try {
                // await fetch (url dan atribut)
                let response = await fetch("{{ url('/Admin/vw_kamar/tambah_kamar/insertKamar') }}", {
                    method: "POST",
                    headers: {
                        'Content-type': 'application/json',
                        'X-CSRF-Token': document.querySelector('meta[name="_token"]').content
                    },
                    body: JSON.stringify(data)
                })
                // baca hasil dari controller
                let result = await response.json()
                alert(result.pesan)
                document.querySelector("#btn_batal").click()
            } catch (error) {
                alert("Data gagal di kirim !")
            }
        }

</script>
<!-- End Function JS -->


@endsection
<!-- End Content -->
