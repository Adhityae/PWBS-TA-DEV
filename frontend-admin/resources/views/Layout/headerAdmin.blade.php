<!-- Header -->
<div class="header">
    <div class="header-left">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('/template/assets/img/Logo Kost.png') }}" width="100" height="120" alt="logo" />
            <span class="logoclass">E-KOS</span>
        </a>
        <a href="{{ route('dashboard') }}" class="logo logo-small">
            <img src="{{ asset('/template/assets/img/Logo Kost.png') }}" alt="Logo" width="30" height="30" />
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="{{ asset('/template/assets/img/profiles/avatar-10.jpg') }}" width="31"
                        alt="Soeng Souy" /></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{ asset('/template/assets/img/profiles/avatar-10.jpg') }}" alt="User Image"
                            class="avatar-img rounded-circle" />
                    </div>
                    <div class="user-text">
                        <h6>Admin</h6>
                        <p class="text-muted mb-0">Administrator</p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{ route('Admin/profil_admin') }}">Detail Profile</a>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </li>
    </ul>
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>
<!-- End Header -->
