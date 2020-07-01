@extends('master')
@section('title','Edit Jabatan')
@section('jabatan','active')
@section('content')

<div class="container bg-dark mt-5 mb-5" style="width: 30%">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Edit Jabatan</h2>
            <hr>
            <form action="{{ route('jabatans.update',['jabatan' => $jabatan->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control @error('jabatan') is-invalid @enderror" placeholder="Isi jabatan" value="{{ old('jabatan') ?? $jabatan->jabatan }}">
                    @error('jabatan')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-warning mb-3">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection

