@extends('layouts.dashboard')
@section('title','Slider Welcome')
@section('content')
<h1 class="h3 mb-3">
    <strong>Slider Welcome</strong>
        <a href="{{ route('dashboard.sliders.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
            Tambah
            <i class="align-middle" data-feather="plus"></i>
        </a>
    </h1>

<div class="row">
    <div class="col-xl-12 col-xxl-7">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped" id="slider_table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Tanggal Expired</th>
                                <th scope="col">Status</th>
                                <th scope="col">Ke</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#slider_table').DataTable({
                    ordering: true,
                    pagination: true,
                    deferRender: true,
                    serverSide: true,
                    responsive: true,
                    processing: true,
                    stateSave: true,
                    pageLength: 50,
                    ajax: {
                        'url': '{{ route("sliders.data_table") }}',
                    },
                    columns: [
                        { data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false,searchable: false},
                        { data: 'title', name: 'title'},
                        { data: 'expired_date', name: 'expired_date'},
                        { data: 'active', name: 'active',
                            render: function (data) {
                                if (data == 1) {
                                    return '<span class="badge bg-success">Aktif</span>';
                                } else {
                                    return '<span class="badge bg-danger">Tidak Aktif</span>';
                                }
                            }
                        },
                        { data: 'orders', name: 'orders', orderable: true},
                        { data: 'action', name: 'action', orderable: false,searchable: false},
                    ],
                });
                $('#slider_table').on('click', '#btn-delete', function () {
                    var slug = $(this).data('id');
                    var url = '{{ route("dashboard.sliders.destroy", ":slug") }}'; // Use the correct route name "destroy"
                    url = url.replace(':slug', slug);
                    swal({
                        title: 'Anda yakin?',
                        text: 'Data yang sudah dihapus tidak dapat dikembalikan!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    }).then((willDelete) => {
                        if (willDelete) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });

                            // Send a DELETE request
                            $.ajax({
                                url: url,
                                type: 'DELETE', // Use the DELETE method
                                success: function (data) {
                                    if (data.status === 'success') {
                                        swal('Berhasil', data.message, 'success').then(() => {

                                            // Reload the page with a success message
                                            // reload datatable
                                            reloadTable('#artikel_table');

                                        });
                                    } else {
                                        // Reload the page with an error message
                                        swal('Error', data.message, 'error');

                                    }
                                },
                            });
                        } else {
                            // If the user cancels the deletion, do nothing
                        }
                    });
                });
        });
    </script>
@endpush
@endsection
