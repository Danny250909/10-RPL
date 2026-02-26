@extends('Backend.back')

@section('admincontent')
<div>
    <h1>Insert Data</h1>
</div>
    <div class="row">
        <div class="col-5">
            <form action="{{ url('admin/menu') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <select class="form-select" name="idkategori">
                        {{-- <option value="">--> Pilih Kategori <--</option> --}}
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->idkategori }}">{{ $kategori->kategori }}</option>
                        @endforeach
                    </select>
                        <div class="mt-3">
                            <label class="form-label" for="">Menu</label>
                            <input class="form-control" type="text" name="menu" id="">
                            <span class="text-danger">
                                @error('menu')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="">Deskripsi</label>
                            <input class="form-control" type="text" name="deskripsi" id="">
                            <span class="text-danger">
                                @error('deskripsi')
                                    {{ $message }}
                                @enderror
                            </span>
                        <div class="mt-3">
                            <label class="form-label" for="">Harga</label>
                            <input class="form-control" type="number" name="harga" id="">
                            <span class="text-danger">
                                @error('harga')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="">Gambar</label>
                            <input class="form-control" type="text" name="gambar" id="">
                            <span class="text-danger">
                                @error('gambar')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        {{-- <div class="mt-3">
                            <label class="form-label" for="">Password</label>
                            <input class="form-control"  type="password" name="password" id="">
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div> --}}
                        <div class="mt-5">
                            {{-- <label for="">Password</label> --}}
                            {{-- <input type="submit" name="submit" value="Register" id=""> --}}
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
            </form>
        </div>
    </div>
@endsection