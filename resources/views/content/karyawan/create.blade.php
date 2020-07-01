@extends('master')
@section('title','Form Karyawan')
@section('jabatan','active')
@section('content')

<div class="container bg-dark mt-5 mb-5" style="width: 30%">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Data Karyawan</h2>
            <hr>
            <form action="{{ route('karyawans.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Isi Nama Karyawan" value="{{ old('nama') }}">
                    @error('nama')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="custom-select" name="jenis_kelamin" id="jenis_kelamin" >
                        <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : ''}}>
                            Laki-laki
                        </option>
                        <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : ''}}>
                            Perempuan
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Isi Umur" value="{{ old('umur') }}">
                    @error('umur')
                        {{ $message }}
                    @enderror
                </div>


                <div class="form-group">
                    <label for="no_telp">No Telpon</label>
                    <input type="text" name="no_telp" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="Isi No telp" value="{{ old('no_telp') }}">
                    @error('no_telp')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jabatan_id">Jabatan</label>
                    <select class="form-control" name="jabatan_id" id="jabatan_id">
                        @foreach ($jabatans as $tampil)
                            <option value="{{ $tampil->id }}" {{ old('jabatan_id') == $tampil->jabatan ? 'selected' : '' }}>
                                {{ $tampil->jabatan }}
                            </option>
                        @endforeach
                    </select>
                    @error('jabatan_id')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pendidikan_id">Pendidikan</label>
                    <select class="form-control" name="pendidikan_id" id="pendidikan_id">
                        @foreach ($pendidikans as $tampil)
                            <option value="{{ $tampil->id }}" {{ old('pendidikan_id') == $tampil->nama_pendidikan ? 'selected' : '' }}>
                                {{ $tampil->nama_pendidikan }}
                            </option>
                        @endforeach
                    </select>
                    @error('pendidikan_id')
                        {{ $message }}
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status_id">Status</label>
                    <select class="form-control" name="status_id" id="status_id">
                        @foreach ($statuses as $tampil)
                            <option value="{{ $tampil->id }}" {{ old('status_id') == $tampil->nama_status ? 'selected' : '' }}>
                                {{ $tampil->nama_status }}
                            </option>
                        @endforeach
                    </select>
                    @error('status_id')
                        {{ $message }}
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning mb-3">Save</button>
            </form>
        </div>
    </div>
</div>


@endsection