@push('after-css')
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }

        /* Slideshow container */
        .slideshow-container {
            position: relative;
            /* background: #f1f1f1f1; */
        }

        /* Slides */
        .mySlides {
            display: none;
            /* padding: 80px;
                                                                                                                                                        text-align: center; */
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color: #888;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            position: absolute;
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
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
{{-- <img src="{{ asset('logo/tesukuran.png') }}" height="350vm" width="100%"> --}}
<div class="container-fluid " style="margin-left: 1cm">
    {{-- <div class="container"> --}}
    <div class="row g-4">
        <div class="row">
            <div class="col-8">
                <table>
                    <tr>
                        <td><span class="badge bg-success" style="margin-bottom: 0.2cm">Artikel</span></td>
                        <td>Unggulan</td>
                    </tr>
                </table>
            </div>
            <div class="col-3" style="margin-left: 0.3cm">
                <table>
                    <tr>
                        <td><span class="badge bg-success" style="margin-bottom: 0.2cm">Ulasan</span></td>
                        <td>Pengguna</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-3">
        <div class="row">
            <div class="col-8">
                <div class=" p-4 rounded" style="background-color: #f1f8f7">
                    <div class="row">
                        @foreach ($dataartikel as $data)
                            <div class="col-sm-6" style="margin-bottom: 1cm">
                                <b style="color: green">{{ Str::words($data->judul, 10, '...') }}</b><br>
                                <div class="card" style="width: 25rem;">
                                    <img class="card-img-top" src="{{ asset('imageArtikel/' . $data->image) }}"
                                        alt="Card image cap">
                                    <div class="d-flex flex-column p-1">
                                        <div class="d-flex justify-content-between">
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                                            <small class="text-body d-block"><i class="fas fa-eye me-1"></i>
                                                20K</small>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">
                                            {{ substr(strip_tags($data->deskripsi), 0, 110) . '...' }}
                                        </p>
                                    </div>
                                </div>
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
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>Mempermudah sekali, lebih di kembangkan lagi ya</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>Sangat Membantu dalam pencarian layanan yang tersedia</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>situs ini sayang membantu dalam mencari apa saja service yang ada di jogja</q>
                            {{-- <p class="author">- John Keats</p> --}}
                        </div>

                        <div class="mySlides">
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>yang seperti ini harusnya di bantu oleh pemerintah dalam pengembangannya</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>memberikan jalan untuk orang banyak</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>Informasi sangat lengkap dan mudah di pahami</q>
                        </div>
                        <div class="mySlides">
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>Terimakasih atas informasinya, saya baru soalnya di jogja</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                            <q>untuk orang baru sangat bermanfaat sekali</q>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
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
                        <div class="row g-4" style="margin-left: 0;margin-top: 0cm">
                            <div class="col-6">
                                <div class="overflow-hidden rounded">
                                    <img src="{{ asset('assets/img/news-3.jpg') }}" class="img-zoomin rounded w-100"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="features-content d-flex flex-column">
                                    {{ substr(strip_tags('tes judul yang panjang'), 0, 10) . '...' }}
                                    <small><i class="fa fa-clock"> 2 minutes ago</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4" style="margin-left: 0;margin-top: 0cm">
                            <div class="col-6">
                                <div class="overflow-hidden rounded">
                                    <img src="{{ asset('assets/img/news-3.jpg') }}" class="img-zoomin rounded w-100"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="features-content d-flex flex-column">
                                    {{ substr(strip_tags('tes judul yang panjang'), 0, 10) . '...' }}
                                    <small><i class="fa fa-clock"> 2 minutes ago</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4" style="margin-left: 0;margin-top: 0cm">
                            <div class="col-6">
                                <div class="overflow-hidden rounded">
                                    <img src="{{ asset('assets/img/news-3.jpg') }}" class="img-zoomin rounded w-100"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="features-content d-flex flex-column">
                                    {{ substr(strip_tags('tes judul yang panjang'), 0, 10) . '...' }}
                                    <small><i class="fa fa-clock"> 2 minutes ago</i> </small>
                                    <small><i class="fa fa-eye"> 3.5k Views</i></small>
                                </div>
                            </div>
                        </div>

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
