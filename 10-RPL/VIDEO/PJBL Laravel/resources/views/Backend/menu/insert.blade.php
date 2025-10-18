@extends('Backend.back')

@section('admincontent')
    <div class="row">
    <div class="col-5">
        <form action="{{ url('admin/kategori') }}" method="post">
            @csrf
                {{-- @if (Session::has('pesan'))
                    <div class="alert alert-danger">
                        {{ Session::get('pesan') }}
                    </div>
                @endif --}}
                <div class="mt-3">
                    <label class="form-label" for="">Kategori</label>
                    <input class="form-control" value="{{ old('kategori') }}" type="text" name="kategori" id="">
                     <span class="text-danger">
                        @error('kategori')
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