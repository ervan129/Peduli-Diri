@extends('master')

@section('title', 'Peduli Diri')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>Selamat Datang {{ auth()->user()->nama }} di aplikasi peduli diri</h4>
    </div>
    <div class="card-header flex justify-content-between">
        <h4>Input Perjalanan</h4>
        <a href="/input-dashboard" class="btn btn-primary mt-3">Insert</a>
    </div>
@endsection
