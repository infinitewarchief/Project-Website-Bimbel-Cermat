<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bis;
class BisController extends Controller
{
    //
    public function tampilTerminal(){
        $bis = bis::all();
        $bis_kecil = $bis->where('tipe_bis', 'kecil')->count();
        $bis_menengah = $bis->where('tipe_bis', 'menengah')->count();
        $bis_besar = $bis->where('tipe_bis', 'besar')->count();
        $total_bis =$bis->count();
        return view('/tampilTerminal', compact('bis', 'bis_kecil', 'bis_menengah', 'bis_besar', 'total_bis'));
    }
}
