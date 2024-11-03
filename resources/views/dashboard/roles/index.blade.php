@extends('layouts.dashboard')
@section('title','Dashboard')
@section('content')
<h1 class="h3 mb-3"><strong>List Role</strong>
    <a href="{{ route('dashboard.roles.create') }}" class="btn btn-primary btn-sm float-end">
        <i class="bx bx-plus"></i>
        Tambah
    </a>
</h1>

<div class="row">
    <div class="col-xl-12 col-xxl-5 d-flex">
        <div class="card flex-fill w-100">

            <div class="card-body py-4">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Guard</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
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

@endpush
@endsection
