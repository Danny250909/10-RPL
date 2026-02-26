@extends('Backend.back')

@section('admincontent')
<div>
    <h1>Order Details</h1>
</div>
    <div>
        <h2>Pelanggan : {{ $orders [0] ['pelanggan'] }}</h2>
        <h3>Total : {{ number_format($orders [0] ['total']) }}</h3>
    </div>
    {{-- <div class="mb-3">
        <a class="btn btn-primary" href="{{ url('admin/kategori/create') }}">Tambah Kategori</a>
    <div> --}}
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Menu</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            {{-- <th>Kembali</th>
                            <th>Status</th> --}}
                        </tr>
                    </thead>
                        @php
                            $no = 1;
                        @endphp
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $no++ }}</td>
                                {{-- <td><a href="{{ url('admin/order/'.$order->idorder.'/edit') }}">{{ $order->pelanggan }}</a></td> --}}
                                <td>{{ $order->menu }}</td>
                                <td>{{ $order->harga }}</td>
                                <td>{{ $order->jumlah }}</td>
                                <td>{{ $order->jumlah * $order->harga }}</td>
                                {{-- <td>0</td> --}}
                                {{-- <td>{{ $order->kembali }}</td> --}}
                                
                                {{-- @php
                                    $status = "Lunas";
                                    if ($order->status == 0) {
                                        $status = '<a href=" '.url('admin/order/'.$order->idorder).' "> Bayar </a>';
                                    }
                                @endphp
                                <td>{!! $status !!}</td> --}}

                                {{-- <td><a href="{{ url('admin/kategori/'.$kategori->idkategori.'/edit') }}">Ubah</a></td>
                                <td><a href="{{ url('admin/kategori/'.$kategori->idkategori) }}">Hapus</a></td> --}}

                                {{-- <td><a class="btn btn-warning" href="{{ url('admin/kategori/'.$kategori->id.'/edit') }}">Ubah</a></td> --}}
                                {{-- <td>
                                    <form action="{{ url('admin/kategori/'.$kategori->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        {{-- <div class="d-flex justify-content-center mt-3">
            {{ $menus->withQueryString()->links() }}
        </div> --}}
@endsection