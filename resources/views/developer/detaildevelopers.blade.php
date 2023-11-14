@extends('layouts.main')
@section('content')
    <h2>Detail Developer</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Gambar Perusahaan</label>
            <br>
            <br>
            <img src="{{ $developer->gambar_perusahaan }}" alt="" class="img-fluid" width="500">
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Nama Perusahaan</label>
            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" value="{{ $developer->nama_perusahaan }}"
                disabled>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Tanggal Didirikan Perusahaan</label>
            <input type="text" class="form-control" name="tanggal_didirikan" id="tanggal_didirikan" value="{{ $developer->tanggal_didirikan }}"
                disabled>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Deskripsi Perusahaan</label>
            <textarea class="form-control" name="deskripsi_perusahaan" id="deskripsi_perusahaan" style="height: 100px; white-space: normal;"
                disabled>{{ $developer->deskripsi_perusahaan }}</textarea>
            <br>
            <br>
        </div>
    </div>
@endsection
