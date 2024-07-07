@extends('layouts.app')
@push('after-css')
    <style>
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="col-12 card border-0" style="padding-left: 5cm;padding-right: 5cm;padding-top: 1cm;padding-bottom: 1cm;">
            <div class=" p-4 rounded" style="background-color: #f1f8f7">
                {{-- <div class=" p-4 rounded" style="background-color: #f1f8f7"> --}}
                <badge class="badge bg-secondary">{{ $dataEvent->kategoris->nama }}</badge>
                <div class="col-12 ">
                    <h4 class="mt-2">
                        {{ $dataEvent->nama_event }}
                    </h4>
                </div>
                <div class="col-6">
                    <table>
                        <tr>
                            <td>Admin</td>
                            <td>|</td>
                            <td>
                                <small class="text-body d-block" style="padding-left: 0.2cm">
                                    <i class="fas fa-calendar-alt me-1"></i>{{ $dataEvent->created_at }}
                                </small>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card" style="height:10mv ">
                    <img src="{{ asset('imageEvent/' . $dataEvent->image) }}">
                </div>
                <div class="card border-0 mt-4" style="background-color: transparent">
                    <p>
                        {!! $dataEvent->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
