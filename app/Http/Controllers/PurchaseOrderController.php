<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model PurchaseOrder
        $purchaseorder = PurchaseOrder::all();
        return view('purchaseorder.index', compact('purchaseorder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('purchaseorder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'no_po' => 'required',
            'tanggal' => 'required',
            'jenis' => 'required',
            'item' => 'required',
            'supplier' => 'required',
            'jumlah_pembelian' => 'required',
            'harga_pembelian' => 'required',
            'termin' => 'required',
           
        ]);

        $purchaseorder = new PurchaseOrder();
        $purchaseorder->no_po = $request->no_po;
        $purchaseorder->tanggal = $request->tanggal;
        $purchaseorder->jenis = $request->jenis;
        $purchaseorder->item = $request->item;
        $purchaseorder->supplier = $request->supplier;
        $purchaseorder->jumlah_pembelian= $request->jumlah_pembelian;
        $purchaseorder->harga_pembelian= $request->harga_pembelian;
        $purchaseorder->termin = $request->termin;
        $purchaseorder->save();
        return redirect()->route('purchaseorder.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $purchaseorder = PurchaseOrder::findOrFail($id);
        return view('purchaseorder.show', compact('purchaseorder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $purchaseorder = PurchaseOrder::findOrFail($id);
        return view('purchaseorder.edit', compact('purchaseorder'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'no_po' => 'required',
            'tanggal' => 'required',
            'jenis' => 'required',
            'item' => 'required',
            'supplier' => 'required',
            'jumlah_pembelian' => 'required',
            'harga_pembelian' => 'required',
            'termin' => 'required',
          
        ]);

        $purchaseorder = PurchaseOrder::findOrFail($id);
        $purchaseorder->no_po = $request->no_po;
        $purchaseorder->tanggal = $request->tanggal;
        $purchaseorder->jenis = $request->jenis;
        $purchaseorder->item = $request->item;
        $purchaseorder->supplier = $request->supplier;
        $purchaseorder->jumlah_pembelian= $request->jumlah_pembelian;
        $purchaseorder->harga_pembelian= $request->harga_pembelian;
        $purchaseorder->termin = $request->termin;
        $purchaseorder->save();
        return redirect()->route('purchaseorder.index')
            ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $purchaseorder = PurchaseOrder::findOrFail($id);
        $purchaseorder->delete();
        return redirect()->route('purchaseorder.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}