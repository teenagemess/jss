@extends('layoutsamdin.app')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-3">
                <div id="alert" style="display: none">
                </div>
                <h5 class="card-header">Data Artikel</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <h4><u><b>Judul</b></u></h4>
                            <h5>{{ $dataArtikel->judul }}</h5>
                        </div>
                        <div class="col-md-5">
                            <h4><u><b>Kategori</b></u></h4>
                            <h5>{{ $dataArtikel->kategoris->nama }}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <h4><u><b>Di Buat Oleh</b></u></h4>
                            <h5>{{ $dataArtikel->user_create ? $dataArtikel->user_create : '-' }}</h5>
                        </div>
                        <div class="col-md-5">
                            <a href="{{ route('admin.data-artikel.index') }}" class="btn btn-success">
                                <span class="tf-icons bx bx-arrow-back"></span>&nbsp; Kembali
                            </a>
                        </div>
                    </div>

                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                <h4><u><b>Deskripsi</b></u></h4>
                            </button>
                        </h2>
                        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $dataArtikel->deskripsi !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <h5 class="card-header">gambar Artikel</h5>
                <div class="card-body">
                    <img src="{{ asset('imageArtikel/' . $dataArtikel->image) }}" alt="" width="100%">
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script></script>
@endpush
