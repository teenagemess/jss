@extends('layoutsamdin.app')
@section('content')
    <div class="col-md-6">
        <div class="card mb-3">
            <div id="alert" style="display: none">
            </div>
            <h5 class="card-header">Data Jenis Layanan</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7" >
                        <h4><u><b>Jenis Layanan</b></u></h4>
                        <h5>{{ $dataJenisLayanan->jenis_layanan }}</h5>
                    </div>
                    <div class="col-md-5" >
                        <h4><u><b>Di Buat Pada</b></u></h4>
                        <h5>{{ $dataJenisLayanan->created_at }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7" >
                        <h4><u><b>Di Buat Oleh</b></u></h4>
                        <h5>{{ $dataJenisLayanan->user_create?$dataJenisLayanan->user_create:'-' }}</h5>
                    </div>
                    <div class="col-md-5" >
                        <a href="{{route('admin.data-jenis-layanan.index')}}" class="btn btn-success">
                            <span class="tf-icons bx bx-arrow-back"></span>&nbsp; Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script></script>
@endpush
