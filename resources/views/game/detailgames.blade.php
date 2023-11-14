@extends('layouts.main')
@section('content')
    <h2>Detail Game</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Gambar Game</label>
            <br>
            <br>
            <img src="{{ $game->gambar_game }}" alt="Game Image" class="img-fluid" width="500">
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Nama Game</label>
            <input type="text" class="form-control" name="nama_game" id="nama_game" value="{{ $game->nama_game }}"
                disabled>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="deskripsi_game">Deskripsi Game</label>
            <textarea class="form-control" name="deskripsi_game" id="deskripsi_game" style="height: 100px; white-space: normal;"
                disabled>{{ $game->deskripsi_game }}</textarea>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Tanggal Rilis Game</label>
            <input type="text" class="form-control" name="rilis_game" id="rilis_game" value="{{ $game->rilis_game }}"
                disabled>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Harga Game di Steam</label>
            <input type="text" class="form-control" name="harga_game" id="harga_game" value="Rp{{ $game->harga_game }}"
                disabled>
            <br>
            <br>
        </div>
    </div>
@endsection
