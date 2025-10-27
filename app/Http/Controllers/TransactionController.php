<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function create($id)
    {
        $product = Product::findOrFail($id);
        return view('transaction.create', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'jumlah' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        if ($product->stok < $request->jumlah) {
            return back()->with('error', 'Stok produk tidak mencukupi!');
        }

        $total = $product->harga * $request->jumlah;

        Transaction::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'jumlah' => $request->jumlah,
            'total_harga' => $total,
        ]);

        $product->stok -= $request->jumlah;
        $product->save();

        return redirect('/dashboard')->with('success', 'Pembelian berhasil dilakukan!');
    }

    public function index()
    {
        $transaction = \App\Models\Transaction::where('user_id', Auth::id())
            ->with('product')
            ->latest()
            ->get();

        return view('transaction.index', compact('transaction'));
    }
}
