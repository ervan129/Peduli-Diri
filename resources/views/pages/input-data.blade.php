@extends('master')

@section('title', 'Input Perjalanan')

@section('content')
    <div class="card-header flex justify-content-between">
        <h4>Masukkan Data</h4>
    </div>
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card-body">
            <form action="/simpanTravel" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputTanggal">Tanggal dan jam</label>
                    <input type="datetime-local" id="datePickerId" name="tanggal" required
                        class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="exampleInputLokasi">Lokasi yang dikunjungi</label>
                    <input type="text" id="exampleInputLokasi" name="lokasi" placeholder="Lokasi yang dikunjungi" required
                        class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="exampleInputSuhuTubuh">Suhu tubuh</label>
                    <input type="number" id="inputBox" maxlength = "2" name="suhu" placeholder="Suhu tubuh" required
                        class="form-control form-control-sm">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script>
        var inputBox = document.getElementById("inputBox");
    
        var invalidChars = [
         "-",
         "+",
         "e",
         "E",
         ".",
         ",",
        ];
    
        inputBox.addEventListener("keydown", function(e) {
            if (invalidChars.includes(e.key)) {
             e.preventDefault();
        }
    });
    </script>
@endsection
