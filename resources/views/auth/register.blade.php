<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register | Jogja Smart Service</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets2/img/favicon/new/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ '' }}assets2/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ '' }}assets2/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ '' }}assets2/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ '' }}assets2/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ '' }}assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ '' }}assets2/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="{{ '' }}assets2/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                  <img src="{{ asset('logo/JSS2.png') }}"></img>
                  {{-- <span class="app-brand-text demo text-body fw-bolder">JSS</span> --}}
              </div>
              <!-- /Logo -->
              <form action="{{ route('register') }}" method="POST">
                @csrf
                {{-- <div class="row"> --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email" class="form-label">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                            @error('name')
    <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
@enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
                            @error('username')
    <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
@enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                            @error('email')
    <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
@enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                            @error('password')
    <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
@enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="password_confirmation" class="form-label">Confirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Konfirmasi Password">
                        </div>
                    </div>

                {{-- </div> --}}

                <button type="submit" class="btn btn-primary mt-4">REGISTER</button>
            </form>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('') }}assets2/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('') }}assets2/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('') }}assets2/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('') }}assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('') }}assets2/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('') }}assets2/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
