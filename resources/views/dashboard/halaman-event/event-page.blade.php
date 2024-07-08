@push('after-css')
    <style>
        .card-horizontal {
            display: flex;
            flex: 1 1 auto;
        }

        .card-img-cup {
            width: 300px;
            height: 13vw;
            object-fit: cover;
        }

        .badge {
            background-color: #F2F8F7;
            border-radius: 4px;
        }

        .sub-badge {
            background-color: #089E52;
            border-radius: 5px;
        }

        .konten-event {
            max-height: 700px;
            overflow-y: auto;
            max-width: 1050px;
            direction: rtl; /* Added to move scrollbar to the left */
            margin-left: 35px
        }

        .konten-event::-webkit-scrollbar {
            width: 3px;
            height: 1px;
            background-color: transparent;
        }

        .konten-event::-webkit-scrollbar-thumb {
            background-color: #089E52;
            border-radius: 3px;
        }

        .konten-event::-webkit-scrollbar-thumb:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .konten-event::-webkit-scrollbar-track {
            background-color: #C4C4C4;
            border-radius: 10px;
        }

        .konten-event-inner {
            direction: ltr; /* Added to maintain normal content direction */
        }
    </style>
@endpush

<div class="container-fluid py-3 mt-2" style="background-color: white;">
    <div class="row" style="margin-left: 2.5cm">
        <div class="col-8">
            <table>
                <tr>
                    <td>
                        <button type="button" class="btn sub-badge text-white">
                            Event
                        </button>
                    </td>
                    <td>
                        <b style="color: black; padding-left: 0.2cm">Pariwisata & Budaya</b>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="row mt-3" style="margin-left: 2cm">
        <div class="row">
            <div class="col-8 konten-event">
                <div class="konten-event-inner rounded">
                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($dataEvent as $event)
                                <div class="col-12 mt-3">
                                    <a href="{{ route('frontend.frontend-layanan.show', $event->id) }}">
                                        <div class="card">
                                            <div class="card-horizontal">
                                                <div class="img-square-wrapper">
                                                    <img class="card-img-cup" src="{{ asset('imageEvent/' . $event->image) }}" alt="Card image cap">
                                                </div>
                                                <div class="card-body" style="margin-left: 1cm">
                                                    <span class="badge" style="color: black">{{ $event->kategoris->nama }}</span>
                                                    <h5 class="card-title mt-2">
                                                        {{ Str::words($event->nama_event, 10, '...') }}
                                                    </h5>
                                                    <p class="card-text" style="color: black">
                                                        {{ substr(strip_tags($event->deskripsi), 0, 110) . '...' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="rounded" style="background-color: #058545;">
                    <div class="iklan-card" style="background-color: #058545; border-radius: 2px; padding: 40px 20px;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">CCTV Services: Your Partner in Maintaining Security</h5>
                            <p class="card-text" style="color: white">Did you come here for something in particular or just general Riker-bashing? And blowing into</p>
                            <a href="#" class="btn btn-primary" style="color: #089E52; background-color: white; border: none; padding: 10px 25px; border-radius: 5px;">Visit Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('after-js')
    <script></script>
@endpush
