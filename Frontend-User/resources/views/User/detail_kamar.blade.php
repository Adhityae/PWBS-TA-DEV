<!-- master_user -->
@extends('Layout.master_user')
<!-- end master_user -->

@section('title_tamplate')
<title>E-KOS | Detail Kamar Kost</title>
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
            <h1 class="heading" data-aos="fade-up">Detail Kamar Kost</h1>

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
                  Detail Kamar Kost
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
   <!-- Content -->
   <div class="section">
     @foreach ($result->DetailKamar as $output)
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                <img src="{{ asset('/template/assets/images/kamar1.jpg') }}" alt="Image" class="img-fluid" />
                <img src="{{ asset('/template/assets/images/kamar2.jpg') }}" alt="Image" class="img-fluid" />
                <img src="{{ asset('/template/assets/images/kamar3.jpg') }}" alt="Image" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary">{{ $output->nama_kamar }}</h2>
            <p class="meta">Harga : Rp. {{ $output->harga }} / Perbulan.</p>
            <p class="text-black-50">Deskripsi Kamar :
            </p>
            <p class="text-black-50">
              {{ $output->deskripsi_kamar }}
            </p>

            <div class="d-block agent-box p-5">
              <div class="text">
                <h3 class="mb-0">Nama Kamar : {{ $output->nama_kamar }}</h3>
                <h3 class="mb-0">Status : {{ $output->status }}</h3>
                <h3 class="mb-0">Lantai : {{ $output->lantai }}</h3>
                <h3 class="mb-0">Deskripsi Kamar : {{ $output->deskripsi_kamar }}</h3>
                <div class="meta mb-3">
                </div>
                <button id="btn_hubungi" class="btn btn-primary float-right veiwbutton ml-2 mb-2" onclick="gotoHubungi()">
                            <span class="icon-whatsapp"></span> Hubungi Admin</button>
                <button id="btn_tambah" class="btn btn-primary float-right veiwbutton ml-2" onclick="gotoAdd()">
                            <span> Booking Kamar</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
       @endforeach
    </div>
    <!-- end content -->

    <script>
        // Buat fungsi untuk link tombol tambah user
    function gotoAdd() {
        location.href = '{{ url('/User/tambah_datauser') }}';
    }
    </script>

<!-- footer -->
@section('footerUser')
@include('Layout.footerUser')
@endsection
<!-- end footer -->

@endsection
<!-- end content -->
