@extends('layoutsamdin.app')
@section('content')
    <h4 class="fw-bold mb-2"><span class="text-muted fw-light">Tables /</span> Data Artikel</h4>
    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">
            <a href="{{ route('admin.data-artikel.create') }}" type="button" class="btn btn-primary">
                <span class="tf-icons bx bx-plus-medical"></span>&nbsp;Tambah
            </a>
        </h5>
        <div class="table-responsive text-nowrap p-3">
            <table class="table table-hover" id="tabelArtikel">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">

                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">PEMBERITAHUAN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    COMING SOON
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('after-js')
    <script>
        $(document).ready(function() {
            table();
        });
        var table = function() {
            $('#tabelArtikel').DataTable({

                processing: true,
                serverSide: true,
                "bDestroy": true,
                ajax: {
                    url: "{{ route('admin.data-artikel.index') }}"
                },
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        orderable: false,
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'judul',
                        name: 'judul'
                    },
                    {
                        data: 'deskripsi',
                        name: 'deskripsi'
                    },
                    {
                        data: 'kategoris.nama',
                        name: 'kategoris.nama'
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
            var url = "{{ route('admin.data-artikel.destroy', 'id') }}"
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
