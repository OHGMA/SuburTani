<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|string|max:255',
                'deskripsi' => 'required',
                'harga' => 'required|numeric',
                'stok' => 'required|integer',
                'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $path = null;
            if ($request->hasFile('gambar')) {
                $path = $request->file('gambar')->store('produk', 'public');
            }

            Product::create([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'stok' => $request->stok,
                'gambar' => $path,
            ]);

            return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
        }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            if ($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            $path = $request->file('gambar')->store('produk', 'public');
            $product->gambar = $path;
        }

        $product->update($request->except('gambar') + ['gambar' => $product->gambar]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
    }


    public function destroy(Product $product)
    {
        if ($product->gambar) {
            Storage::disk('public')->delete($product->gambar);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus!');
    }
}
