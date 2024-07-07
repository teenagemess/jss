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
                <form id="formKategori">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" name="kategori" class="form-control" id="kategori"
                                    placeholder="Nama Kategori" value="{{ $data->nama }}"/>
                                    <input type="hidden" name="id" class="form-control" id="id"
                                    placeholder="Nama Kategori" value="{{ $data->id }}"/>
                                <label for="floatingInput">Kategori</label>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('admin.data-kategori.index')}}" class="btn btn-success" style="float: right;margin-left: 0.5%">kembali</a>
                    <button type="button" id="updatenData" class="btn btn-info" style="float: right">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script>
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
                    if (response.status==true) {
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
