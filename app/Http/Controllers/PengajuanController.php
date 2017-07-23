<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pengajuan;
use App\Unit;
use Barryvdh\DomPDF\Facade  as PDF;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuans = Pengajuan::all();
        $units = Unit::all();
        return view('pengajuan.index')->with('units',$units)
                                      ->with('pengajuans',$pengajuans);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengajuan.create');
    }

    public function createWithId($id){
        $unit = Unit::where('id',$id)->first();
        return view('pengajuan.create')->with('unit',$unit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengajuan = new Pengajuan;
        $pengajuan->no_pengajuan = $request->get('no_pengajuan');
        $pengajuan->acc = '0';
        $pengajuan->jml_pengajuan = $request->get('jml_pengajuan');
        $pengajuan->id_unit = $request->get('unit_id');
        $pengajuan->save();
        return redirect('unit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $unit = Unit::where('id',$pengajuan->id_unit)->first();
        $barangs = Barang::all();
        return view('pengajuan.show')->with('pengajuan',$pengajuan)
                                     ->with('barangs',$barangs)
                                     ->with('unit',$unit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        return view('pengajuan.edit')->with('pengajuan',$pengajuan);

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
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->no_pengajuan = $request->input('no_pengajuan');
        $pengajuan->acc = $request->input('acc');
        $pengajuan->jml_pengajuan = $request->input('jml_pengajuan');
        $pengajuan->id_unit = $request->input('id_unit');
        $pengajuan->save();
        return redirect('/pengajuan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = Pengajuan::findOrFali($id);
        $pengajuan->delete();
        return redirect('/pengajuan');
    }
}
