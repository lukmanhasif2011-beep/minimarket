<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $data = Obat::latest()->paginate(10);
        $count = Obat::count();
        return view('obat.index', compact('data', 'count'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'supplayer' => 'nullable|string|max:255',
            'jumlah' => 'required|integer',
            'tanggal_exp' => 'nullable|date',
        ]);

        Obat::create($request->all());

        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produk = Obat::findOrFail($id);
        return view('obat.edit', compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'supplayer' => 'nullable|string|max:255',
            'jumlah' => 'required|integer',
            'tanggal_exp' => 'nullable|date',
        ]);

        $produk = Obat::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $produk = Obat::findOrFail($id);
        $produk->delete();

        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
