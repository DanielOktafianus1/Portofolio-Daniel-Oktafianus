@extends('admin.layouts.app')
@section('title', 'EDIT PROFILLE')
@section('content')
    <div class="card">

        <div class="card-body">
            <form action="{{ route('users.update', $edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="">Foto</label>
                    <input value="{{ $edit->gambar }}" type="file" name="gambar" placeholder="Masukkan Nama Lengkap Anda"
                        class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="">Nama</label>
                    <input value="{{ $edit->name }}" type="text" name="name"
                        placeholder="Masukkan Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input value="{{ $edit->email }}" type="email" name="email" placeholder="Masukkan Email Anda"
                        class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Description</label>
                    <input type="text" name="deskripsi" placeholder="Masukkan Deskripsi Anda" class="form-control"
                        value="{{ $edit->deskripsi }}">
                </div>
                <div class="form-group mb-3">
                    <label for="">Password* Boleh Kosong jika tidak diganti</label>
                    <input type="password" name="password" placeholder="Masukkan Password Anda" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
