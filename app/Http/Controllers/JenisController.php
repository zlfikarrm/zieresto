<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Jenis;
use App\Http\Requests\JenisRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\JenisExport;
use App\Imports\JenisImport;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            // Menampilkan data jenis dengan eager loading untuk kategori   
            $data['jenis'] = Jenis::orderBy('created_at', 'DESC')->get();
            

            return view('jenis.index', ['title' => 'Jenis'])->with($data);
        } catch (QueryException | Exception | PDOException $error) {
            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
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
    public function store(JenisRequest $request)
    {
        try {

            Jenis::create($request->all()); //query input ke table
            return redirect('jenis')->with('success', 'Data jenis berhasil ditambahkan!');
        } catch (QueryException | Exception | PDOException $error) {

            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'm error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jenis $jenis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JenisRequest $request, Jenis $jenis, $id)
    {
        try {
            // Validasi data yang dikirimkan
            $validatedData = $request->validated();
    
            // Update data kategori
            Jenis::find($id)->update($validatedData);
    
            return redirect('jenis')->with('success', 'Update data berhasil!');
        } catch (Exception $error) {
            // Tangani kesalahan jika terjadi
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jenis $jenis, $id)
    {
        try {
            Jenis::find($id)->delete();
            return redirect('jenis')->with(
                'success',
                'Data berhasil dihapus!'
            );
        } catch (QueryException | Exception | PDOException $error) {
            $this->failResponse($error->getMessage() . $error->getCode());
        }
    }
    public function exportData()
    {
        $date = date('Y-m-d');

        return Excel::download(new JenisExport, $date. '_jenis.xlsx');
    }

    public function importData()
    {
        try {
            Excel::import(new JenisImport, request()->file('import'));
        
            return redirect('jenis')->with('success', 'Import Data berhasil!');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect('jenis')->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }
}
