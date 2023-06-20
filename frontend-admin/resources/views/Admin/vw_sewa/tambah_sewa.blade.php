<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tambah Riwayat Booking</title>
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
                                <label for="txt_kode_sewa" id="lbl_kode_sewa">Kode Sewa</label>
                                <input class="form-control" type="text" name="txt_kode_sewa" id="txt_kode_sewa" maxlength="8" placeholder="Masukkan Kode Sewa" />
                                <label id="err_kode_sewa" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode Sewa Harus Diisi
                                    !</label>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_pesan" id="lbl_kode_pesan">Kode Pesan</label>
                                <select class="form-control" id="txt_kode_pesan" name="txt_kode_pesan">
                                    <option>Pilih Kode Pesan</option>
                                     @foreach ($result3->DataPesan as $output)
                                    <option value="{{ $output->kode_pesan }}">
                                       | {{ $output->kode_pesan }} | {{ $output->tanggal_masuk }} | {{ $output->lama_tinggal }} | {{ $output->kode_kamar }} |</option>
                                    @endforeach
                                </select>
                                <label id="err_kode_pesan" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode Pesan Harus Diisi
                                    !</label>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_user" id="lbl_kode_user">Kode User</label>
                                <select class="form-control" id="txt_kode_user" name="txt_kode_user">
                                    <option>Pilih Kode User</option>
                                     @foreach ($result2->DataUser as $output)
                                    <option value="{{ $output->kode_user }}">
                                       | {{ $output->kode_user }} | {{ $output->nama }} | </option>
                                    @endforeach
                                </select>
                                <label id="err_kode_user" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode User Harus Diisi
                                    !</label>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_kamar" id="lbl_kode_kamar">Kode Kamar</label>
                                <select class="form-control" id="txt_kode_kamar" name="txt_kode_kamar">
                                    <option>Pilih Kode Kamar</option>
                                     @foreach ($result1->DataKamar as $output)
                                    <option value="{{ $output->kode_kamar }}">
                                       | {{ $output->kode_kamar }} | {{ $output->nama_kamar }} | </option>
                                    @endforeach
                                </select>
                                <label id="err_kode_kamar" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>kode_kamar Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_tanggal_keluar" id="lbl_tanggal_keluar">Tanggal Keluar</label>
                                <input class="form-control" type="date" name="txt_tanggal_keluar" id="txt_tanggal_keluar" placeholder="Masukkan Tanggal Keluar" />
                                <label id="err_tanggal_keluar" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode Kamar Harus Diisi
                                    !</label>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_pembayaran" id="lbl_pembayaran">Pembayaran</label>
                                <input class="form-control" type="text" name="txt_pembayaran" id="txt_pembayaran" maxlength="20" placeholder="Masukkan Pembayaran" />
                                <label id="err_pembayaran" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Pembayaran Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_status" id="lbl_status">Status</label>
                                <select class="form-control" id="txt_status" name="txt_status">
                                    <option>Pilih Status</option>
                                    <optionid="txt_status" name="txt_status">Belum Bayar</optionid=>
                                    <option id="txt_status" name="txt_status">DP</option>
                                    <option id="txt_status" name="txt_status">DiCicil</option>
                                    <option id="txt_status" name="txt_status">Sudah Bayar</option>
                                </select>
                                <label id="err_status" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Status Harus Diisi
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
    // Hilangkan pesan error kode_sewa
    document.querySelector("#err_kode_sewa").style.display = 'none'
    // Hilangkan pesan error kode_pesan
    document.querySelector("#err_kode_pesan").style.display = 'none'
    // Hilangkan pesan error kode_user
    document.querySelector("#err_kode_user").style.display = 'none'
    // Hilangkan pesan error kode_kamar
    document.querySelector("#err_kode_kamar").style.display = 'none'
    // Hilangkan pesan error tanggal_keluar
    document.querySelector("#err_tanggal_keluar").style.display = 'none'
    // Hilangkan pesan error pembayaran
    document.querySelector("#err_pembayaran").style.display = 'none'
    // Hilangkan pesan error status
    document.querySelector("#err_status").style.display = 'none'


    // Buat function untuk btn_batal
    document.getElementById("btn_batal").addEventListener('click',
        function () {
            location.href = '{{ url('Admin/vw_sewa/tambah_sewa') }}'
        })

    // Buat function untuk btn_kembali
    document.getElementById("btn_kembali").addEventListener('click',
        function () {
            location.href = '{{ url('/Admin/vw_sewa/tampil_sewa') }}'
        })

    // fungsi "btn_simpan"
    const save = () => {

            // Ternary Computer
             const kode_sewa = document.querySelector("#txt_kode_sewa").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error kode_sewa
                    document.querySelector("#err_kode_sewa").style.display = 'unset',
                    // Ubah class "txt_kode_sewa"
                    document.querySelector("#txt_kode_sewa").className = "form-control",
                    // set error = 0
                    err_kode_sewa = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_kode_sewa
                    document.querySelector("#err_kode_sewa").style.display = 'none',

                    document.querySelector("#txt_kode_sewa").className = "form-control",
                    // set error = 0
                    err_kode_sewa = 0
                ]

            const kode_pesan = document.querySelector("#txt_kode_pesan").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error kode_pesan
                    document.querySelector("#err_kode_pesan").style.display = 'unset',
                    // Ubah class "txt_kode_pesan"
                    document.querySelector("#txt_kode_pesan").className = "form-control",
                    // set error = 0
                    err_kode_pesan = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_kode_pesan
                    document.querySelector("#err_kode_pesan").style.display = 'none',

                    document.querySelector("#txt_kode_pesan").className = "form-control",
                    // set error = 0
                    err_kode_pesan = 0
                ]

            const kode_user = document.querySelector("#txt_kode_user").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error kode_user
                    document.querySelector("#err_kode_user").style.display = 'unset',
                    // Ubah class "txt_kode_user"
                    document.querySelector("#txt_kode_user").className = "form-control",
                    // set error = 0
                    err_kode_user = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_kode_user
                    document.querySelector("#err_kode_user").style.display = 'none',

                    document.querySelector("#txt_kode_user").className = "form-control",
                    // set error = 0
                    err_kode_user = 0
                ]

            const kode_kamar = document.querySelector("#txt_kode_kamar").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error kode_kamar
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

            const tanggal_keluar = document.querySelector("#txt_tanggal_keluar").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error tanggal_keluar
                    document.querySelector("#err_tanggal_keluar").style.display = 'unset',
                    // Ubah class "txt_tanggal_keluar"
                    document.querySelector("#txt_tanggal_keluar").className = "form-control",
                    // set error = 0
                    err_tanggal_keluar = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_tanggal_keluar
                    document.querySelector("#err_tanggal_keluar").style.display = 'none',

                    document.querySelector("#txt_tanggal_keluar").className = "form-control",
                    // set error = 0
                    err_tanggal_keluar = 0
                ]

            const pembayaran = document.querySelector("#txt_pembayaran").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error pembayaran
                    document.querySelector("#err_pembayaran").style.display = 'unset',
                    // Ubah class "txt_pembayaran"
                    document.querySelector("#txt_pembayaran").className = "form-control",
                    // set error = 0
                    err_pembayaran = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_pembayaran
                    document.querySelector("#err_pembayaran").style.display = 'none',

                    document.querySelector("#txt_pembayaran").className = "form-control",
                    // set error = 0
                    err_pembayaran = 0
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


        // jika seluruh komponen sudah diisi
        const check = (kode_sewa[2] === 0 && kode_pesan[2] === 0 && kode_user[2] === 0 && kode_kamar[2] === 0 && tanggal_keluar[2] === 0 && pembayaran[2] === 0 && status[2] === 0) ?
            // proses simpan data (panggil fungsi saveData)
            saveData(document.querySelector("#txt_kode_sewa").value,document.querySelector("#txt_kode_pesan").value, document.querySelector("#txt_kode_user").value,
                document.querySelector("#txt_kode_kamar").value, document.querySelector("#txt_tanggal_keluar").value,
                document.querySelector("#txt_pembayaran").value, document.querySelector("#txt_status").value)
                :
            ""
    }

        // buat fungsi save data (Metode async/await)
        const saveData = async (kode_sewa, kode_pesan, kode_user, kode_kamar, tanggal_keluar, pembayaran, status) => {
            // Collecting data
            let data = {
                "kode_sewa": kode_sewa,
                "kode_pesan": kode_pesan,
                "kode_user": kode_user,
                "kode_kamar": kode_kamar,
                "tanggal_keluar": tanggal_keluar,
                "pembayaran": pembayaran,
                "status": status,
            }
            // proses kirim data
            try {
                // await fetch (url dan atribut)
                let response = await fetch("{{ url('/Admin/vw_sewa/tambah_sewa/insertSewa') }}", {
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
