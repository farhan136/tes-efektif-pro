<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class BarangController extends Controller
{
    public function index()
    {
        // if (request()->ajax()) {
        //     $query = Barang::query();
        //     return DataTables::of($query)
        //     ->addColumn('action', function($item){

        //         return '
        //         <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#hapusBarang{{$item->id}}">
        //             Delete
        //         </button>
        //         ';
        //     })
        //     // ->editColumn('url', function($item){
        //     //     return '<img  style="max-width:150px;" src="'. Storage::url($item->url) .'">';
        //     // })
        //     // ->editColumn('is_featured', function($item){
        //     //     return $item->is_featured ? 'Yes': 'No';
        //     // })
        //     // ->rawColumns(['action', 'url'])->addIndexColumn()->removeColumn('id')
        //     ->make();
        // }

        $barang = Barang::all();
        return view('index', ['barang'=>$barang]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|size:512|mimes:jpg,png',
            'nama' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        dd($errors);
        

        // mengacak kode barang, cek di db apakah nama tersebut sudah ada?
        do {
            $karakter = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);
            $angka = substr(mt_rand(1000, 99999), 0,5);
            $kode = $karakter . '-' . $angka;

            $kodeLama = Barang::select('kode')->where('kode', $kode)->first(); 
        } while($kodeLama !== null);

        dd($kode);

        $foto = $request->file('foto');
        $path = $file->store('public/foto_barang');
        Barang::create([
            'foto'=> $path,
            'nama'=>$request->nama,
            'kode'=>$kode,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'stok'=>$request->stok,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
