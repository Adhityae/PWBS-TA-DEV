<!-- master_admin -->
@extends('Layout.master_admin')
<!-- end master_admin -->

@section('title_tamplate')
<title>Sistem Admin E-KOS | Tambah Data Komplain</title>
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
                    <h3 class="page-title mt-5">Tambah Data Komplain</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_komplain" id="lbl_kode_komplain">Kode Komplain</label>
                                <input class="form-control" type="text" name="txt_kode_komplain" id="txt_kode_komplain" maxlength="8"
                                    placeholder="Masukkan Kode Komplain" />
                                <label id="err_kode_komplain" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode Komplain Harus Diisi
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
                                <label for="txt_perihal" id="lbl_perihal">Perihal</label>
                                <select class="form-control" id="txt_perihal" name="txt_perihal">
                                    <option>Pilih Perihal</option>
                                    <option id="txt_perihal" name="txt_perihal">Token Listrik Habis</option>
                                    <option id="txt_perihal" name="txt_perihal">Air Tidak Mengalir</option>
                                    <option id="txt_perihal" name="txt_perihal">Genteng Bocor</option>
                                    <option id="txt_perihal" name="txt_perihal">Keran Air Macet</option>
                                    <option id="txt_perihal" name="txt_perihal">Lainnya...</option>
                                </select>
                                <label id="err_perihal" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Perihal Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_isi" id="lbl_isi">Pesan</label>
                                <input class="form-control" type="text" name="txt_isi" id="txt_isi" maxlength="50"
                                    placeholder="Masukkan Pesan" />
                                <label id="err_isi" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Pesan Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_status" id="lbl_status">Status</label>
                                <select class="form-control" id="txt_status" name="txt_status">
                                    <option>Pilih Status</option>
                                    <option id="txt_status" name="txt_status">Belum</option>
                                    <option id="txt_status" name="txt_status">Proses</option>
                                    <option id="txt_status" name="txt_status">SUdah</option>
                                </select>
                                <label id="err_status" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Status
                                    Harus Diisi
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
    // Hilangkan pesan error kode_komplain
    document.querySelector("#err_kode_komplain").style.display = 'none'
    // Hilangkan pesan error kode_user
    document.querySelector("#err_kode_user").style.display = 'none'
    // Hilangkan pesan error kode_kamar
    document.querySelector("#err_kode_kamar").style.display = 'none'
    // Hilangkan pesan error perihal
    document.querySelector("#err_perihal").style.display = 'none'
    // Hilangkan pesan error isi
    document.querySelector("#err_isi").style.display = 'none'
    // Hilangkan pesan error status
    document.querySelector("#err_status").style.display = 'none'


    // Buat function untuk btn_batal
    document.getElementById("btn_batal").addEventListener('click',
        function () {
            location.href = '{{ url('Admin/vw_komplain/tambah_komplain') }}'
        })

    // Buat function untuk btn_kembali
    document.getElementById("btn_kembali").addEventListener('click',
        function () {
            location.href = '{{ url('/Admin/vw_komplain/tampil_komplain') }}'
        })

    // fungsi "btn_simpan"
    const save = () => {

            // Ternary Computer
             const kode_komplain = document.querySelector("#txt_kode_komplain").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error kode_komplain
                    document.querySelector("#err_kode_komplain").style.display = 'unset',
                    // Ubah class "txt_kode_komplain"
                    document.querySelector("#txt_kode_komplain").className = "form-control",
                    // set error = 0
                    err_kode_komplain = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_kode_komplain
                    document.querySelector("#err_kode_komplain").style.display = 'none',

                    document.querySelector("#txt_kode_komplain").className = "form-control",
                    // set error = 0
                    err_kode_komplain = 0
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

            const perihal = document.querySelector("#txt_perihal").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error perihal
                    document.querySelector("#err_perihal").style.display = 'unset',
                    // Ubah class "txt_perihal"
                    document.querySelector("#txt_perihal").className = "form-control",
                    // set error = 0
                    err_perihal = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_perihal
                    document.querySelector("#err_perihal").style.display = 'none',

                    document.querySelector("#txt_perihal").className = "form-control",
                    // set error = 0
                    err_perihal = 0
                ]

            const isi = document.querySelector("#txt_isi").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error isi
                    document.querySelector("#err_isi").style.display = 'unset',
                    // Ubah class "txt_isi"
                    document.querySelector("#txt_isi").className = "form-control",
                    // set error = 0
                    err_isi = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_isi
                    document.querySelector("#err_isi").style.display = 'none',

                    document.querySelector("#txt_isi").className = "form-control",
                    // set error = 0
                    err_isi = 0
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
        const check = (kode_komplain[2] === 0 && kode_user[2] === 0 && kode_kamar[2] === 0 && perihal[2] === 0 && isi[2] === 0 && status[2] === 0) ?
            // proses simpan data (panggil fungsi saveData)
            saveData(document.querySelector("#txt_kode_komplain").value,document.querySelector("#txt_kode_user").value, document.querySelector("#txt_kode_kamar").value,
                document.querySelector("#txt_perihal").value, document.querySelector("#txt_isi").value, document.querySelector("#txt_status").value)
                :
            ""
    }

        // buat fungsi save data (Metode async/await)
        const saveData = async (kode_komplain, kode_user, kode_kamar, perihal, isi, status) => {
            // Collecting data
            let data = {
                "kode_komplain": kode_komplain,
                "kode_user": kode_user,
                "kode_kamar": kode_kamar,
                "perihal": perihal,
                "isi": isi,
                "status": status,
            }
            // proses kirim data
            try {
                // await fetch (url dan atribut)
                let response = await fetch("{{ url('/Admin/vw_komplain/tambah_komplain/insertKomplain') }}", {
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
