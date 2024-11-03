@extends('layouts.dashboard')
@section('title','Agenda')
@section('content')
<h1 class="h3 mb-3">
    <strong>Agenda</strong>
        <a href="{{ route('dashboard.agenda.create') }}" class="btn btn-primary float-end btn-sm btn-rounded">
            Tambah
            <i class="align-middle" data-feather="plus"></i>
        </a>
    </h1>

<div class="row">
    <div class="col-xl-12 col-xxl-7 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Schedule</th>
                                            <th scope="col">Lokasi</th>
                                            <th scope="col">View</th>
                                            <th scope="col">Waktu</th>
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
        </div>
    </div>
</div>

@push('js')

@endpush
@endsection
