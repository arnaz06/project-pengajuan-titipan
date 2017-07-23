<?php

namespace App\Http\Controllers;

use App\Pengadaan;
use Illuminate\Http\Request;
use App\Pengajuan;


class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengadaans = Pengadaan::all();
        $pengajuans = Pengajuan::all();
        return view('pengadaan.index')->with('pengadaans',$pengadaans)
                                      ->with('pengajuans',$pengajuans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengajuans = Pengajuan::where('acc','1')->get();
        $pengajuanNama = $pengajuans->pluck('no_pengajuan','id');
        return view('pengadaan.create')->with('pengajuanNama',$pengajuanNama);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengadaan = new Pengadaan;
        $pengadaan->no_pengadaan = $request->get('no_pengadaan');
        $pengadaan->acc = '0';
        $pengadaan->jml_pengadaan = $request->get('jml_pengadaan');
        $pengadaan->id_pengajuan = $request->get('id_pengajuan');
        $pengadaan->save();
        return redirect('pengadaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function printpdf($id){
        $pengajuan = Pengajuan::findOrFail($id);
        $unit = Unit::where('id',$pengajuan->id_unit)->first();
        $barangs = Barang::where('id_pengajuan',$id)->get();
        $view = view('pengajuan.print',compact('pengajuan','unit','barangs'))->render();
        $dompdf = PDF::loadHtml( $view)->setPaper('a4');
        return $dompdf->download('doc.pdf');
        return view('pengajuan.print');
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
        //
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
