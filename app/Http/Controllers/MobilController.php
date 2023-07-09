<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobilController extends Controller
{
    function index()
    {
        $dataMobil = [
            [
               'nama_mobil' => 'Hijet',
               'merkMobil' => 'Daihatsu',
               'cc' => '1000cc'
           ]
       
       ];
        return view('mobil.index', compact('dataMobil'));
    }
    function create()
    {
        return view('mobil.create');
    }
    function store(Request $request)
    {
        $dataMobil = [
             [
                'nama_mobil' => 'Hijet',
                'merkMobil' => 'Daihatsu',
                'cc' => '1000cc'
            ]
        
        ];

        $namaMobil = $request->nama_mobil;
        $merkMobil = $request->merek_mobil;
        $cc = $request->cc;

        $arrayMobil = [
            'nama_mobil' => $namaMobil,
            'merkMobil' => $merkMobil,
            'cc' => $cc
        ];
        array_push($dataMobil,$arrayMobil);
        return view('mobil.index', compact('dataMobil'));
    }
}
