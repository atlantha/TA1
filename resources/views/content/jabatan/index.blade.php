@extends('master')
@section('title','Jabatan')
@section('jabatan','active')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 md-12 lg-12">
                <div class="py-4">
                    <h1 class="text-left">Data Jabatan</h1>
                    <hr>
                    <a href="{{ route('jabatans.create') }}" class="btn btn-warning">Add Jabatan</a>
                </div>

                @if (session()->has('pesan'))
                    <div class="alert alert-success">
                            {{ session()->get('pesan') }}
                    </div>
                @endif

                <table class="table table-bordered bg-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jabatans as $tampil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tampil->jabatan }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{route('jabatans.edit',['jabatan' =>$tampil->id])  }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    
                                        <form action="{{ route('jabatans.destroy',['jabatan' =>$tampil->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger ml-2"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <td colspan="3" class="text-center">Data Kosong</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection