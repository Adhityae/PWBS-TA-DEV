<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    {{-- csrf token --}}
    <meta name="_token" content="{{ csrf_token() }}">

    <!-- Title -->
    @yield('title_tamplate')
    <!-- End Title -->


    <!-- Assets cdnjs,css and template -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/template/assets/img/Logo Kost.png') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/plugins/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/plugins/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/css/feathericon.min.css') }}" />
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css" />
    <link rel="stylesheet" href="{{ asset('/template/assets/plugins/morris/morris.css') }}" />
    <link rel="stylesheet" href="{{ asset('/template/assets/css/style.css') }}" />
    <!-- End Assets cdnjs,css and template -->
</head>

<!-- Body -->
<body>
    <div class="main-wrapper">
        <!-- Header -->
        @yield('topbarAdmin')
        <!-- End Header -->

        <!-- Sidebar -->
        @yield('sidebarAdmin')
        <!-- End Sidebar -->

        <!-- Content -->
        @yield('content')
        <!-- End Content -->
    </div>

        <!-- cdn js -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ asset('/template/assets/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('/template/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('/template/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/template/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('/template/assets/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('/template/assets/plugins/morris/morris.min.js') }}"></script>
        <script src="{{ asset('/template/assets/js/chart.morris.js') }}"></script>
        <script src="{{ asset('/template/assets/js/script.js') }}"></script>
        <!-- End cdn js -->

</body>
