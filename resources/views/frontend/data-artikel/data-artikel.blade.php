@extends('layouts.app')
@push('after-css')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        ::-webkit-scrollbar {
            width: 6px;
            height: 1px;
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(8, 158, 82, 0.7); /* Warna thumb dengan transparansi */
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #089e52; /* Warna thumb saat dihover */
        }

        ::-webkit-scrollbar-track {
            background-color: transparent; /* Background track transparan */
        }

        ::-webkit-scrollbar-track:hover {
            background-color: rgba(241, 241, 241, 0.5); /* Warna track saat dihover */
        }
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }

        .card{
            transition: 0.3s ease;
        }

        .card:hover{
            transform: scale(1.03);
        }

        .sub-badge{
            background-color: #089E52;
            border-radius: 5px;
        }

    </style>
@endpush
@section('content')
    <div class="container-fluid latest-news">
        <div class="row">
            <div class="col-12">
                <div class=" p-4 rounded" style="background-color: #ffffff">
                    {{-- <div class="row g-4"> --}}
                    <div class="row">
                        <div class="col-8">
                            <table>
                                <tr>
                                    <td><button type="button" class="btn sub-badge text-white">
                                            Artikel
                                        </button></td>
                                    <td><b style="color: black;padding-left: 0.2cm">Terbaru</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 justify-content-between mx-auto">
                <div class=" p-4 rounded">
                    <div class="row">
                        @foreach ($dataartikel as $data)
                        <div class="col-sm-4 mt-3 mb-4">
                                <a href="{{ route('frontend.frontend-artikel.show', $data->id) }}">
                                    <p style="color: rgb(0, 0, 0); font-size: 20px; font-weight: bold">{{ Str::words($data->judul, 10, '...') }}</p><br>
                                    <div class="card" style="width: 25rem; margin-top:0px; border:none;">
                                        <img class="card-img-top" src="{{ asset('imageArtikel/' . $data->image) }}"
                                            alt="Card image cap">
                                        <div class="d-flex flex-column p-1">
                                            <div class="d-flex justify-content-between">
                                                <small class="text-body d-block"><i class="fas fa-calendar-alt me-1"></i>
                                                    {{ \Carbon\Carbon::parse($data->created_at)->format('D m Y') }}</small>
                                                <small class="text-body d-block"><i class="fas fa-eye me-1"></i>
                                                    {{ $data->jmlh_view ? $data->jmlh_view : '0' }}</small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text" style="text-align: justify; color:black; text-align: start">
                                                {{ substr(strip_tags($data->deskripsi), 0, 110) . '...' }}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{ $dataartikel->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


