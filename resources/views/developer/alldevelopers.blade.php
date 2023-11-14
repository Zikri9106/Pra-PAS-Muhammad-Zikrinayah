@extends('layouts.main')
@section('content')
    <h1 class="title">Daftar Data Perusahaan Game</h1>
    <table class="table table-white table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Tanggal Didirikan</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($developers as $perusahaan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ $perusahaan['gambar_perusahaan'] }}" alt="{{ $perusahaan['nama_perusahaan'] }}" width="300">
                </td>
                <td>{{ $perusahaan['nama_perusahaan'] }}</td>
                <td>{{ $perusahaan['tanggal_didirikan'] }}</td>
                <td>{{ $perusahaan['deskripsi_perusahaan'] }}</td>
                <td>
                    <a href="/developer/detaildevelopers/{{ $perusahaan['id_developer'] }}" class="badge bg-info"><i data-feather="eye"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
