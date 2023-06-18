@extends('layouts.appLayout')
@section('konten')



<div class="container">
    <table class="table table-scriped table-hover table-bordered mt-4">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Keunggulan</th>
            <th>About</th>
            <th>Foto</th>
            <th>Jurusan</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($perusahaan as $user)
        <tr>
            <td>{{$user->nama}}</td>
            <td>{{$user->about}}</td>
            <td>{{$user->keunggulan}}</td>
            
            <td>{{$user->photo}}</td>
            <td>{{$user->jurusan}}</td>
            <td>{{$user->alamat}}</td>
            <!-- Other table columns -->
            <td>
                <a href="{{ route('edit-perusahaan', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('admin-dataperusahaan', $user->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-danger btn-sm" type="submit">Hapus</button>
                </form>
                
            </td>
    </tr>

        </tr>

        @endforeach
    </tbody>
    </table>
</div>
@endsection