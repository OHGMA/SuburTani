@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Form Pembelian Pupuk</h3>

    <div class="card mt-4">
        <div class="card-body">
            <h5>{{ $product->nama }}</h5>
            <p>{{ $product->deskripsi }}</p>
            <p><strong>Harga:</strong> Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Stok:</strong> {{ $product->stok }}</p>

            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <div class="form-group mb-3">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" required>
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali ke Daftar Produk
                    </a>
                <button type="submit" class="btn btn-success">Konfirmasi Pembelian</button>
            </form>
        </div>
    </div>
</div>
@endsection
