<!-- master_user -->
@extends('Layout.master_user')
<!-- end master_user -->

@section('title_tamplate')
<title>E-KOS | Cek Tagihan Bulanan</title>
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
            <h1 class="heading" data-aos="fade-up">Cek Tagihan Bulanan</h1>

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
                  Cek Tagihan Bulanan
                </li>
              </ol>
            </nav>
            <form
              action="#"
              class="narrow-w form-search d-flex align-items-stretch mt-5"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Masukkan Kode Booking"
              />
              <button type="submit" class="btn btn-primary">Cari</button>
            </form>
          </div>
        </div>
      </div>
    </div>
   <!-- Content -->
   <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <!-- <h2 class="font-weight-bold text-primary-center heading text-center">Cek Tagihan Bulanan</h2> -->
          </div>
          <div class="col-lg-6 text-lg-end">
          </div>
        </div>
      </div>
    </div>

    <!-- end content -->

<!-- footer -->
@section('footerUser')
@include('Layout.footerUser')
@endsection
<!-- end footer -->

@endsection
<!-- end content -->
