<?php

namespace App\Http\Controllers;

use App\Models\Ilce;
use App\Models\Sehir;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(){
        $iller = Sehir::all();
        return view('panel.kayitlar.kayit-olustur',compact('iller'));
    }
    function fetch(){

    }

    function create(){

    }

    function delete(){

    }

    function update(){

    }

    function get(){

    }

    public function getTowns(Request $request){
        $towns = Ilce::where('il_id',$request->il_id)->get();
        return response()->json(['towns' => $towns]);
    }
}
