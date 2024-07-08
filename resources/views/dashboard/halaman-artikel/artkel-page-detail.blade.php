@extends('layouts.app')
@push('after-css')
    <style>
        .badge{
            border-radius: 4px;
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="col-12 card border-0" style="padding-left: 5cm;padding-right: 5cm;padding-top: 1cm;padding-bottom: 1cm;">
            <div class=" p-4 rounded">
                {{-- <div class=" p-4 rounded" style="background-color: #f1f8f7"> --}}
                <badge class="badge bg-secondary">{{ $data->kategoris->nama }}</badge>
                <div class="col-12 ">
                    <h4 class="mt-2">
                        {{ $data->judul }}
                    </h4>
                </div>
                <div class="col-6">
                    <table>
                        <tr>
                            <td>Admin</td>
                            <td>|</td>
                            <td>
                                <small class="text-body d-block" style="padding-left: 0.2cm">
                                    <i class="fas fa-calendar-alt me-1"></i>{{ $data->created_at }}
                                </small>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card" style="height:10mv ">
                    <img src="{{ asset('imageArtikel/' . $data->image) }}">
                </div>
                <div class="card border-0 mt-4" style="background-color: transparent">
                    <p>
                        {!! $data->deskripsi !!}
                    </p>
                </div>
                <h3 style="margin-top: 3cm">Comments</h3>
                <div class="card border-2 p-1" style="background-color: ;height: 170px">
                    <input type="hidden" id="idArtikel" name="idArtikel" value="{{ $data->id }}"
                        placeholder="Enter Komentar"
                        style="outline: 0;border-left:none;border-right:none;border-top:none;margin-top: 2cm ">
                    <input type="text" id="komentar" placeholder="Enter Komentar"
                        style="outline: 0;border-left:none;border-right:none;border-top:none;margin-top: 2cm ">
                    <div style="margin-bottom: 0.5cm;margin-right: 0.3cm"><button type="button"
                            class="btn btn-success mt-3" style="float: right" id="kirimkomentar">Send</button>
                    </div>
                </div>

                <div style="background-color: white;display: show" class="p-2" id="komentarUser">

                    <table class="mt-5" style="width: 100%" border="0">
                        @foreach ($datakomentar as $komentarUser)
                            <tr>
                                <td style="color: black;font-family: Times New Roman, Times, serif; ">
                                    <b>Anonim</b>
                                </td>
                                <td style="font-family: Times New Roman, Times, serif">
                                    {{ $komentarUser->created_at->diffForHumans() }}</td>
                                {{-- <td style="font-family: Arial,Helvetica;text-align: end;color: green"><i
                                class="bi bi-reply"></i><b style="margin-left: 0.1cm">Replay</b></td> --}}
                            </tr>
                            <tr>
                                <td>{{ $komentarUser->komentar }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
@push('after-js')
    <script>
        $("#kirimkomentar").click(function(e) {
            var komentar = $("#komentar").val();
            var idArtikel = $("#idArtikel").val();
            $.ajax({
                type: "POST",
                url: "{{ route('frontend.frontend-komentar-artikel.store') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    komentar: komentar,
                    idArtikel: idArtikel,
                },
                dataType: "json",
                success: function(response, textStatus, jqXHR) {
                    console.log(response);
                    if (response.status == true) {
                        $("#komentarUser").show();
                        location.reload();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.table(jqXHR)
                }
            });
            //alert(kometar)
        });
    </script>
@endpush
