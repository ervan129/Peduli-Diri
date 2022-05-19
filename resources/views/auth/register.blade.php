@extends('main');

@section('title', 'Register')

@section('main.content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{ asset('dist/img/earth.png') }}" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>

                        <div class="card-body">
                            <form action="registUser" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group ">
                                    <label for="nama">Nama</label>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" autofocus required>
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">NIK</label>
                                    <input id="inputBox" type="number" maxlength = "16" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                                    {{-- oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" --}}
                                    required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <div class="mt-5 text-muted text-center">
                                Have an account? <a href="/">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
