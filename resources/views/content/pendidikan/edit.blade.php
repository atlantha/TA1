@extends('master')
@section('title','Edit Pendidikan')
@section('pendidikan','active')
@section('content')

<div class="container bg-dark mt-5 mb-5" style="width: 30%">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Edit Pendidikan</h2>
            <hr>
            <form action="{{ route('pendidikans.update',['pendidikan' => $pendidikan->id]) }}" method="POST">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="nama_pendidikan">Pendidikan</label>
                    <select class="custom-select @error('nama_pendidikan') is-invalid @enderror" name="nama_pendidikan" id="nama_pendidikan">
                        <option value="SD" {{ (old('nama_pendidikan') ?? $pendidikan->nama_pendidikan) == 'SD' ? 'selected' : ''}}>
                            SD
                        </option>
                        <option value="SMP" {{ (old('nama_pendidikan') ?? $pendidikan->nama_pendidikan) == 'SMP' ? 'selected' : ''}}>
                            SMP
                        </option>
                        <option value="SMA/SMK" {{ (old('nama_pendidikan') ?? $pendidikan->nama_pendidikan) == 'SMA/SMK' ? 'selected' : ''}}>
                            SMA/SMK
                        </option>
                        <option value="D3" {{ (old('nama_pendidikan') ?? $pendidikan->nama_pendidikan) == 'D3' ? 'selected' : ''}}>
                            D3
                        </option>
                        <option value="S1" {{ (old('nama_pendidikan') ?? $pendidikan->nama_pendidikan) == 'S1' ? 'selected' : ''}}>
                            S1
                        </option>
                        <option value="S2" {{ (old('nama_pendidikan') ?? $pendidikan->nama_pendidikan) == 'S2' ? 'selected' : ''}}>
                            S2
                        </option>
                        <option value="S3" {{ (old('nama_pendidikan') ?? $pendidikan->nama_pendidikan) == 'S3' ? 'selected' : ''}}>
                            S3
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning mb-3">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection