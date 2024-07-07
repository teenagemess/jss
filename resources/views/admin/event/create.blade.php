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
            <h5 class="card-header">From Data Event</h5>
            <div class="card-body">
                <div id="alert" style="display: none">

                </div>
                <form method="POST" id="formEvent" enctype="multipart/form-data" action="{{ route('admin.data-event.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Nama Event" />
                                <label for="floatingInput">Nama Event</label>
                            </div>
                        </div>
                        {{-- <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="deskripsi" class="form-control" id="deskripsi"
                                    placeholder="Deskripsi" />
                                <label for="floatingInput">Deskripsi</label>
                            </div>
                        </div> --}}
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="number" name="biaya" class="form-control" id="biaya"
                                    placeholder="Biaya" />
                                <label for="floatingInput">Biaya</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="date" name="tglmulai" class="form-control" id="tglmulai"
                                    placeholder="Tanggal Mulai" />
                                <label for="floatingInput">Tanggal Mulai</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="date" name="tglselesai" class="form-control" id="tglselesai"
                                    placeholder="Tanggal Selesai" />
                                <label for="floatingInput">Tanggal Selesai</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select id="largeSelect" class="form-select form-select-lg" name="kategori">
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
                                <input type="file" name="image" class="form-control" id="image"
                                    placeholder="Biaya" />
                                <label for="floatingInput">Gambar</label>
                            </div>
                        </div>
                    </div>
                    <label >Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi"></textarea>

                    <button type="button" id="resetForm" class="btn btn-danger" style="float: right;margin-left: 0.5%">Reset</button>
                    <button type="submit" id="simpanData" class="btn btn-info" style="float: right">Simpan</button>
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
        // $("#simpanData").click(function(e) {
        //     var data = $("#formEvent").serialize()
        //     $.ajax({
        //         type: "POST",
        //         url: "{{ route('admin.data-kategori.store') }}",
        //         data: data,
        //         dataType: "json",
        //         success: function(response, textStatus, jqXHR) {
        //             //Do anything
        //             console.log(response);
        //             if (response.status==true) {
        //                 Swal.fire({
        //                 title: "Data Berhasil DI Input!",
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
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
        $("#resetForm").click(function (e) {
            e.preventDefault();
            document.getElementById("formEvent").reset();
            $("#deskripsi").val('');;
        });
    </script>
@endpush
