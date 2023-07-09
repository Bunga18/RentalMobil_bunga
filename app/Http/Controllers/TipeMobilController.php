<?php

namespace App\Http\Controllers;

use App\Models\TipeMobil;
use Illuminate\Http\Request;

class TipeMobilController extends Controller
{
    function index()
    {
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipe_mobil.index',['tipeMobilData'=> $tipeMobilData]);
    }

    function create()
    {
        
        return view('pages.tipe_mobil.create');
    }

    function store(Request $request)
    {
        $tipeMobilData = new TipeMobil;
        $tipeMobilData->tipe = $request->tipe;
        $tipeMobilData->save();
    
        return redirect()->to('/tipe_mobil')->with('success','data tipe berhasil ditambahkan');
    }
    function formEdit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipe_mobil.form_edit',['tipeMobilData'=> $tipeMobilData]);
    }
    function update($id, Request $request)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->tipe = $request->tipe;
        $tipeMobilData->save();

        return redirect()->to('/tipe_mobil')->with('success', 'Data tipe mobil sukses diubah');
        
    }
    
    function delete($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->delete();
        return redirect()->to('/tipe_mobil')->with('success', 'Data merk sukses dihapus');
    }
}
