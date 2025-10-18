@extends('front')
@section('content')
    <div class="row">
        @foreach ($menus as $menu)
            <div class="card mx-3 mb-3" style="width: 18rem; display: inline-block; margin: 10px">
                <img src="{{ asset('gambar/' . $menu->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                            <h3 class="card-title">{{ $menu->menu }}</h3>
                            <p class="card-text">{{ $menu->deskripsi }}</p>
                            <h3 class="card-title">{{ $menu->harga }}</h3>
                            <a href="{{ url('beli/'.$menu->idmenu) }}" class="btn btn-primary">Beli</a>
                    </div>
            </div>
        @endforeach
    <div class="d-flex justify-content-center mt-3">
        {{ $menus->links() }}
    </div>
    </div>
@endsection
