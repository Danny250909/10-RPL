<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Restoran SMENDA </title>
    <link rel="stylesheet" href="{{ asset ('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    {{-- <h1>Project Aplikasi Restoran</h1> --}}
    <div class="container">

        <div class="mt-2 mb-3">
            {{-- Header --}}
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a href="/"><img style="width: 250px" src="{{ asset('gambar/laravel.png') }}" alt=""></a>
                    <ul class="navbar-nav gap-5">
                        @if (session()->has('cart'))
                            <li class="nav-item"><a href="{{ url('cart') }}">Cart(
                                @php
                                    $count = count( session('cart'));
                                    echo $count;
                                @endphp
                            )</a></li>
                        @else
                            <li class="nav-item">Cart</li>
                        @endif    
                            {{-- <li class="nav-item">Cart</li> --}}
                            @if (session()->missing('idpelanggan'))
                                <li class="nav-item"><a href="{{ url('register') }}">Register</a></li>
                                <li class="nav-item"><a href="{{ url('login') }}">Login</a>
                            @endif
                            {{-- <li class="nav-item"><a href="{{ url('register') }}">Register</a></li>
                            <li class="nav-item"><a href="{{ url('login') }}">Login</a> --}}
                                @if (session()->has('idpelanggan'))
                                    <li class="nav-item">{{ session('idpelanggan') ['email'] }}</li>
                                    <li class="nav-item"><a href="{{ url('logout') }}">Logout</a></li>
                                @endif
                        
                            {{-- <li class="nav-item"><a href="{{ url('login') }}">Login</a></li> --}}
                            {{-- <li class="nav-item"><a href="{{ url('logout') }}">Logout</a></li> --}}
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row mt-3 mb-3">
            {{-- Content --}}
            <div class="col-3">
                {{-- Kategori --}}
                <ul class="list-group">
                    @foreach ($kategoris as $kategori)
                        <li class="list-group-item"><a href="{{ url('show/'.$kategori->idkategori) }}">{{ $kategori->kategori }}</a></li>
                    @endforeach
                </ul>
                {{-- @foreach ($kategoris as $kategori) --}}
                    {{-- <button class="btn btn-primary">{{ $kategori->kategori }}</button> --}}
                {{-- @endforeach --}}
            </div>

            <div class="col-9">
                {{-- Content --}}
                @yield('content')
                {{-- @yield('isi') --}}
            </div>
        </div>

        <div class="bg-light mt-5">
            <p class="text-center">@SMENDA.com</p>
        </div>
    </div>
    <script src="{{ asset ('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>