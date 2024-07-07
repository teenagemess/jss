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
                <form action="{{ route('admin.data-layanan.update', $dataLayanan->id) }}" method="post"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="nama_layanan" class="form-control" id="nama_layanan"
                                    placeholder="Nama Layanan" value="{{ $dataLayanan->nama_layanan }}" />
                                <input type="hidden" name="id" class="form-control" id="id"
                                    placeholder="Nama Layanan" value="{{ $dataLayanan->id }}" />
                                <label for="floatingInput">Nama Layanan</label>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <select id="largeSelect" class="form-select form-select-lg" name="jenisLayanan">
                                <option value="{{ $dataLayanan->jenis_layanan }}">
                                    {{ $dataLayanan->jenislayanans->jenis_layanan }}</option>
                                @foreach ($dataJeniLayanan as $value)
                                    <option value="{{ $value->id }}">{{ $value->jenis_layanan }}</option>
                                @endforeach
                            </select>
                            @error('largeSelect')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="file" name="filename" class="form-control" id="filename"
                                    placeholder="Gambar Layanan" />
                                <label for="floatingInput">Gambar</label>
                            </div>
                        </div>
                        {{-- <div class="col-md-12 mb-3"> --}}
                        <div class="form-floating">
                            <label>Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi">{{ $dataLayanan->deskripsi }}</textarea>
                        </div>
                        {{-- </div> --}}
                    </div>
                    <a href="{{ route('admin.data-layanan.index') }}" class="btn btn-success"
                        style="float: right;margin-left: 0.5%">kembali</a>
                    <button type="submit" id="updatenData" class="btn btn-info" style="float: right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <h5 class="card-header">Gambar Layanan</h5>
            <div class="card-body">
                <img src="{{ asset('imageLayanan/' . $dataLayanan->image) }}" alt="" width="100%">
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
        // $("#updatenData").click(function(e) {
        //     var id = $("#id").val();
        //     // alert(id)
        //     var data = $("#formKategori").serialize()
        //     var url = "{{ route('admin.data-kategori.update', 'id') }}"
        //     url = url.replace('id', id)
        //     $.ajax({
        //         type: "PUT",
        //         url: url,
        //         data: data,
        //         dataType: "json",
        //         success: function(response, textStatus, jqXHR) {
        //             //Do anything
        //             console.log(response);
        //             if (response.status==true) {
        //                 Swal.fire({
        //                 title: "Data Berhasil DI Update!",
        //                 // text: "You clicked the button!",
        //                 icon: "success"
        //             });
        //             window.location.href = response.url;
        //             }

        //         },
        //         error: function(jqXHR, textStatus, errorThrown) {
        //             $("#alert").empty();
        //             $.each(jqXHR.responseJSON.errors, function(indexInArray, valueOfElement) {
        //                 $("#alert").append('<div class="alert alert-danger" role="alert">' +
        //                     valueOfElement +
        //                     '</div>')
        //                 $("#alert").fadeTo(2000, 5).slideUp(2000, function() {});
        //             });
        //         }
        //     });
        // });
    </script>
@endpush
