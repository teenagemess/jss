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
                <form id="formUpdateProfile">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" name="alamat" class="form-control" id="alamat"
                                    placeholder="alamat" value="{{ $dataEdit->alamat }}" />
                                <input type="hidden" name="id" class="form-control" id="id"
                                    placeholder="alamat" value="{{ $dataEdit->id }}" />
                                <label for="floatingInput">Alamat</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="nope" class="form-control" id="nope"
                                    placeholder="Nomor Handphone" value="{{ $dataEdit->nope }}" />
                                <label for="floatingInput">Nomor Hendphone</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email"
                                    value="{{ $dataEdit->email }}" />
                                <label for="floatingInput">Email</label>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-floating">
                                <input type="text" name="sejarah_singkat" class="form-control" id="sejarah_singkat"
                                    placeholder="Sejarah Singkat" value="{{ $dataEdit->sejarah_singkat }}" />
                                <label for="floatingInput">Sejarah Singkat</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="ig" class="form-control" id="sejarah_singkat"
                                    placeholder="Instagram" value="{{ $dataEdit->ig }}" />
                                <label for="floatingInput">IG</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="yt" class="form-control" id="yt"
                                    placeholder="Youtube" value="{{ $dataEdit->yt }}" />
                                <label for="floatingInput">YT</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="fb" class="form-control" id="fb"
                                    placeholder="Facebook" value="{{ $dataEdit->fb }}" />
                                <label for="floatingInput">FB</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-floating">
                                <input type="text" name="twite" class="form-control" id="twite"
                                    placeholder="Twiter" value="{{ $dataEdit->twite }}" />
                                <label for="floatingInput">Twiter</label>
                            </div>
                        </div>
                    </div>
                    {{-- <button type="button" class="btn btn-danger" style="float: right;margin-left: 0.5%">Reset</button> --}}
                    <button type="button" id="simpanData" class="btn btn-info" style="float: right">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script>
        $("#simpanData").click(function(e) {
            var id = $("#id").val();
            // alert(id)
            var data = $("#formEditProfile").serialize()
            var url = "{{ route('admin.data-profile.update', 'id') }}"
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
