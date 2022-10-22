<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Order::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Order::create([
            'idkendaraan'   => $request->idkendaraan,
            'jumlah_penjualan'   => $request->jumlah_penjualan,
            'harga'   => $request->harga,
            'harga_total' => $request->harga * $request->jumlah_penjualan
            
        ]);
        
        return response()->json($post);
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        //
        $find = Order::where('idkendaraan', $order)->sum('harga_total');
        return response()->json($find);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
