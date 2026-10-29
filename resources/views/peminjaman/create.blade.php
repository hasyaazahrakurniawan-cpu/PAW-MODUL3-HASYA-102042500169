@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h3 class="fw-bold mb-1">Transaksi Peminjaman Buku</h3>
                <p class="text-muted small mb-0">Catat peminjaman buku oleh anggota perpustakaan.</p>
            </div>
            <a href="{{ route('peminjaman.index') }}" class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <form action="{{ route('peminjaman.store') }}" method="POST">
                    @csrf

                    {{-- TODO:- Buat dropdown select 'anggota_id' untuk memilih anggota peminjam --}}
                    {{--      - Buat dropdown select 'buku_id' untuk memilih buku yang akan dipinjam --}}
                    {{--      - Buat input field 'tanggal_pinjam' bertipe date --}}
                    {{--      - Tampilkan pesan error validasi di bawah setiap input jika ada error (@error) --}}
                    {{--      - Buat tombol submit untuk menyimpan transaksi peminjaman --}}
                    
<label>Anggota</label>
<select name="anggota_id" class="form-control" required>
    @foreach($anggota as $a)
        <option value="{{ $a->id }}">{{ $a->nama }}</option>
    @endforeach
</select>
@error('anggota_id') <small class="text-danger">{{ $message }}</small> @enderror

<label>Buku</label>
<select name="buku_id" class="form-control" required>
    @foreach($buku as $b)
        <option value="{{ $b->id }}">{{ $b->judul }}</option>
    @endforeach
</select>
@error('buku_id') <small class="text-danger">{{ $message }}</small> @enderror

<label>Tanggal Pinjam</label>
<input type="date" name="tanggal_pinjam" class="form-control" required>
@error('tanggal_pinjam') <small class="text-danger">{{ $message }}</small> @enderror

<button type="submit" class="btn btn-primary">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
