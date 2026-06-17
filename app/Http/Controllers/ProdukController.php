<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $data = \App\Models\Produk::latest()->paginate(10);
        $count = \App\Models\Produk::count();
        return view('produk.index', compact('data', 'count'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'jumlah' => 'required|integer',
        ]);

        \App\Models\Produk::create($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk created successfully.');
    }

    public function edit($id)
    {
        $produk = \App\Models\Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'jumlah' => 'required|integer',
        ]);

        $produk = \App\Models\Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk updated successfully.');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk deleted successfully.');
    }
}
