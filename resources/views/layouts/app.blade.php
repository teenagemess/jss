<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>
    <!-- Navbar start -->
    @include('layouts.navbar')
    <!-- Navbar End -->

    @yield('content')



    <!-- Banner End -->
    <!-- Footer Start -->
    <div class="container-fluid  footer " style="background-color: rgb(13, 121, 40)">
        <div class="container py-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('') }}logo/JSS2.png" alt="" width="60%">
                    <p class="text-white mt-4">
                        Did you come here for something in particular or just general Riker</p>
                    <p class="text-white mt-4">
                        Alamat<br>
                        Jl. Kenari No.56, Muja Muju, Kec. Umbulharjo,
                        Kota Yogyakarta, Daerah Istimewa Yogyakarta 55165
                    </p>
                </div>
                <div class="col-md-4 mt-4">
                    <b style="color: #FFFFFF;margin-left: 0.5cm;">Unduh Aplikasi JSS</b>
                    <img src="{{ asset('') }}assets/playstore.png" alt="" width="60%">

                </div>
                <div class="col-md-4">
                    <b class="text-white">Langganan Artikel Terbaru</b>
                    <p>
                    <div class="input-group">
                        <input type="search" class="form-control p-3" placeholder="Masukkan Email"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text bg-dark p-3 text-white">Langganan</span>
                    </div>
                    </p>
                    <p class="text-white" style="margin-top:1.5cm">
                        Follow On:
                    </p>
                    <p>
                        {{-- <i class="fas fa-angle-right text-white me-2"></i> --}}
                        <img src="{{ asset('') }}assets/tw.png" alt="">
                        <img src="{{ asset('') }}assets/fb.png" alt="" style="margin-left: 0.2cm">
                        <img src="{{ asset('') }}assets/pn.png" alt=""style="margin-left: 0.2cm">
                        <img src="{{ asset('') }}assets/ig.png" alt=""style="margin-left: 0.2cm">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright  py-4" style="background-color: rgb(13, 121, 40)">
        <div class="container">
            <div class=" text-center text-md-end text-white">
                <center>
                    Designed & Developer For Aplikai Blog JSS
                </center>
            </div>
            {{-- </div> --}}
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-2 border-white rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('after-js')
</body>

</html>
