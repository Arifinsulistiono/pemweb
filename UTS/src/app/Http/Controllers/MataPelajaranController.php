<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataPelajaran;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mapel = MataPelajaran::paginate(10);
        return view('mata_pelajaran.index', compact('mapel'));
    }

    public function create()
    {
        return view('mata_pelajaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:100',
            'tingkat' => 'nullable|string|max:20',
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('mata-pelajaran.index')->with('success', 'Mata pelajaran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataPelajaran $mata_pelajaran)
    {
        return view('mata_pelajaran.edit', compact('mata_pelajaran'));
    }

    public function update(Request $request, MataPelajaran $mata_pelajaran)
    {
        $request->validate([
            'nama_mapel' => 'required|string|max:100',
            'tingkat' => 'nullable|string|max:20',
        ]);

        $mata_pelajaran->update($request->all());

        return redirect()->route('mata-pelajaran.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(MataPelajaran $mata_pelajaran)
    {
        $mata_pelajaran->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}
