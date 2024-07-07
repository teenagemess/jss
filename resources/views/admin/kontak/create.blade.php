@extends('layoutsamdin.app')
@section('content')
    <div class="col-md-12">
        <div class="card mb-3">
            <div id="alert" style="display: none">
            </div>
            <h5 class="card-header">From Data Master Jenis Layanan</h5>
            <div class="card-body">
                <div id="alert" style="display: none">

                </div>
                <form method="POST" id="formProfile">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" name="alamat" class="form-control" id="alamat"
                                    placeholder="alamat" />
                                <label for="floatingInput">Alamat</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="nope" class="form-control" id="nope"
                                    placeholder="Nama Jenis LAyanan" />
                                <label for="floatingInput">Nomor Hendphone</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Nama Jenis LAyanan" />
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" name="sejarah_singkat" class="form-control" id="sejarah_singkat"
                                    placeholder="Sejarah Singkat" />
                                <label for="floatingInput">Sejarah Singkat</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="ig" class="form-control" id="sejarah_singkat"
                                    placeholder="Instagram" />
                                <label for="floatingInput">IG</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="yt" class="form-control" id="yt"
                                    placeholder="Youtube" />
                                <label for="floatingInput">YT</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="fb" class="form-control" id="fb"
                                    placeholder="Facebook" />
                                <label for="floatingInput">FB</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="twite" class="form-control" id="twite"
                                    placeholder="Twiter" />
                                <label for="floatingInput">Twiter</label>
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
            var data = $("#formProfile").serialize()
            $.ajax({
                type: "POST",
                url: "{{ route('admin.data-profile.store') }}",
                data: data,
                dataType: "json",
                success: function(response, textStatus, jqXHR) {
                    //Do anything
                    console.log(response);
                    if (response.status == true) {
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
