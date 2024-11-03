@extends('layouts.dashboard')
@section('title','Dashboard')
@section('content')
<h1 class="h3 mb-3"><strong>Tambah Role</strong> </h1>

<div class="row">
    <div class="col-xl-12 col-xxl-5 d-flex">
        <div class="card flex-fill w-100">

            <div class="card-body py-4">
                <form action="{{ route('dashboard.roles.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@push('js')

@endpush
@endsection
