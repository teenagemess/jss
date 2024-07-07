@extends('layoutsamdin.app')
@push('before-css')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endpush
@section('content')
    <div class="col-md-12">
        <div class="card mb-3">
            <div id="alert" style="display: none">
            </div>
            <h5 class="card-header">From Data Layanan</h5>
            <div class="card-body">
                <div id="alert" style="display: none">

                </div>
                <form method="POST" id="formLayanan" enctype="multipart/form-data" action="{{ route('admin.data-layanan.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="nama_layanan" class="form-control" id="nama_layanan"
                                    placeholder="Nama Layanan" />
                                <label for="floatingInput">Nama Layanan</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <select id="largeSelect" class="form-select form-select-lg" name="jenisLayanan">
                                @foreach ($jenisLayanan as $value)
                                    <option value="{{ $value->id }}">{{ $value->jenis_layanan }}</option>
                                @endforeach
                            </select>
                            @error('largeSelect')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="file" name="gambar" class="form-control" id="gambar"
                                    placeholder="Gambar Layanan" />
                                <label for="floatingInput">Gambar</label>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 mb-3"> --}}
                        <div class="form-floating">
                            <label>Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi"></textarea>
                        </div>
                        {{-- </div> --}}
                    </div>
                    <button type="button" class="btn btn-danger" style="float: right;margin-left: 0.5%">Reset</button>
                    <button type="submit" id="simpanData" class="btn btn-info" style="float: right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endpush
@push('after-js')
    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
    </script>
@endpush
