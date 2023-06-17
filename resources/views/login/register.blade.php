<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar</title>
    <link rel="stylesheet" href="{{ asset('vendor/css/login.css') }}">

    <!-- cdn Boostrap -->

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <div class="container-fluid navigasi-top">
        <div class="row">
            <div class="col-md-5 offset-md-1 mt-3">
                {{-- <h2 class="logo-login"><b>We<span>BOOK</span></b></h2> --}}
                <img src="/images/logo.png" alt="">
            </div>
            <div class="col-md-2 offset-md-4 mt-3">
                <a href="{{ url('/') }}"><i data-feather="home"></i></a>
            </div>
        </div>
    </div>
    <div class="container body">
        <h1 class="text-center mt-5 title-login"><span><b>Selamat Datang di SNStore Watch</b></span></h1>
        <div class="row justify-content-center">
            <div class="card">
                <h4 class="text-center">Daftarkan Akun</h4>
                @if ($errors->any())
                    <div class="alert alert-danger mb-3 m-auto" role="alert">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </div>
                @endif
                <form action="{{ url('/register-post') }}" method="POST">
                    @csrf
                    <br>
                    <div class="form-group">
                        <label>Username<span style="color: red">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nama/Username">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                <p>Min 5 karakter</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email<span style="color: red">*</span></label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email terdaftar">
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                <p>Harap masukkan email dengan benar!</p>
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password<span style="color: red">*</span></label>
                         <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Minimal 6 karakter">
                         @error('password')
                            <div class="alert alert-danger mt-2">
                                <p>minimum karakter 6</p>
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-submit" name="masuk">Daftar</button>
                    <p>Sudah punya akun? <a href="{{ url('/login') }}"><b>Login</b></a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
        feather.replace()
      </script>
</body>
</html>
