<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Http\Requests\StoreAbsensiRequest;
use App\Http\Requests\UpdateAbsensiRequest;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $absensi = Absensi::all(); // Ambil semua data absensi dari model
        return view('absensi.index', compact('absensi')); // Kirimkan data absensi ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAbsensiRequest $request)
    {
        Absensi::create($request->validated());
        return redirect()->route('absensi.index')->with('success', 'Data absensi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi, $id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.show', compact('absensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi, $id)
    {
        $absensi = Absensi::findOrFail($id);
        return view('absensi.edit', compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAbsensiRequest $request, $id)
    {
        try {
            $absensi = Absensi::findOrFail($id);
            $absensi->update($request->all());
            return redirect()->route('absensi.index')->with('success', 'Absensi berhasil diperbarui');
        } catch (\Exception $e) {
            return 'haha error' . $e->getMessage() . $e->getCode();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $absensi = Absensi::findOrFail($id);
            $absensi->delete();
            return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus');
        } catch (\Exception $e) {
            return 'haha error' . $e->getMessage() . $e->getCode();
        }
    }
}
