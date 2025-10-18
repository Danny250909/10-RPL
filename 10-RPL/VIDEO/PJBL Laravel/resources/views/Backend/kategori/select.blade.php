@extends('Backend.back')

@section('admincontent')
    <div>
        <h2>Kategori</h2>
    </div>
    <div class="mb-3">
        <a class="btn btn-primary" href="{{ url('admin/kategori/create') }}">Tambah Kategori</a>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
            </thead>
                @php
                    $no = 1;
                @endphp
            <tbody>
                @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td><a href="{{ url('admin/kategori/'.$kategori->idkategori.'/edit') }}">Ubah</a></td>
                        <td><a href="{{ url('admin/kategori/'.$kategori->idkategori) }}">Hapus</a></td>
                        <td><a class="btn btn-warning" href="{{ url('admin/kategori/'.$kategori->id.'/edit') }}">Ubah</a></td>
                        <td>
                            <form action="{{ url('admin/kategori/'.$kategori->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection