@extends('master')
@section('title','Karyawan')
@section('karyawan','active')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 md-12 lg-12">
                <div class="py-4">
                    <h1 class="text-left">Data Karyawan</h1>
                    <hr>
                    <a href="{{ route('karyawans.create') }}" class="btn btn-warning">Add Karyawan</a>
                </div>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                            {{ session()->get('pesan') }}
                    </div>
                @endif

                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">umur</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Pendidikan</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody-dark">
                        @forelse ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $karyawan->nama }}</td>
                                <td>{{ $karyawan->jenis_kelamin }}</td>
                                <td>{{ $karyawan->umur }}</td>
                                <td>{{ $karyawan->no_telp }}</td>
                                <td>{{ $karyawan->jabatan->jabatan }}</td>
                                <td>{{ $karyawan->pendidikan->nama_pendidikan }}</td>
                                <td>{{ $karyawan->status->nama_status }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('karyawans.edit',['karyawan' =>$karyawan->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    
                                        <form action="{{ route('karyawans.destroy',['karyawan' =>$karyawan->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger ml-2"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td colspan="9" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
@endsection