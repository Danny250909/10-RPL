@extends('Backend.back')

@section('admincontent')
<div>
    <h2>Kategori</h2>
</div>
        <div>
            <div class="mb-3">
                <a class="btn btn-primary" href="{{ url('admin/kategori/create') }}">Tambah Kategori</a>
            </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pelanggan</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Telp</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                            @php
                                $no = 1;
                            @endphp
                        <tbody>
                            @foreach ($pelanggans as $pelanggan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pelanggan->pelanggan }}</td>
                                    <td>{{ $pelanggan->alamat }}</td>
                                    <td>{{ $pelanggan->email }}</td>
                                    <td>{{ $pelanggan->telp }}</td>
                                    @php
                                        if ($pelanggan->aktif == 0) {
                                            $aktif = '<a href=" '.url('admin/pelanggan/'.$pelanggan->idpelanggan).' ">Banned</a>';
                                        } else {
                                            $aktif = '<a href=" '.url('admin/pelanggan/'.$pelanggan->idpelanggan).' ">Aktif</a>';
                                        }
                                        
                                    @endphp
                                    <td>{!! $aktif !!}</td>

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
        </div>
     <div class="d-flex justify-content-center mt-3">
          {{ $pelanggans->withQueryString()->links() }}
    </div>
@endsection