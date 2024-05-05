<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMejaRequest;
use App\Http\Requests\UpdateMejaRequest;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MejaExport;
use App\Imports\MejaImport;

class MejaController extends Controller
{
    /**
     * Menampilkan daftar meja.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meja = Meja::all();
        return view('meja.index', compact('meja'));
    }
  
    /**
     * Menampilkan form untuk membuat meja baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Menyimpan meja yang baru dibuat ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMejaRequest $request)
    {
        try {

            Meja::create($request->all()); //query input ke table
            return redirect('meja')->with('success', 'Data member berhasil ditambahkan!');
        } catch (QueryException | Exception | PDOException $error) {

            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Menampilkan detail dari sebuah meja.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meja = Meja::findOrFail($id);
        return view('meja.show', compact('meja'));
    }

    /**
     * Menampilkan form untuk mengedit sebuah meja.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meja = Meja::findOrFail($id);
        return view('meja.edit', compact('meja'));
    }

    /**
     * Memperbarui meja yang ada di dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMejaRequest $request, $id)
    {
        try {
            $meja = Meja::findOrFail($id);
            $meja->update($request->all());
            return redirect()->route('meja.index')->with('success', 'Meja berhasil diperbarui');
        } catch (\Exception $e) {
            return 'haha error' . $e->getMessage() . $e->getCode();
        }
    }

    /**
     * Menghapus meja dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meja = Meja::findOrFail($id);
        $meja->delete();
        return redirect()->route('meja.index')->with('success', 'Meja berhasil dihapus');
    }
    public function exportData()
    {
        $date = date('Y-m-d');

        return Excel::download(new MejaExport, $date. '_meja.xlsx');
    }

    public function importData()
{
    try {
        // Mengimpor data menggunakan Excel::import
        Excel::import(new MejaImport, request()->file('import'));
        
        // Redirect dengan pesan sukses jika impor berhasil
        return redirect('meja')->with('success', 'Import Data berhasil!');
    } catch (\Exception $e) {
        // Tangani kesalahan jika terjadi
        return redirect('meja')->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
    }
}

}
