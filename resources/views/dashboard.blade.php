@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2>Selamat Datang di Subur Tani!</h2>
        <p class="text-muted">
            Anda login sebagai <strong>{{ Auth::user()->name }}</strong> ({{ ucfirst(Auth::user()->role) }})
        </p>
    </div>

    <h4 class="mb-3">Daftar Produk Subsidi</h4>

    @if($products->count() > 0)
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        @if($product->gambar)
                            <img src="{{ asset('storage/' . $product->gambar) }}" class="card-img-top" alt="{{ $product->nama }}" style="height: 200px; object-fit: cover;">
                        @else
                            <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->nama }}</h5>
                            <p class="card-text">{{ Str::limit($product->deskripsi, 80) }}</p>
                            <p class="card-text"><strong>Harga:</strong> Rp{{ number_format($product->harga, 0, ',', '.') }}</p>
                            <p class="card-text"><strong>Stok:</strong> {{ $product->stok }}</p>
                            @if(Auth::user()->role === 'user')
                                <a href="{{ route('transaksi.create', $product->id) }}" class="btn btn-success w-100">
                                    Beli Sekarang
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning text-center">
            Belum ada produk yang tersedia.
        </div>
    @endif
</div>
@endsection
