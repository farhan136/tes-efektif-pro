<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::paginate(5);
        return view('index', ['barang'=>$barang]);
    }

    public function create()
    {
        return view('tambah');   
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'foto' => 'required|max:100|mimes:jpg,png',
            'nama' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'max' => 'Ukuran :attribute tidak boleh melebihi :size.',
            'numeric' => ':attribute harus berupa angka.',
            'mimes' => ':attribute harus bertipe salah satu dari :values.',
        ];
        

        // mengacak kode barang, cek di db apakah nama tersebut sudah ada?
        do {
            $karakter = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5);
            $angka = substr(mt_rand(1000, 99999), 0,5);
            $kode = $karakter . '-' . $angka;

            $kodeLama = Barang::select('kode')->where('kode', $kode)->first(); 
        } while($kodeLama !== null);


        $foto = $request->file('foto');
        $path = $foto->store('public/foto_barang');
        Barang::create([
            'foto'=> $path,
            'nama'=>$request->nama,
            'kode'=>$kode,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'stok'=>$request->stok,
        ]);
        return redirect('/')->with('status', 'Data barang berhasil ditambahkan!!');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        
        return view('edit', ['barang'=>$barang]);
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        $validated = $request->validate([
            'nama' => 'required',
            'harga_jual' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);
        $messages = [
            'required' => ':attribute tidak boleh kosong.',
            'numeric' => ':attribute harus berupa angka.',
        ];

        if ($request->file('foto') !== null) {
            $foto = $request->file('foto');
            $path = $foto->store('public/foto_barang');
        }else{
            $path = $barang->foto;
        }
        
        $barang->update([
            'foto'=> $path,
            'nama'=>$request->nama,
            'kode'=>$barang->kode,
            'harga_jual'=>$request->harga_jual,
            'harga_beli'=>$request->harga_beli,
            'stok'=>$request->stok,
        ]);
        return redirect('/')->with('status', 'Data barang berhasil di-update!!');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        return redirect('/')->with('status', 'Data berhasil dihapus!!');
    }

    public function cari(Request $request)
    {
        $barang = Barang::where('nama', 'like', '%'.$request->cari.'%')
            ->orWhere('kode','like', '%'.$request->cari.'%')
            ->orWhere('harga_jual','like', '%'.$request->cari.'%')
            ->orWhere('harga_beli','like', '%'.$request->cari.'%')
            ->orWhere('stok','like', '%'.$request->cari.'%')->paginate(5);
        // dd($request->cari);

        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
        return view('index', ['barang'=>$barang, 'url'=>$url]);
    }
}
