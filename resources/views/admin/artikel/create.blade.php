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
            <h5 class="card-header">From Data Artikel</h5>
            <div class="card-body">
                <div id="alert" style="display: none">

                </div>
                <form method="POST" id="formArtikel" enctype="multipart/form-data" action="{{ route('admin.data-artikel.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="judul" class="form-control" id="judul"
                                    placeholder="Judul Artikel" />
                                @error('judul')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                                <label for="floatingInput">Judul</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <select id="largeSelect" class="form-select form-select-lg" name="kategori">
                                @foreach ($dataKategori as $value)
                                    <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('largeSelect')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-0">
                            {{-- <div class="form-floating"> --}}
                            <input class="form-control" type="file" id="formFile" name="gambar">
                            @error('gambar')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                            {{-- </div> --}}
                        </div>
                    </div>

                    <label>Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi"></textarea>
                    {{-- <div class="summernote">summernote 2</div> --}}

                    <button type="button" class="btn btn-danger" style="float: right;margin-left: 0.5%">Reset</button>
                    <button type="submit" id="simpanArtikel" class="btn btn-info" style="float: right">Simpan</button>
                </form>
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
        // $("#simpanArtikel").click(function(e) {
        //     $form = $('#formArtikel')[0]
        //     $formdata = new formData($form)
        //     $.ajax({
        //         type: "POST",
        //         url: "{{ route('admin.data-artikel.store') }}",
        //         data: formdata,
        //         dataType: false,
        //         contentType: false,
        //         cache: false,
        //         success: function(response, textStatus, jqXHR) {
        //             //Do anything
        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //             console.table(jqXHR)
        //         }
        //     });
        // });
    </script>
@endpush
