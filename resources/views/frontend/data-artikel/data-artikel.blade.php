@extends('layouts.app')
@push('after-css')
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid latest-news">
        <div class="row">
            <div class="col-12">
                <div class=" p-4 rounded" style="background-color: #f1f8f7">
                    {{-- <div class="row g-4"> --}}
                    <div class="row">
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
                    </div>
                    {{-- </div> --}}
                    <div class="row">
                        @foreach ($dataartikelunggulan as $data)
                            <div class="col-sm-3 mt-3">
                                <a href="{{ route('frontend.frontend-artikel.show', $data->id) }}">
                                    <b style="color: green">{{ Str::words($data->judul, 10, '...') }}</b><br>
                                    <div class="card" style="width: 18rem;">
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class=" p-4 rounded">
                    <div class="row">
                        @foreach ($dataartikel as $data)
                            <div class="col-sm-3 mt-3">
                                <a href="{{ route('frontend.frontend-artikel.show', $data->id) }}">
                                    <b style="color: green">{{ Str::words($data->judul, 10, '...') }}</b><br>
                                    <div class="card" style="width: 18rem;">
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
        </div>
    </div>
@endsection
