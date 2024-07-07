@extends('layouts.app')
@section('content')
    <!-- Contact Us Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="bg-light rounded p-5">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="">
                            <h1 class="mb-4">Jogja Smart Service</h1>
                            <p class="mb-4">Merupakan salah satu platform untuk melihat informasi seputar service yang ada
                                di Jogja.</p>
                            <div class="rounded">
                                <iframe class="rounded w-100" style="height: 425px;"
                                    src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=jogja+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <form action="{{ route('frontend.frontend-komentar.store') }}" method="POST" class="mb-4">
                            @csrf
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="nama"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="w-100 form-control border-0 py-3" name="email"
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="col-lg-12">
                                    <input type="text" class="w-100 form-control border-0 py-3" name="nope"
                                        placeholder="Enter Your Phone">
                                </div>
                                <div class="col-12">
                                    <textarea class="w-100 form-control border-0" rows="6" cols="10" placeholder="Your Message" name="pesan"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="w-100 btn btn-primary form-control py-3" type="submit">Kirim
                                        Pesan</button>
                                </div>
                            </div>
                        </form>
                        <div class="row g-4">
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Address</h4>
                                        <p class="mb-0">{{ isset($dataProfile->alamat) ? $dataProfile->alamat : '-' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Mail Us</h4>
                                        <p class="mb-0">{{ isset($dataProfile->email) ? $dataProfile->email : '-' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Telephone</h4>
                                        <p class="mb-0">{{ isset($dataProfile->nope) ? $dataProfile->nope : '-' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="d-flex p-4 rounded bg-white">
                                    <i class="fa fa-share-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Share</h4>
                                        <div class="d-flex">
                                            <a class="me-3"
                                                href="{{ isset($dataProfile->twite) ? $dataProfile->twite : '#' }}"><i
                                                    class="fab fa-twitter text-dark link-hover"></i></a>
                                            <a class="me-3"
                                                href="{{ isset($dataProfile->fb) ? $dataProfile->fb : '#' }}"><i
                                                    class="fab fa-facebook-f text-dark link-hover"></i></a>
                                            <a class="me-3"
                                                href="{{ isset($dataProfile->yt) ? $dataProfile->yt : '#' }}"><i
                                                    class="fab fa-youtube text-dark link-hover"></i></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Us End -->
@endsection
