<!-- master_user -->
@extends('Layout.master_user')
<!-- end master_user -->

@section('title_tamplate')
<title>E-KOS | Tambah Data Booking</title>
@endsection

<!-- content -->
@section('content')

    <!-- header -->
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.html" class="logo m-0 float-start">E-KOS</a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li><a href="{{ route('dashboard_user') }}">Home</a></li>
              <li>
                <a href="{{ route('User/cek_tagihan') }}">Cek Tagihan Bulanan</a>
              </li>
              <li><a href="{{ route('User/hubungi_kami') }}">Hubungi Kami</a></li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end header -->

    <div
      class="hero page-inner overlay"
      style="background-image: url('images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Lengkapi Data Booking</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('dashboard_user') }}">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Lengkapi Data Booking
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
   <!-- Content -->
   <!-- Content -->
@section('content')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5 text-center">Tambah Data Booking</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_kode_pesan" id="lbl_kode_pesan">Kode Pesan</label>
                                <input class="form-control" type="text" name="txt_kode_pesan" id="txt_kode_pesan" maxlength="8" value="" placeholder="Masukkan Kode Pesan" />
                                <label id="err_kode_pesan" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode Pesan Harus Diisi
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
                                <label for="txt_kode_user" id="lbl_kode_user">Kode User</label>
                                <select class="form-control" id="txt_kode_user" name="txt_kode_user">
                                    <option>Pilih Kode User</option>
                                     @foreach ($result2->DataUser as $output)
                                    <option value="{{ $output->kode_user }}">
                                       | {{ $output->kode_user }} | {{ $output->nama }} |</option>
                                    @endforeach
                                </select>
                                <label id="err_kode_user" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Kode User Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_tanggal_masuk" id="lbl_tanggal_masuk">Tanggal Masuk</label>
                                <input class="form-control" type="date" name="txt_tanggal_masuk" id="txt_tanggal_masuk" maxlength="8" value="" placeholder="Masukkan Tanggal Masuk" />
                                <label id="err_tanggal_masuk" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Tanggal Masuk Harus Diisi
                                    !</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="txt_lama_tinggal" id="lbl_lama_tinggal">Lama Tinggal</label>
                                <select class="form-control" id="txt_lama_tinggal" name="txt_lama_tinggal">
                                    <option>Pilih Lama Tinggal</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">1 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">2 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">3 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">4 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">5 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">6 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">7 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">8 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">9 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">10 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">11 Bulan</option>
                                    <option name="txt_lama_tinggal" id="txt_lama_tinggal">12 Bulan</option>
                                </select>
                                <label id="err_lama_tinggal" class="text-danger">
                                    <i class="fa fa-exclamation-circle mr-2.5" aria-hidden="true"></i>Lama Tinggal Harus Diisi
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
        <button id="btn_selesai" class="btn btn-primary buttonedit">
            Selesai
        </button>
    </div>
</div>

<!-- Custom function JS -->

<script>
    // Hilangkan pesan error kode_pesan
    document.querySelector("#err_kode_pesan").style.display = 'none'
    // Hilangkan pesan error kode_kamar
    document.querySelector("#err_kode_kamar").style.display = 'none'
    // Hilangkan pesan error kode_user
    document.querySelector("#err_kode_user").style.display = 'none'
    // Hilangkan pesan error tanggal_masuk
    document.querySelector("#err_tanggal_masuk").style.display = 'none'
    // Hilangkan pesan error lama_tinggal
    document.querySelector("#err_lama_tinggal").style.display = 'none'


    // Buat function untuk btn_batal
    document.getElementById("btn_batal").addEventListener('click',
        function () {
            location.href = '{{ url('User/tambah_datapesan') }}'
        })

    // Buat function untuk btn_kembali
    document.getElementById("btn_kembali").addEventListener('click',
        function () {
            location.href = '{{ url('/User/tambah_datauser') }}'
        })

    // Buat function untuk btn_selesai
    document.getElementById("btn_selesai").addEventListener('click',
        function () {
            location.href = '{{ route('dashboard_user') }}'
        })

    // fungsi "btn_simpan"
    const save = () => {

            // Ternary Computer
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

            const tanggal_masuk = document.querySelector("#txt_tanggal_masuk").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error tanggal_masuk
                    document.querySelector("#err_tanggal_masuk").style.display = 'unset',
                    // Ubah class "txt_tanggal_masuk"
                    document.querySelector("#txt_tanggal_masuk").className = "form-control",
                    // set error = 0
                    err_tanggal_masuk = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_tanggal_masuk
                    document.querySelector("#err_tanggal_masuk").style.display = 'none',

                    document.querySelector("#txt_tanggal_masuk").className = "form-control",
                    // set error = 0
                    err_tanggal_masuk = 0
                ]

            const lama_tinggal = document.querySelector("#txt_lama_tinggal").value === "" ?
                // hasil jika kondisi benar
                [
                    // tampilkan error lama_tinggal
                    document.querySelector("#err_lama_tinggal").style.display = 'unset',
                    // Ubah class "txt_lama_tinggal"
                    document.querySelector("#txt_lama_tinggal").className = "form-control",
                    // set error = 0
                    err_lama_tinggal = 1
                ] :
                // Hasil Jika salah
                [
                    // Sembunyikan err_lama_tinggal
                    document.querySelector("#err_lama_tinggal").style.display = 'none',

                    document.querySelector("#txt_lama_tinggal").className = "form-control",
                    // set error = 0
                    err_lama_tinggal = 0
                ]


        // jika seluruh komponen sudah diisi
        const check = (kode_pesan[2] === 0 && kode_kamar[2] === 0 && kode_user[2] === 0 && tanggal_masuk[2] === 0 && lama_tinggal[2] === 0) ?
            // proses simpan data (panggil fungsi saveData)
            saveData(document.querySelector("#txt_kode_pesan").value,document.querySelector("#txt_kode_kamar").value, document.querySelector("#txt_kode_user").value,
                document.querySelector("#txt_tanggal_masuk").value, document.querySelector("#txt_lama_tinggal").value)
                :
            ""
    }

        // buat fungsi save data (Metode async/await)
        const saveData = async (kode_pesan, kode_kamar, kode_user, tanggal_masuk, lama_tinggal) => {
            // Collecting data
            let data = {
                "kode_pesan": kode_pesan,
                "kode_kamar": kode_kamar,
                "kode_user": kode_user,
                "tanggal_masuk": tanggal_masuk,
                "lama_tinggal": lama_tinggal,
            }
            // proses kirim data
            try {
                // await fetch (url dan atribut)
                let response = await fetch("{{ url('/User/tambah_datapesan/insertPesan') }}", {
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

   <!-- End Content -->

<!-- footer -->
@section('footerUser')
@include('Layout.footerUser')
@endsection
<!-- end footer -->

@endsection
<!-- end content -->

