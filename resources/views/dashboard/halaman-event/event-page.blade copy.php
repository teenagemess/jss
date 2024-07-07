@push('after-css')
    <style>
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }

        .card-img-cup {
            width: 150%;
            height: 13vw;
            object-fit: cover;
        }
    </style>
@endpush
<div class="container-fluid py-2" style="margin-left: 1cm">
    <div class="row">
        <div class="col-8">
            <table>
                <tr>
                    <td><span class="badge bg-success" style="margin-bottom: 0.2cm">Event</span></td>
                    <td>Pariwisata & Budaya</td>
                </tr>
            </table>
        </div>

    </div>

    <div class="row mt-3">
        <div class="col-8">
            <div class=" p-4 rounded" style="background-color: #f1f8f7">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($dataEvent as $event)
                            <div class="col-12 mt-3">
                                <div class="card">
                                    <div class="card-horizontal">
                                        <div class="img-square-wrapper">
                                            <img class="card-img-cup" src="{{ asset('imageEvent/' . $event->image) }}"
                                                alt="Card image cap">
                                        </div>
                                        <div class="card-body" style="margin-left: 2cm">
                                            <badge class="badge bg-secondary">{{ $event->kategoris->nama }}
                                            </badge>
                                            <h5 class="card-title mt-2">
                                                {{ Str::words($event->nama_event, 10, '...') }}</h5>
                                            <p class="card-text">
                                                {{ substr(strip_tags($event->deskripsi), 0, 110) . '...' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="rounded" style="background-color: #038319">
                <div class="card" style="background-color: #06921e">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text" style="color: #f1f8f7">With supporting text below as a natural
                            lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="position-relative banner-2 mt-3">
                <img src="{{ asset('assets/img/banner-2.jpg') }}" class="img-fluid w-100 rounded" alt="">
                <div class="text-center banner-content-2">
                    <h6 class="mb-2">The Most Populer</h6>
                    <p class="text-white mb-2">News &amp; Magazine WP Theme</p>
                    <a href="#" class="btn btn-primary text-white px-4">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

@push('after-js')
    <script></script>
@endpush
