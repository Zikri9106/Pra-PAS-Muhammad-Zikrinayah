@extends('layouts.main')
@section('content')
    <h1 class="title">Daftar Data Aplikasi Pembuat Game</h1>
    <table class="table table-white table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Rilis</th>
                <th>Deskripsi</th>
                <th>Jumlah Pendownload</th>
                <th>Sistem Support</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($applications as $aplikasi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $aplikasi['nama_aplikasi'] }}</td>
                <td>{{ $aplikasi['tanggal_rilis_aplikasi'] }}</td>
                <td>{{ $aplikasi['deskripsi_aplikasi'] }}</td>
                <td>{{ $aplikasi['jumlah_download'] }}</td>
                <td>{{ $aplikasi['support_sistem'] }}</td>
                <td>
                    <a href="/application/detailapplication/{{ $aplikasi['id_aplikasi'] }}" class="badge bg-info"><i data-feather="eye"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
