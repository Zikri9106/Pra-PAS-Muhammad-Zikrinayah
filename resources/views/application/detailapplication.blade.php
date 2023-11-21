@extends('layouts.main')
@section('content')
    <h2>Detail Aplikasi</h2>
    <div class="form">
        <div class="form-group">
            <label for="">Nama Aplikasi</label>
            <input type="text" class="form-control" name="nama_aplikasi" id="nama_aplikasi" value="{{ $application->nama_aplikasi }}"
                disabled>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Tanggal Rilis</label>
            <input type="text" class="form-control" name="tanggal_rilis_aplikasi" id="tanggal_rilis_aplikasi" value="{{ $application->tanggal_rilis_aplikasi }}"
                disabled>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Deskripsi Aplikasi</label>
            <textarea class="form-control" name="deskripsi_aplikasi" id="deskripsi_aplikasi" style="height: 100px; white-space: normal;"
                disabled>{{ $application->deskripsi_aplikasi }}</textarea>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Jumlah Pendownload</label>
            <input type="text" class="form-control" name="jumlah_download" id="jumlah_download" value="{{ $application->jumlah_download }}"
                disabled>
            <br>
            <br>
        </div>
        <div class="form-group">
            <label for="">Sistem Support</label>
            <input type="text" class="form-control" name="jumlah_download" id="jumlah_download" value="{{ $application->support_sistem }}"
                disabled>
            <br>
            <br>
        </div>
    </div>
@endsection
