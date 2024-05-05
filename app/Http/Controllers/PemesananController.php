<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Http\Requests\StorePemesananRequest;
use App\Http\Requests\UpdatePemesananRequest;
use App\Models\Jenis;
use App\Models\DetailTransaksi;
use Exception;
use Illuminate\Database\QueryException;
use PDOException;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data['jenis'] = Jenis::with(['menu'])->get();
        dd($data['jenis']);

        return view('pemesanan.index')->with($data);
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
    public function store(StorePemesananRequest $request)
    {
        try{
            DB::beginTransaction();

            $last_id = Pemesanan::where('tanggal', date('Y-m-d'))->orderBy('created_at', 'desc')->select('id')->first();

            $notrans = $last_id = null ? date('Ymd').'0001' : date('Ymd').spirintf('%04d', substr($last_id->id,8,4)+1);
            // dd($notrans);
            $insertPemesanan = Pemesanan::create([
                'id' => $notrans,
                'tanggal' => date('Y-m-d'),
                'total_harga' => $request->total,
                'metode_pembayaran' => 'cash',
                'keterangan' => ''
            ]);

            if (!$insertPemesanan->exists) return 'error';

            //input detail transaksi
            foreach ($request->orderedList as $detail){
                //dd($detail)
                $insertDetailTransaksi = DetailTransaksi::create([
                    'transaksi_id' => $notrans,
                    'menu_id' => $detail['menu_id'],
                    'jumlah' => $detail['qty'],
                    'subtotal' => $detail['harga'] * $detail['qty']
                ]);
            }
            DB::commit();
            return response()->json(['status' => true, 'message' =>'Pemesanan Berhasil!']);
        } catch (Exception | QueryException | PDOException $e){
            return response()->json(['status'=>false, 'message'=>'Pemesanan Gagal']);
            DB::rollback();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePemesananRequest $request, Pemesanan $pemesanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pemesanan $pemesanan)
    {
        //
    }
    public function faktur($nofaktur){
        try {
            $data['pemesanan'] = Pemesanan::where('id', $nofaktur)->with(['detailTransaksi' => function
            ($query){
                $query->with('menu');
            }])->first();

            return view('cetak.faktur');
        }catch(Exception | QueryException | PDOException $e){
            return response()->json(['status'=>false, 'message'=>'Pemesanan Gagal']);
        }
    }
}
