<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
        //menampilkan semua data dari model Supplier
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('supplier.create');
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
            'kode_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'npwp' => 'required',
            'jenis' => 'required',
            'nickname' => 'required',
            'termin' => 'required',
           
        ]);

        $supplier = new Supplier();
        $supplier->kode_supplier = $request->kode_supplier;
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->alamat = $request->alamat;
        $supplier->alamat = $request->alamat;
        $supplier->npwp = $request->npwp;
        $supplier->npwp = $request->npwp;
        $supplier->jenis = $request->jenis;
        $supplier->jenis = $request->jenis;
        $supplier->nickname = $request->nickname;
        $supplier->nickname = $request->nickname;
        $supplier->termin = $request->termin;
        $supplier->save();
        return redirect()->route('supplier.index')
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
        $supplier = Supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));

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
            'kode_supplier' => 'required',
            'nama_supplier' => 'required|max:255',
            'alamat' => 'required',
            'npwp' => 'required',
            'jenis' => 'required',
            'nickname' => 'required',
            'termin' => 'required',
          
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->kode_supplier = $request->kode_supplier;
        $supplier->nama_supplier = $request->nama_supplier;
        $supplier->alamat = $request->alamat;
        $supplier->alamat = $request->alamat;
        $supplier->npwp = $request->npwp;
        $supplier->npwp = $request->npwp;
        $supplier->jenis = $request->jenis;
        $supplier->jenis = $request->jenis;
        $supplier->nickname = $request->nickname;
        $supplier->nickname = $request->nickname;
        $supplier->termin = $request->termin;
        $supplier->save();
        return redirect()->route('supplier.index')
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
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();
        return redirect()->route('supplier.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}