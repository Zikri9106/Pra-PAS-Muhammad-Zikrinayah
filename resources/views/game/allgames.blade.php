@extends('layouts.main')
@section('content')
    <h1 class="title">Daftar Data Game</h1>
    <table class="table table-white table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Tanggal Rilis</th>
                <th>Harga Game</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($games as $permainan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ $permainan['gambar_game'] }}" alt="{{ $permainan['nama_game'] }}" width="300">
                </td>
                <td>{{ $permainan['nama_game'] }}</td>
                <td>{{ $permainan['deskripsi_game'] }}</td>
                <td>{{ $permainan['rilis_game'] }}</td>
                <td>Rp{{ $permainan['harga_game']}}</td>
                <td>
                    <a href="/game/detailgames/{{ $permainan['id_game'] }}" class="badge bg-info"><i data-feather="eye"></i></a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
