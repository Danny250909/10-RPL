@extends('front')
@section('content')
<div class="row">
    <div class="col-5">
        <form action="{{ url('/postlogin') }}" method="post">
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
@endsection