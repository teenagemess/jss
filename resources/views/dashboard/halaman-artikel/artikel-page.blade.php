@push('after-css')
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }


        /* The dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 20px;
            /* background: #ddd; */
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Add a background color to the active dot/circle */
        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Add an italic font style to all quotes */
        q {
            font-style: italic;
        }

        /* Add a blue color to the author */
        .author {
            color: cornflowerblue;
        }
    </style>
@endpush
<div class="container">
    <img src="{{ asset('assets2/img/carosel.png') }}" height="350vm" width="100%">
</div>
<hr style="background-color: #0acf2b">
<div class="container-fluid py-5 mt-3">
    <div class="row" style="margin-left: 2cm">
        <div class="col-8">
            <table>
                <tr>
                    <td><button type="button" class="btn btn-success text-white">
                            Artikel
                        </button></td>
                    <td><b style="color: black;padding-left: 0.2cm">Unggulan</b></td>
                </tr>
            </table>
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td><button type="button" class="btn btn-success text-white">
                            Ulasan
                        </button></td>
                    <td><b style="color: black;padding-left: 0.2cm">Pengguna</b></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row g-4 mt-3" style="margin-left: 2cm">
        <div class="row">
            <div class="col-8">
                <div class=" p-4 rounded" style="background-color: #f1f8f7">
                    <div class="row">
                        @foreach ($dataartikel as $data)
                            <div class="col-sm-6">
                                <a href="{{ route('frontend.frontend-artikel.show', $data->id) }}">
                                    <b style="color: green">{{ Str::words($data->judul, 10, '...') }}</b><br>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="{{ asset('imageArtikel/' . $data->image) }}"
                                            alt="Card image cap">
                                        <div class="d-flex flex-column p-1">
                                            <div class="d-flex justify-content-between">
                                                <small class="text-body d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i>
                                                    {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                                                <small class="text-body d-block"><i class="fas fa-eye me-1"></i>
                                                    {{ $data->jmlh_view ? $data->jmlh_view : '0' }}</small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text" style="text-align: justify">
                                                {{ substr(strip_tags($data->deskripsi), 0, 110) . '...' }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class=" p-4 rounded" style="background-color: #f1f8f7">
                    <div class="slideshow-container">

                        <div class="mySlides">
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>Mempermudah sekali, lebih di kembangkan lagi ya</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>Sangat Membantu dalam pencarian layanan yang tersedia</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>situs ini sayang membantu dalam mencari apa saja service yang ada di jogja</q>
                            {{-- <p class="author">- John Keats</p> --}}
                        </div>

                        <div class="mySlides">
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>yang seperti ini harusnya di bantu oleh pemerintah dalam pengembangannya</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>memberikan jalan untuk orang banyak</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>Informasi sangat lengkap dan mudah di pahami</q>
                        </div>
                        <div class="mySlides">
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>Terimakasih atas informasinya, saya baru soalnya di jogja</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>untuk orang baru sangat bermanfaat sekali</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <q>membantu orang yang tidak tau tentang service yang tersedia di</q>
                        </div>
                    </div>
                    <div class="dot-container">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                <div class=" p-4 rounded" style="background-color: #c9e6e1;margin-top: 0.5cm">
                    {{-- <div class="row g-4"> --}}
                    <div class="col-12">
                        <h2>Recent Posts</h2><br>
                        @foreach ($recentpost as $datarecentpost)
                            <a href="{{ route('frontend.frontend-artikel.show', $datarecentpost->id) }}">
                                <div class="row g-4" style="margin-left: 0;margin-top: 0cm">
                                    <div class="col-6">
                                        <div class="overflow-hidden rounded">
                                            <img src="{{ asset('imageArtikel/' . $datarecentpost->image) }}"
                                                class="img-zoomin rounded w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="features-content d-flex flex-column">
                                            {{ substr(strip_tags($datarecentpost->judul), 0, 10) . '...' }}
                                            <small><i class="fa fa-clock">
                                                    {{ $datarecentpost->created_at->diffForHumans() }}</i> </small>
                                            <small><i class="fa fa-eye">
                                                    {{ $data->jmlh_view ? $data->jmlh_view : '0' }} Views</i></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('after-js')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
@endpush
