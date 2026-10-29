@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Tambah Buku Baru</h3>
                <p class="text-muted small mb-0">Isi formulir berikut untuk menambahkan buku ke sistem perpustakaan.</p>
            </div>
            <a href="{{ route('buku.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <form action="{{ route('buku.store') }}" method="POST">
                    @csrf

                    {{-- TODO:- Buat form input untuk: judul, penulis, penerbit, tahun_terbit, dan stok --}}
                    {{--      - Tampilkan pesan error validasi di bawah setiap input jika ada error (@error) --}}
                    {{--      - Buat tombol submit untuk menyimpan data buku --}}
                    
<div class="mb-3">
    <input type="text" name="judul" placeholder="Judul Buku" class="form-control" value="{{ old('judul') }}">
    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <input type="text" name="penulis" placeholder="Penulis" class="form-control" value="{{ old('penulis') }}">
    @error('penulis') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <input type="text" name="penerbit" placeholder="Penerbit" class="form-control" value="{{ old('penerbit') }}">
    @error('penerbit') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <input type="number" name="tahun_terbit" placeholder="Tahun Terbit" class="form-control" value="{{ old('tahun_terbit') }}">
    @error('tahun_terbit') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<div class="mb-3">
    <input type="number" name="stok" placeholder="Stok" class="form-control" value="{{ old('stok') }}">
    @error('stok') <small class="text-danger">{{ $message }}</small> @enderror
</div>

<button type="submit" class="btn btn-primary">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
