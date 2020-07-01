@extends('master')
@section('title','Form Status')
@section('status','active')
@section('content')

    
<div class="container bg-dark mt-5 mb-5" style="width: 30%">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Data Status</h2>
            <hr>
            <form action="{{ route('statuses.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_status">Status</label>
                    <select class="custom-select" name="nama_status" id="nama_status">
                        <option value="Karyawan Magang" {{ old('nama_status') == 'Karyawan Magang' ? 'selected' : ''}}>
                            Karyawan Magang
                        </option>
                        <option value="Karyawan Kontrak" {{ old('nama_status') == 'Karyawan Kontrak' ? 'selected' : ''}}>
                            Karyawan Kontrak
                        </option>
                        <option value="Karyawan Tetap" {{ old('nama_status') == 'Karyawan Tetap' ? 'selected' : ''}}>
                            Karyawan Tetap
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning mb-3">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection
