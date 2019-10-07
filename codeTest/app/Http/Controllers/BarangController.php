<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Session::get('type') == "Owner") {

            $barang = DB::table('barang')->get();
            return view('dashboard',['barang' => $barang]);

        } elseif (Session::get('type') == "Admin") {

            $barang = DB::table('barang')->select('id', 'nama_barang','stok','harga_jual')->get();
            return view('dashboard',['barang' => $barang]);

        } elseif (Session::get('type') == "Staff"){

            $barang = DB::table('barang')->select('id', 'nama_barang','stok')->get();
            return view('dashboard',['barang' => $barang]);

        } else {
            redirect('/Login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count                = DB::table('barang')->count();
        if ($count <= 10000) {
        $barang               =  new Barang;
        $barang->nama_barang  = $request->namabarang;
        $barang->stok         = $request->stok;
        $barang->harga_jual   = $request->hargajual;
        $barang->harga_beli   = $request->hargabeli;
        $barang->save();
        // return $count;
        return redirect('/Dashboard')->with('status','Data Berhasil Ditambah');
        } else {
            return redirect('/Dashboard');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('updatebarang',compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
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
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        // return $request;
        DB::table('barang')->where('id',$barang->id)->update(['nama_barang'=>$request->namabarang,'stok'=>$request->stok,'harga_jual'=>$request->hargajual,'harga_beli'=>$request->hargabeli]);
        return redirect('/Dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        DB::table('barang')->where('id',$barang->id)->delete();
        return redirect('/Dashboard');
        //
    }
}
