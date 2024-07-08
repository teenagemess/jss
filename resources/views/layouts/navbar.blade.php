<!-- Navbar start -->
<div class="container-fluid sticky-top px-0" style="background-color: #089E52">
    <div class="container-fluid ">
        <div class="container px-0">
            <nav class="navbar navbar-light navbar-expand-xl">
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav border-top">
                        <a href="{{ route('home') }}" class="nav-item nav-link " style="color: whitesmoke">Home</a>
                        <a href="{{ route('frontend.frontend-artikel.index') }}" class="nav-item nav-link"
                            style="color: whitesmoke">Artikel</a>
                        <a href="{{ route('frontend.frontend-layanan.index') }}" class="nav-item nav-link"
                            style="color: whitesmoke">Profile Pelayanan</a>
                    </div>
                    {{-- <img src="img/weather-icon.png" class="img-fluid w-100 me-2" alt=""> --}}
                    <div style="float: center;padding-left: 5cm">
                        <img src="{{ asset('') }}logo/JSS2.png" alt="" width="60%">
                    </div>
                </div>
                <a href="{{ route('frontend.frontend-kontak.index') }}" class="nav-item nav-link "
                    style="color: whitesmoke">kontak</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                        style="color: whitesmoke">Id</a>
                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                        <a href="#" class="dropdown-item" style="color: whitesmoke">English</a>
                    </div>
                </div>
                <a href="{{ route('dashboard') }}"><span class="badge bg-warning">admin</span></a>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
