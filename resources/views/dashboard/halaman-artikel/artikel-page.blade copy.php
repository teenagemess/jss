@push('after-css')
    <style>
        .parent {
            width: 100%;
            /* I took the width from your post and placed it in css */
            height: 100%;
        }

        /* This will style any <img> element in .parent div */
        /* .parent img {
                                                                                                                height: 100%;
                                                                                                                width: 100%;
                                                                                                            } */
    </style>
@endpush
<div class="container-fluid py-5" style="background-color: #f1f8f7">
    <div class="container py-5">
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
            <div class="col-lg-7 col-xl-8 mt-0">

                <div class=" p-4 rounded">
                    <div class="row g-4 align-items-center">
                        @foreach ($dataartikel as $value)
                            <div class="col-md-6">
                                <div class=" rounded">

                                    <div style="padding-bottom: 0.3cm">
                                        <b>{{ strip_tags($value->judul) }}</b>
                                    </div>

                                    <div class="rounded-top overflow-hidden ">
                                        <img src="{{ asset('imageArtikel/' . $value->image) }}"
                                            class="img-zoomin rounded-top w-100" alt="">
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex justify-content-between">
                                            <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                                Dec 9, 2024</small>
                                            <small class="text-body d-block"><i class="fas fa-eye me-1"></i>
                                                20K</small>
                                        </div>
                                        <div>
                                            {{ Str::of($value->deskripsi)->limit(100) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="col-md-6">
                            <div class="d-flex flex-column">
                                <div class="whats-item">
                                    <div class="bg-light rounded">
                                        <div class="rounded-top overflow-hidden">
                                            <img src="{{ asset('') }}assets/img/news-4.jpg"
                                                class="img-zoomin img-fluid rounded-top w-100" alt="">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="d-flex justify-content-between">
                                                <a href="#" class="small text-body link-hover">by Willium
                                                    Smith</a>
                                                <small class="text-body d-block"><i
                                                        class="fas fa-calendar-alt me-1"></i>
                                                    Dec 9, 2024</small>
                                            </div>
                                            <div class="mt-3">
                                                <a href="#" class="h4">There are many variations of
                                                    passages
                                                    of Lorem Ipsum available,</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">

                <div class="rounded p-4 pt-0">
                    <div class="row g-4">
                        masukkan di sini ulasa pengguna

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
