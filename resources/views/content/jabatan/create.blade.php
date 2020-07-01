@extends('master')
@section('title','Form Jabatan')
@section('jabatan','active')
@section('content')

<div class="container bg-dark mt-5 mb-5" style="width: 30%">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Data Jabatan</h2>
            <hr>
            <form action="{{ route('jabatans.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Isi jabatan" value="{{ old('jabatan') }}">
                    @error('jabatan')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning mb-3">Save</button>
            </form>
        </div>
    </div>
</div>


@endsection