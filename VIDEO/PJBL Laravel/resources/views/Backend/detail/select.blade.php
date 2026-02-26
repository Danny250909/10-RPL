@extends('Backend.back')

@section('admincontent')
<div>
    <h2>Order Details</h2>
</div>

                <form action="{{ url('admin/kategori') }}" method="get" enctype="multipart/form-data">
                    {{-- @csrf --}}

                    <div class="row">

                        <div class="mt-3 col-5">
                            <label class="form-label" for="">Tanggal Mulai</label>
                            <input class="form-control" type="date" name="tglmulai" id="">
                        </div>

                        <div class="mt-3 col-5">
                            <label class="form-label" for="">Tanggal Akhir</label>
                            <input class="form-control" type="date" name="tglakhir" id="">
                        </div>


                        <div class="my-5 col-5">
                            <p></p>
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>


                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Pelanggan</th>
                                <th>Menu</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                            @php
                                $no = 1;
                            @endphp
                        <tbody>
                            @foreach ($details as $detail)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $detail->tglorder }}</td>
                                    <td>{{ $detail->pelanggan }}</td>
                                    <td>{{ $detail->menu }}</td>
                                    <td>{{ $detail->harga }}</td>
                                    <td>{{ $detail->jumlah }}</td>
                                    <td>{{ $detail->total }}</td>


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
        <div class="d-flex justify-content-center mt-3">
            {{ $details->withQueryString()->links() }}
        </div>
@endsection