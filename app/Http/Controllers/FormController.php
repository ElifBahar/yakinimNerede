<?php

namespace App\Http\Controllers;

use App\Models\Ilce;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(){
        return view('panel.form');
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

    public function getCities(){
        $iller = Ilce::get()->unique('il_id')->pluck('il_adi');
    }

    public function getIl(){

    }




}
