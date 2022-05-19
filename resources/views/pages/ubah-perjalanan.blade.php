@extends('master')

@section('title')
Edit Biodata
@endsection

@section('content')


<section class="section">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Ubah Data</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card-body">
                    @foreach ($data as $d)
                    <form action="/update" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$d->id}}">
                        <div class="form-group">
                            <label for="exampleInputTanggal">Tanggal dan jam</label>
                            <input type="datetime-local" id="exampleInputTanggal" name="tanggal" value="{{ $d->tanggal }}" required
                                class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputLokasi">Lokasi yang dikunjungi</label>
                            <input type="text" id="exampleInputLokasi" name="lokasi" placeholder="Lokasi yang dikunjungi" value="{{ $d->lokasi }}" required
                                class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSuhuTubuh">Suhu tubuh</label>
                            <input type="number" id="exampleInputSuhuTubuh" name="suhu" placeholder="Suhu tubuh" value="{{ $d->suhu }}" required
                                class="form-control form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection