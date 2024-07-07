@extends('layouts.app')
@push('after-css')
    <style>
        .card-img-top {
            width: 100%;
            height: 15vw;
            object-fit: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid latest-news">
        <div class="row">
            <div class="col-12">
                <div class=" p-4 rounded" style="background-color: #f1f8f7">
                    <div class="row">
                        <div class="col-8">
                            <table>
                                <tr>
                                    <td><span class="badge bg-success" style="margin-bottom: 0.2cm">Layanan</span></td>
                                    <td><b>Unggulan</b></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($datalayananunggulan as $value2)
                            <div class="col-2 mt-2" data-bs-toggle="modal"
                                data-bs-target="<?= '#modal-unggulan-' . $value2->id ?>">
                                <img src="{{ asset('imageLayanan/' . $value2->image) }}"
                                    class="{{ $value2->jenis_frame == '0' ? 'rounded' : 'rounded-circle' }} mx-auto d-block img-zoomin"
                                    alt="" width="75%">
                                <h3 class="text-center">{{ $value2->nama_layanan }}</h3>
                            </div>
                            <!-- Modal Search Start -->
                            <div class="modal fade" id="<?= 'modal-unggulan-' . $value2->id ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card" style="width: 100%;" style="background-color: transparent">
                                                <img class="card-img-top"
                                                    src="{{ asset('imageLayanan/' . $value2->image) }}"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $value2->deskripsi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="modal-footer"> --}}
                                        <center>
                                            <button type="button" class="btn btn-danger" style="margin-bottom: 0.5cm"
                                                data-bs-dismiss="modal">X</button>
                                        </center>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search End -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <center><button type="button" class="btn btn-success btn-lg mt-5">Layanan Lainnya</button></center>
        <div class="row mt-2" style="margin-left: 3cm;margin-right: 3cm;margin-bottom: 1cm">
            <div class="col-12">
                <div class=" p-4 rounded">
                    <div class="row">
                        @foreach ($datalayananall as $value3)
                            <div class="col-2 mt-2" data-bs-toggle="modal"
                                data-bs-target="<?= '#modal-lg-' . $value3->id ?>">
                                {{-- <div class="col-2 mt-2" data-bs-toggle="modal" data-bs-target="#detailLayanan"> --}}
                                <img src="{{ asset('imageLayanan/' . $value3->image) }}"
                                    class="{{ $value3->jenis_frame == '0' ? 'rounded' : 'rounded-circle' }} mx-auto d-block img-zoomin"
                                    alt="" width="75%">
                                <h3 class="text-center">{{ $value3->nama_layanan }}</h3>
                            </div>
                            <!-- Modal Search Start -->
                            <div class="modal fade" id="<?= 'modal-lg-' . $value3->id ?>" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="card" style="width: 100%;" style="background-color: transparent">
                                                <img class="card-img-top"
                                                    src="{{ asset('imageLayanan/' . $value3->image) }}"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-text">{{ $value3->deskripsi }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="modal-footer"> --}}
                                        <center>
                                            <button type="button" class="btn btn-danger" style="margin-bottom: 0.5cm"
                                                data-bs-dismiss="modal">X</button>
                                        </center>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search End -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('after-js')
    <script>
        function modalImage(id) {
            // console.log("tes");
            // alert(params)
            $("#detailLayanan").modal('show');
            $.ajax({
                type: "get",
                url: "{{ route('frontend.frontend-layanan.show', ':id') }}",
                // data: "data",
                dataType: "dataType",
                success: function(response) {

                }
            });
        }
    </script>
@endpush
