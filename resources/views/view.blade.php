@extends('layouts.master')
@section('content')


<div class="container">
    <div class="card">
        <div class="card-header bg-purple">
            <h6>
                <a href="{{url('')}}" class="btn btn-sm btn-light">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <span class="text-white">View Data</span>
            </h6>
        </div>
        <div class="card-body">
        
        <div class="table-responsive">
            <table class="w-100">
                <tr>
                    <td class="w-25">Nama</td>
                    <td>: {{$data->name}}</td>
                </tr>
                <tr>
                    <td class="w-25">Email</td>
                    <td>: {{$data->email}}</td>
                </tr>
                <tr>
                    <td class="w-25">No Telp</td>
                    <td>: {{$data->no_telp}}</td>
                </tr>
                <tr>
                    <td class="w-25">TTL</td>
                    <td>: {{$data->tempat_lahir.' , '.$data->tanngal_lahir}}</td>
                </tr>
            </table>
        </div>

        </div>
    </div>
</div>
@endsection