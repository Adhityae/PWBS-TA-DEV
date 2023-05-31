<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="list-divider"></li>
                <!-- Data User -->
                <li class="submenu">
                    <a href="#"><i class="fas fa-user"></i> <span> Data User </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none">
                        <li><a href="{{ route('Admin/vw_user/tampil_user') }}">Tampil Data User</a></li>
                        <li><a href="{{ route('Admin/vw_user/tambah_user') }}">Tambah Data User</a></li>
                    </ul>
                </li>
                <!-- End Data User -->

                <!-- Data Kamar -->
                <li class="submenu">
                    <a href="#"><i class="fas fa-bed"></i> <span> Data Kamar </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none">
                        <li><a href="{{ route('Admin/vw_kamar/tampil_kamar') }}">Tampil Data Kamar</a></li>
                        <li><a href="{{ route('Admin/vw_kamar/tambah_kamar') }}">Tambah Data Kamar</a></li>
                    </ul>
                </li>
                <!-- End Data Kamar -->

                <!-- Data Komplain -->
                <li class="submenu">
                    <a href="#"><i class="fas fa-wrench"></i> <span> Data Komplain</span>
                        <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none">
                        <li><a href="{{ route('Admin/vw_komplain/tampil_komplain') }}">Tampil Data Komplain</a></li>
                        <li><a href="{{ route('Admin/vw_komplain/tambah_komplain') }}">Tambah Data Komplain</a></li>
                    </ul>
                </li>
                <!-- End Data Komplain -->

                <!-- Data Boking Kamar -->
                <li class="submenu">
                    <a href="#"><i class="fas fa-book"></i>
                        <span> Data Booking Kamar </span>
                        <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none">
                        <li><a href="{{ route('Admin/vw_pesan/tampil_pesan') }}">Tampil Data Booking</a></li>
                        <li><a href="{{ route('Admin/vw_pesan/tambah_pesan') }}">Tambah Data Booking</a></li>
                    </ul>
                </li>
                <!-- End Data Boking Kamar -->

                <!-- Data Riwayat Booking -->
                <li class="submenu">
                    <a href="#"><i class="fas fa-suitcase"></i>
                        <span> Data Riwayat Booking</span>
                        <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none">
                        <li><a href="{{ route('Admin/vw_sewa/tampil_sewa') }}">Tampil Riwayat Booking</a></li>
                        <li><a href="{{ route('Admin/vw_sewa/tambah_sewa') }}">Tambah Riwayat Booking</a></li>
                    </ul>
                </li>
                <!-- End Data Riwayat Booking -->

                <li class="list-divider"></li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
