<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $data = Biodata::latest()->paginate(10);
        $count = Biodata::count();
        return view('biodata.index', compact('data', 'count'));
    }
    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'alamat' => 'nullable|string|max:255',
        ]);

        Biodata::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('biodata.index')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'alamat' => 'nullable|string|max:255',
        ]);

        $data = Biodata::findOrFail($id);
        $data->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('biodata.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = Biodata::findOrFail($id);
        $data->delete();

        return redirect()->route('biodata.index')->with('success', 'Data berhasil dihapus.');
    }
}
