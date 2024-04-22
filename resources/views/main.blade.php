@extends('layouts.master')
@section('content')


<div class="container">
    <div class="card">
        <div class="card-header bg-purple">
            <h6>
                <a href="{{url('create')}}" class="btn btn-sm btn-primary float-end">Tambah Data</a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No Telp</th>
                            <th>TTL</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $no=>$user)
                        <tr>
                            <td>{{$no+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->no_telp}}</td>
                            <td>{{$user->tempat_lahir.' , '.$user->tanggal_lahir}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{url('view/'.$user->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="{{url('edit/'.$user->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('delete/'.$user->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection