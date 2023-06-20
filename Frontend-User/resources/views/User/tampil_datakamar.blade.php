<!-- master_user -->
@extends('Layout.master_user')
<!-- end master_user -->

@section('title_tamplate')
<title>E-KOS | Tampil Data Kamar Kost</title>
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

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li><a href="{{ route('dashboard_user') }}">Home</a></li>
                    <li>
                        <a href="{{ route('User/cek_tagihan') }}">Cek Tagihan Bulanan</a>
                    </li>
                    <li><a href="{{ route('User/hubungi_kami') }}">Hubungi Kami</a></li>
                </ul>

                <a href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- end header -->

<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Data Kamar Kost</h1>

                <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard_user') }}">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Data Kamar Kost
                        </li>
                    </ol>
                </nav>
                <form action="#" class="narrow-w form-search d-flex align-items-stretch mt-5" data-aos="fade-up"
                    data-aos-delay="200">
                    <input type="text" class="form-control px-4" placeholder="Cari Kamar Kost" />
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
            <div class="row">
            <div class="col-12">
                <div class="property-slider-wrap">
                    <div class="property-slider">
                        @foreach ($result->DataKamar as $output)
                        <div class="property-item">
                            <a href="property-single.html" class="img">
                                <img src="{{ asset('/template/assets/images/img_1.jpg') }}" alt="Image"
                                    class="img-fluid" />
                            </a>

                            <div class="property-content">
                                <div class="price mb-2"><span>{{ $output->nama_kamar }}</span></div>
                                <div>
                                    <span class="d-block mb-2 text-black-50">Rp. {{ $output->harga }}</span>
                                    <span class="city d-block mb-3">{{$output->deskripsi_kamar }}</span>

                                    <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                            <span class="icon-bed me-2"></span>
                                            <span class="caption">{{ $output->status }}</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                            <span class="icon-building me-2"></span>
                                            <span class="caption">{{ $output->lantai }}</span>
                                        </span>
                                    </div>

                                    <button id="btn_detail" class="btn btn-primary float-right veiwbutton ml-2" onclick="gotoDetail('{{ $output->kode_kamar }}')">
                            <i class="fas fa-plus"></i><span> Lihat Detail </span></button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- .item -->
                    </div>

                    <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                        <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                        <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end content -->

<script>
    // Buat fungsi untuk link tombol tambah Kamar
    function gotoDetail(kode) {
        location.href = '{{ url('/User/detail_kamar/detailKamar') }}/' + kode;
    }
</script>

<!-- footer -->
@section('footerUser')
@include('Layout.footerUser')
@endsection
<!-- end footer -->

@endsection
<!-- end content -->
