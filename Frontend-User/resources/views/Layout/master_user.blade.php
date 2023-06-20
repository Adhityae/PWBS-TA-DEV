<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    {{-- csrf token --}}
    <meta name="_token" content="{{ csrf_token() }}">

    <!-- Title -->
    @yield('title_tamplate')
    <!-- End Title -->

    <!-- cdn js fontawesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('/template/assets/fonts/icomoon/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/fonts/flaticon/font/flaticon.css') }}" />

    <link rel="stylesheet" href="{{ asset('/template/assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/css/style.css') }}"/>

    <!-- End Assets cdnjs,css and template -->
</head>

<!-- Body -->

<body>
    <div class="main-wrapper">
        <!-- Header -->
        @yield('headerUser')
        <!-- End Header -->

        <!-- Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Sidebar -->
        @yield('sidebarUser')
        <!-- End Sidebar -->

        <!-- footerUser -->
        @yield('footerUser')
        <!-- End footerUser -->

    </div>
    <!-- cdn js -->
    <script src="{{ asset('/template/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/template/assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('/template/assets/js/aos.js') }}"></script>
    <script src="{{ asset('/template/assets/js/navbar.js') }}"></script>
    <script src="{{ asset('/template/assets/js/counter.js') }}"></script>
    <script src="{{ asset('/template/assets/js/custom.js') }}"></script>
    <!-- End cdn js -->

    @stack('scripts')

</body>
