@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Produk</h2>

    <div class="card shadow-lg">
        <div class="card-body">
            <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control" value="{{ $product->nama }}" required>
                </div>
                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" required>{{ $product->deskripsi }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" value="{{ $product->harga }}" required>
                </div>
                <div class="mb-3">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" value="{{ $product->stok }}" required>
                </div>
                <div class="mb-3">
                    <label>Gambar Produk (opsional)</label><br>
                    @if($product->gambar)
                        <img src="{{ asset('storage/' . $product->gambar) }}" width="100" class="mb-2">
                    @endif
                    <input type="file" name="gambar" class="form-control">
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Produk
                    </a>
                <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
