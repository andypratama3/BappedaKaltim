@extends('layouts.dashboard')
@section('title','Tambah Agenda')
@section('content')
<h1 class="h3 mb-3">
    <strong>Tambah Agenda</strong>
</h1>

<div class="row">
    <div class="col-xl-12 col-xxl-7 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('dashboard.agenda.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="schedule" class="form-label">Schedule</label>
                                        <input type="datetime-local" class="form-control" id="schedule" name="schedule" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="location" class="form-label">Lokasi</label>
                                        <input type="text" class="form-control" id="location" name="location" maxlength="255" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="caption" class="form-label">Caption</label>
                                        <input type="text" class="form-control" id="caption" name="caption" maxlength="512" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">

                                    <div class="col-md-12">
                                        <label for="times" class="form-label">Waktu</label>
                                        <input type="text" class="form-control" id="times" name="times" maxlength="191">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="dihadiri" class="form-label">Dihadiri</label>
                                        <textarea class="form-control" id="dihadiri" name="dihadiri" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('dashboard.agenda.index') }}" class="btn btn-danger">Kembali</a>
                                        <button type="submit" class="btn btn-primary float-end">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<!-- You can add any custom JS here if needed -->
@endpush
@endsection
