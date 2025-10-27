@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3 class="text-center mb-4">Riwayat Pembelian Anda</h3>

    @if($transaction->isEmpty())
        <div class="alert alert-info text-center">
            Anda belum melakukan pembelian.
        </div>
    @else
        <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Tanggal Pembelian</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaction as $index => $t)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $t->product->nama }}</td>
                        <td>{{ $t->jumlah }}</td>
                        <td>Rp{{ number_format($t->total_harga, 0, ',', '.') }}</td>
                        <td>{{ $t->created_at->format('d M Y, H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="text-center mt-4">
        <a href="{{ url('/dashboard') }}" class="btn btn-secondary">Kembali ke Dashboard</a>
    </div>
</div>
@endsection
