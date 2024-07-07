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
            <h5 class="card-header">From Data Kategori</h5>
            <div class="card-body">
                <div id="alert" style="display: none">

                </div>
                <form action="{{ route('admin.data-event.update', $dataEvent->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Nama Event" value="{{ $dataEvent->nama_event }}" />
                                <input type="hidden" name="id" class="form-control" id="id"
                                    placeholder="Nama Event" value="{{ $dataEvent->id }}" />
                                <label for="floatingInput">Nama Event</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="number" name="biaya" class="form-control" id="biaya" placeholder="Biaya"
                                    value="{{ $dataEvent->biaya }}" />
                                <label for="floatingInput">Biaya</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="date" name="tglmulai" class="form-control" id="tglmulai"
                                    placeholder="Tanggal Mulai" value="{{ $dataEvent->tanggal }}" />
                                <label for="floatingInput">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="date" name="tglselesai" class="form-control" id="tglselesai"
                                    placeholder="Tanggal Selesai" value="{{ $dataEvent->tanggal_expired }}" />
                                <label for="floatingInput">Tanggal Selesai</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select id="largeSelect" class="form-select form-select-lg" name="kategori">
                                <option value="{{ $dataEvent->kategori_id }}">{{ $dataEvent->kategoris->nama }}</option>
                                @foreach ($dataKategori as $value)
                                    <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('largeSelect')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="file" name="filename" class="form-control" id="filename"
                                    placeholder="Biaya" />
                                <label for="floatingInput">Gambar</label>
                            </div>
                        </div>
                    </div>
                    <label>Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi">{{ $dataEvent->deskripsi }}</textarea>

                    <a href="{{ route('admin.data-event.index') }}" class="btn btn-success"
                        style="float: right;margin-left: 0.5%">kembali</a>
                    <button type="submit" id="updatenData" class="btn btn-info" style="float: right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <h5 class="card-header">Gambar Event</h5>
            <div class="card-body">
                <img src="{{ asset('imageEvent/' . $dataEvent->image) }}" alt="" width="100%">
            </div>
        </div>
    </div>
@endsection
@push('js')
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
