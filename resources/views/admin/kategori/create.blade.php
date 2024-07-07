@extends('layoutsamdin.app')
@section('content')
    <div class="col-md-6">
        <div class="card mb-3">
            <div id="alert" style="display: none">
            </div>
            <h5 class="card-header">From Data Kategori</h5>
            <div class="card-body">
                <div id="alert" style="display: none">

                </div>
                <form method="POST" id="formKategori">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" name="kategori" class="form-control" id="kategori"
                                    placeholder="Nama Kategori" />
                                <label for="floatingInput">Kategori</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-danger" style="float: right;margin-left: 0.5%">Reset</button>
                    <button type="button" id="simpanData" class="btn btn-info" style="float: right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script>
        $("#simpanData").click(function(e) {
            var data = $("#formKategori").serialize()
            $.ajax({
                type: "POST",
                url: "{{ route('admin.data-kategori.store') }}",
                data: data,
                dataType: "json",
                success: function(response, textStatus, jqXHR) {
                    //Do anything
                    console.log(response);
                    if (response.status==true) {
                        Swal.fire({
                        title: "Data Berhasil DI Input!",
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
