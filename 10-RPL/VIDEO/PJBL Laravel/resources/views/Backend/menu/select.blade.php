@extends('Backend.back')

@section('admincontent')
        <div>
            <h2>menu</h2>
        </div>
            <div class="mb-3">
                <a class="btn btn-primary" href="{{ url('admin/menu/create') }}">Tambah Menu</a>
            </div>
                <div class="row mt-4">
                    <div class="col-5 mb-3">
                        <form action="{{ url('admin/select') }}" method="get">
                            <select class="form-select" name="idkategori" onchange="this.form.submit()">
                                <option value="">--> Pilih Kategori <--</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                                @endforeach
                            </select>
                            <input type="submit" value="Filter" id="">
                        </form>
                    </div>
                </div>
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Menu</th>
                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Harga</th>
                                    <th>Ubah</th>
                                    <th>Hapus</th>
                                </tr>
                            </thead>
                                @php
                                    $no = 1;
                                @endphp
                            <tbody>
                                @foreach ($menus as $menu)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $menu->kategori }}</td>
                                        <td>{{ $menu->menu }}</td>
                                        <td>{{ $menu->deskripsi }}</td>
                                        <td><img width="75px" src="{{ asset('gambar/'.$menu->gambar) }}" alt=""></td>
                                        <td>{{ $menu->harga }}</td>
                                        <td><a href="{{ url('admin/menu/'.$menu->idmenu.'/edit') }}">Ubah</a></td>
                                        <td><a href="{{ url('admin/menu/'.$menu->idmenu) }}">Hapus</a></td>
                                        <td><a class="btn btn-warning" href="{{ url('admin/menu/'.$menu->id.'/edit') }}">Ubah</a></td>
                                        <td>
                                            <form action="{{ url('admin/menu/'.$menu->id) }}" method="post">
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
                <div class="d-flex justify-content-center mt-3">
                    {{ $menus->withQueryString()->links() }}
                </div>
@endsection