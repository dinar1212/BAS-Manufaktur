<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Benang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BenangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Benang
        $benang = Benang::all();
        return view('benang.index', compact('benang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('benang.create');
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
            'kode_benang' => 'required',
            'deskripsi' => 'required',
            'satuan' => 'required',
           
        ]);

        $benang = new Benang();
        $benang->kode_benang = $request->kode_benang;
        $benang->deskripsi = $request->deskripsi;
        $benang->satuan = $request->satuan;
        $benang->save();
        return redirect()->route('benang.index')
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
        $benang = Benang::findOrFail($id);
        return view('benang.show', compact('benang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $benang = Benang::findOrFail($id);
        return view('benang.edit', compact('benang'));

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
            'kode_benang' => 'required',
            'deskripsi' => 'required|max:255',
            'satuan' => 'required',
          
        ]);

        $benang = Benang::findOrFail($id);
        $benang->kode_benang = $request->kode_benang;
        $benang->deskripsi = $request->deskripsi;
        $benang->satuan = $request->satuan;
        $benang->save();
        return redirect()->route('benang.index')
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
        $benang = Benang::findOrFail($id);
        $benang->delete();
        return redirect()->route('benang.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}