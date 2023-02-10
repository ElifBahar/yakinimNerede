<?php

namespace App\Http\Controllers;

use App\Models\Ilce;
use App\Models\Sehir;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(){
        $city = Sehir::all();
        return view('panel.form',compact('city'));
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

    function getDistrict(Request $request){
        $district = Ilce::where("il_id",$request->id)->get();
        return response()->json(['response' => $district]);
    }
}
