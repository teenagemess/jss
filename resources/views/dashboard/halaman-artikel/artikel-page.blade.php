@push('after-css')
    <style>
        /* Webkit (Chrome, Safari, Opera) */
        ::-webkit-scrollbar {
            width: 6px;
            height: 1px;
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(8, 158, 82, 0.7);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #089e52;
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-track:hover {
            background-color: rgba(241, 241, 241, 0.5);
        }

        .konten-kiri {
            max-height: 450px;
            overflow-y: auto;
        }

        .konten-kiri::-webkit-scrollbar {
            width: 3px;
            height: 1px;
            background-color: transparent;
        }

        .konten-kiri::-webkit-scrollbar-thumb {
            background-color: #089E52;
            border-radius: 3px;
        }

        .konten-kiri::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .konten-kiri::-webkit-scrollbar-track {
            background-color: #C4C4C4;
            border-radius: 10px;
        }

        .container-flex {
            padding-top: 60px;
            display: flex;
        }

        body {
            background-color: #F2F8F7;
        }

        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
            border-radius: 8px;
        }

        .card {
            transition: 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .dot-container {
            text-align: center;
            padding: 20px;
        }

        .dot {
            cursor: pointer;
            height: 7px;
            width: 15px;
            margin: 0 2px;
            background-color: rgba(169, 169, 169, 0.5);
            border-radius: 40px;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .dot:hover {
            transform: scale(1.2);
        }

        .dot.active {
            width: 35px;
            height: 8px;
            background-color: #089e52;
        }

        .mySlides {
            display: none;
            animation: fadeEffect 1.5s;
        }

        @keyframes fadeEffect {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .mySlides p {
            padding-bottom: 15px;
            color: #000;
        }

        small {
            padding-bottom: 5px;
        }

        .author {
            color: cornflowerblue;
        }

        .card {
            background-color: transparent;
            border: none;
        }

        h2 {
            font-size: 25px;
        }

        .sub-badge {
            background-color: #089E52;
            border-radius: 5px;
        }
    </style>
@endpush
<div class="container-flex" style="background-color: #F2F8F7">
    <div class="container"
        style="display: flex; width: max-content; text-align: center; align-items: center; padding-bottom: 0px; ">
        <div class="judul" style="width: 400px; text-align:start;">
            <h1 style="font-size: 61px;  color: #089E52;">Jogja Smart Service</h1>
        </div>
        <div class="garis" style="height: 120px; width: 1px; background-color: black;"></div>

        <div class="subjudul" style="width: 500px; margin-left: 50px;">
            <p style="text-align:start;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum non quos
                quibusdam libero sequi maiores quidem excepturi molestias recusandae accusantium!</p>
        </div>
    </div>
</div>

<div class="konten container-fluid py-5 mt-0" style="background-color: #F2F8F7">
    <div class="row" style="margin-left: 2.5cm">
        <div class="col-8">
            <table>
                <tr>
                    <td><button type="button" class="sub-badge btn text-white">
                            Artikel
                        </button></td>
                    <td><b style="color: black;padding-left: 0.2cm">Unggulan</b></td>
                </tr>
            </table>
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td><button type="button" class="sub-badge btn text-white">
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
                <div class="konten-kiri p-4 rounded" style="background-color: #f1f8f7">
                    <div class="row">
                        @foreach ($dataartikel as $data)
                            <div class="col-sm-6">
                                <a href="{{ route('frontend.frontend-artikel.show', $data->id) }}">
                                    <h2>{{ Str::words($data->judul, 10, '...') }}</h2><br>
                                    <div class="card" style="width: 28rem;">
                                        <img class="card-img-top" src="{{ asset('imageArtikel/' . $data->image) }}"
                                            alt="Card image cap">
                                        <div class="d-flex flex-column p-1">
                                            <div class="d-flex justify-content-between" style="padding-top: 10px">
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                                    {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                                                <small class="text-body d-block"><i class="fas fa-eye me-1"></i>
                                                    {{ $data->jmlh_view ? $data->jmlh_view : '0' }}</small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text" style="text-align: justify; color: black;">
                                                {{ substr(strip_tags($data->deskripsi), 0, 110) . '...' }}
                                            </p>
                                        </div>
                                    </div><br>
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
                            <p>Mempermudah sekali, lebih di kembangkan lagi ya</p>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>Sangat Membantu dalam pencarian layanan yang tersedia</p>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>situs ini sayang membantu dalam mencari apa saja service yang ada di jogja</p>
                        </div>

                        <div class="mySlides">
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>yang seperti ini harusnya di bantu oleh pemerintah dalam pengembangannya</p>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>memberikan jalan untuk orang banyak</p>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>Informasi sangat lengkap dan mudah di pahami</p>
                        </div>
                        <div class="mySlides">
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>Terimakasih atas informasinya, saya baru soalnya di jogja</p>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>untuk orang baru sangat bermanfaat sekali</p>
                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                {{ isset($data->created_at) ? \Carbon\Carbon::parse($data->created_at)->format('D m Y') : '-' }}</small>
                            <p>membantu orang yang tidak tau tentang service yang tersedia di</p>
                        </div>
                    </div>
                </div>
                <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
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

        function autoSlide() {
            plusSlides(1);
        }

        setInterval(autoSlide, 2500);
    </script>
@endpush
