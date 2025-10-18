<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Admin Aplikasi Restoran SMENDA </title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row mt-6 justify-content-center">
            <div class="col">
                <h2 class="text-center">
                    Login Admin
                </h2>
                    <form action="{{ url('admin/postlogin') }}" method="post">
                        @csrf
                            @if (Session::has('pesan'))
                                <div class="alert alert-danger">
                                    {{ Session::get('pesan') }}
                                </div>
                            @endif
                            <div class="mt-3">
                                <label class="form-label" for="">Email</label>
                                <input class="form-control" value="{{ old('email') }}" type="email" name="email" id="">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="">Password</label>
                                <input class="form-control"  type="password" name="password" id="">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mt-5">
                                {{-- <label for="">Password</label> --}}
                                {{-- <input type="submit" name="submit" value="Register" id=""> --}}
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>

    <script src="{{ asset ('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>