@extends('layouts.app')

@section("content")


<div class="container">
    <h3 class="text-center m-3 text-black-50">Menambahkan Data Warga</h3>
    <form action="/warga/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama-Warga" name="nama">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik-Warga" name="nik">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No.KK</label>
            <input type="text" class="form-control" id="no-kk-Warga" name="no_kk">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-select">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="">Laki-Laki</option>
                <option value="">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" rows="10"></textarea>
        </div>

        <input class="btn btn-success" type="submit" name="submit" value="Save">
    </form>
</div>

@endsection