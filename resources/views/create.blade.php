@extends('layouts.master')
@section('content')


<div class="container">
    <div class="card">
        <div class="card-header bg-purple">
            <h6>
                <a href="{{url('')}}" class="btn btn-sm btn-light">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <span class="text-white">Tambah Data</span>
            </h6>
        </div>
        <div class="card-body">
        
        <form action="{{url('/create')}}" method="post">
            @csrf
            <div class="form-group mb-2">
                <label for="">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group mb-2">
                <label for="">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
            </div>
            <div class="form-group mb-2">
                <label for="">No Telp</label>
                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{old('no_telp')}}">
            </div>
            <div class="form-group mb-2">
                <label for="">Tempat Lahir</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{old('tempat_lahir')}}">
            </div>
            <div class="form-group mb-2">
                <label for="">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
            </div>
            <button type="submit" class="btn btn-purple">Simpan</button>
        </form>

        </div>
    </div>
</div>
@endsection