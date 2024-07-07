@extends('layoutsamdin.app')
@section('content')
    <h4 class="fw-bold mb-2"><span class="text-muted fw-light">Tables /</span> Master jenis Layanan</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">
            <a href="{{ route('admin.data-profile.create') }}" type="button" class="btn btn-primary">
                <span class="tf-icons bx bx-plus-medical"></span>&nbsp;Tambah
            </a>
        </h5>
        <div class="table-responsive text-nowrap p-3">
            <table class="table table-hover" id="tabelProfile">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                        <th>No Handphone</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('after-js')
    <script>
        $(document).ready(function() {
            table();
        });
        var table = function() {
            $('#tabelProfile').DataTable({

                processing: true,
                serverSide: true,
                "bDestroy": true,
                ajax: {
                    url: "{{ route('admin.data-profile.index') }}"
                },
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        orderable: false,
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'nope',
                        name: 'nope'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    }
                ]
            });
        }

        function deleteFile(e, id) {
            // console.log(id);
            var url = "{{ route('admin.data-profile.destroy', 'id') }}"
            url = url.replace('id', id)
            Swal.fire({
                title: "Kamu Yakin?",
                text: "Akan Menghapus Data Ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        cache: false,
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        dataType: "json",
                        success: function(res) {
                            table()
                            if (res.msg) {
                                Swal.fire({
                                    title: "Deleted!",
                                    text: res.msg,
                                    icon: "success"
                                });
                            }
                        },
                    });

                }
            });
        }
    </script>
@endpush
