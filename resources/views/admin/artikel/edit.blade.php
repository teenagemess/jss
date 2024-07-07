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
                <form action="{{ route('admin.data-artikel.update', $data->id) }}" method="post"
                    enctype="multipart/form-data">
                    {{-- @method('PUT') --}}
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="judul" class="form-control" id="judul"
                                    placeholder="Judul Artikel" value="{{ $data->judul }}" />

                                <input type="hidden" name="idArtikel" class="form-control" id="idArtikel"
                                    value="{{ $data->id }}" />
                                @error('judul')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                                <label for="floatingInput">Judul</label>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <select id="largeSelect" class="form-select form-select-lg" name="kategori">
                                <option value="{{ $data->kategori_id }}">{{ $data->kategoris->nama }}</option>
                                @foreach ($dataKategori as $value)
                                    <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                @endforeach
                            </select>
                            @error('largeSelect')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-3 mb-0">
                            <input class="form-control" type="file" id="filename" name="filename">
                            @error('gambar')
                                <small style="color: red">{{ $message }}</small>
                            @enderror

                        </div>
                    </div>

                    <label>Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi">{{ $data->deskripsi }}</textarea>
                    {{-- <div class="summernote">summernote 2</div> --}}

                    <a href="{{ route('admin.data-artikel.index') }}" class="btn btn-success"
                        style="float: right;margin-left: 0.5%">kembali</a>
                    <button type="submit" id="simpanArtikel" class="btn btn-info" style="float: right">Simpan</button>
                </form>
            </div>
            {{-- <img src="{{asset('imageArtikel/'.$data->image)}}" alt="" width="30%"> --}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <h5 class="card-header">gambar Artikel</h5>
            <div class="card-body">
                <img src="{{ asset('imageArtikel/' . $data->image) }}" alt="" width="100%">
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
        $("#updatenData").click(function(e) {
            var id = $("#id").val();
            // alert(id)
            var data = $("#formKategori").serialize()
            var url = "{{ route('admin.data-kategori.update', 'id') }}"
            url = url.replace('id', id)
            $.ajax({
                type: "PUT",
                url: url,
                data: data,
                dataType: "json",
                success: function(response, textStatus, jqXHR) {
                    //Do anything
                    console.log(response);
                    if (response.status == true) {
                        Swal.fire({
                            title: "Data Berhasil DI Update!",
                            // text: "You clicked the button!",
                            icon: "success"
                        });
                        window.location.href = response.url;
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $("#alert").empty();
                    $.each(jqXHR.responseJSON.errors, function(indexInArray, valueOfElement) {
                        $("#alert").append('<div class="alert alert-danger" role="alert">' +
                            valueOfElement +
                            '</div>')
                        $("#alert").fadeTo(2000, 5).slideUp(2000, function() {});
                    });
                }
            });
        });
    </script>
@endpush
