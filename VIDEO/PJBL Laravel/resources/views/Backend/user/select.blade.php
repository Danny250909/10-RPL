@extends('Backend.back')

@section('admincontent')
<div>
    <h2>Data User</h2>
</div>
    <div>
        <div class="mb-3">
            <a class="btn btn-primary" href="{{ url('admin/user/create') }}">Tambah user</a>
            @if (Session()->has('pesan'))
                <p class="alert alert-danger">{{ session()->get('pesan') }}</p>
            @endif
        </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Ubah</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                        @php
                            $no = 1;
                        @endphp
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->level }}</td>
                                <td><a href="{{ url('admin/user/'.$user->id.'/edit') }}">Ubah Password</a></td>
                                <td><a href="{{ url('admin/user/'.$user->id) }}">Hapus</a></td>

                                {{-- <td><a class="btn btn-warning" href="{{ url('admin/user/'.$user->id.'/edit') }}">Ubah</a></td> --}}
                                {{-- <td>
                                    <form action="{{ url('admin/user/'.$user->id) }}" method="post">
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
@endsection