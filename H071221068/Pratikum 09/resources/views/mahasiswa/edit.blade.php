@extends('mahasiswa.layouts.main')

@section('content') <!-- Memulai section 'content' -->
<!-- START FORM -->
<form action='{{ url('mahasiswa/'. $data->nim) }}' method='post'>
    @csrf
    @method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href="{{ url('mahasiswa') }}" class="btn btn-danger btm-md mb-2"><i class="fa-solid fa-arrow-left fa-lg" style="color: #ffffff;"></i></a>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' id="nama" value="{{ $data->nama }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name='tanggal_lahir' id="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='alamat' id="alamat" value="{{ $data->alamat }}">
            </div>
        </div>    
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' id="jurusan" value="{{ $data->jurusan }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection <!-- Mengakhiri section 'content' -->
