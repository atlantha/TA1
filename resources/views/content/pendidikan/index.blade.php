@extends('master')
@section('title','Pendidikan')
@section('pendidikan','active')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 md-12 lg-12">
                <div class="py-4">
                    <h1 class="text-left">Data Pendidikan</h1>
                    <hr>
                    <a href="{{ route('pendidikans.create') }}" class="btn btn-warning">Add Pendidikan</a>
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
                            <th scope="col">Pendidikan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pendidikans as $tampil)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if ($tampil->nama_pendidikan=='SD')
                                        <h5><span class="badge badge-danger">{{ $tampil->nama_pendidikan }}</span> </h5>
                                    @endif
                                    @if ($tampil->nama_pendidikan=='SMP')
                                        <h5><span class="badge badge-primary">{{ $tampil->nama_pendidikan }}</span> </h5>
                                    @endif
                                    @if ($tampil->nama_pendidikan=='SMA/SMK')
                                        <h5><span class="badge badge-secondary">{{ $tampil->nama_pendidikan }}</span> </h5>
                                    @endif
                                    @if ($tampil->nama_pendidikan=='D3')
                                        <h5><span class="badge badge-success">{{ $tampil->nama_pendidikan }}</span> </h5>
                                    @endif
                                    @if ($tampil->nama_pendidikan=='S1')
                                        <h5><span class="badge badge-success">{{ $tampil->nama_pendidikan }}</span> </h5>
                                    @endif
                                    @if ($tampil->nama_pendidikan=='S2')
                                        <h5><span class="badge badge-success">{{ $tampil->nama_pendidikan }}</span> </h5>
                                    @endif
                                    @if ($tampil->nama_pendidikan=='S3')
                                        <h5><span class="badge badge-success">{{ $tampil->nama_pendidikan }}</span> </h5>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('pendidikans.edit', $tampil->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('pendidikans.destroy',$tampil->id) }}" method="POST">
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