@extends('master')

@section('title', 'Catatan Perjalanan')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>Perjalanan</h4>
        <a href="/input-dashboard" class="btn btn-primary mt-3">Insert</a>
    </div>
    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Suhu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($data->count() == 0)
                        <tr>
                            <td colspan="5">Tidak ada data yang ditampilkan.</td>
                        </tr>
                    @endif
                    @php
                        $id = 1;
                    @endphp
                    @foreach ($data as $d)
                        <tr>
                            <th scope="row">{{ $id++ }}</th>
                            <td>{{ $d->tanggal }}</td>
                            <td>{{ $d->lokasi }}</td>
                            <td>{{ $d->suhu }}</td>
                            <td>
                                <a href="/ubah/{{ $d->id }}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>
                                <a href="/hapus/{{$d->id}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
@endsection
