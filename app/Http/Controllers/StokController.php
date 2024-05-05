<?php

namespace App\Http\Controllers;

use Exception;
use PDOException;
use App\Models\Stok;
use App\Models\Menu;
use App\Http\Requests\StokRequest;
use Illuminate\Database\QueryException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\StokExport;
use App\Imports\StokImport;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            // Menampilkan data stok dengan eager loading untuk menu   
            $data['stok'] = Stok::with('menu')->orderBy('created_at', 'DESC')->get();
            $data['menu'] = Menu::get();

            return view('stok.index', ['title' => 'Stok'])->with($data);
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
    public function store(StokRequest $request)
    {
        try {

            Stok::create($request->all()); //query input ke table
            return redirect('stok')->with('success', 'Data Stok berhasil!');
        } catch (QueryException | Exception | PDOException $error) {

            // $this->failResponse($error->getMessage(), $error->getCode());
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Stok $stok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stok $stok)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StokRequest $request, Stok $stok)
    {
        try {
            // Validasi data yang dikirimkan
            $validatedData = $request->validated();
    
            // Update data stok
            $stok->update($validatedData);
    
            return redirect('stok')->with('success', 'Update data berhasil!');
        } catch (\Exception $error) {
            // Tangani kesalahan jika terjadi
            return 'haha error' . $error->getMessage() . $error->getCode();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stok $stok)
    {
        try {
            $stok->delete();
            return redirect('stok')->with(
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

        return Excel::download(new StokExport, $date. '_stok.xlsx');
    }

    public function importData()
    {
        try {
            Excel::import(new StokImport, request()->file('import'));
        
            return redirect('stok')->with('success', 'Import Data berhasil!');
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect('stok')->with('error', 'Terjadi kesalahan saat mengimpor data: ' . $e->getMessage());
        }
    }
}
