@extends('layouts.appLayout')

@section('konten')

<div class="container">
    <a href="/exportpdf" class="btn btn-info mt-4">Export PDF</a>
    <table class="table table-striped table-hover table-bordered mt-4">
        <thead>
            <tr>
                <th>Nisn</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Kota</th>
                <th>Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $user)
            <tr>
                <td>{{ $user->Nisn }}</td>
                <td>{{ $user->Nama }}</td>
                <td>{{ $user->JK }}</td>
                <td>{{ $user->Kelas }}</td>
                <td>{{ $user->Kota }}</td>
                <td>{{ $user->Keahlian }}</td>
                <td>
                    <a href="{{ route('edit-siswa', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('admin.data', $user->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
