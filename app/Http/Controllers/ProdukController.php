<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk', compact('produk'));
    }

    // // FUNCTION UNTUK API
    // public function apiIndex()
    // {
    //     $produk = Produk::all();
    //     return response()->json([
    //         'status' => 'success',
    //         'data' => $produk
    //     ]);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
