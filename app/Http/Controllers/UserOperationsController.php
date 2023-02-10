<?php

namespace App\Http\Controllers;

use App\Models\Depremzede;
use Illuminate\Http\Request;

class UserOperationsController extends Controller
{
    public  function tcAuthentication($tc,$name,$surname,$birthDate){
        $veriler = array(
            "TCKimlikNo" => $tc,
            "Ad" => $name,
            "Soyad" => $surname,
            "DogumYili" => $birthDate,
        );

        $baglan = new \SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");
        $sonuc = $baglan->TCKimlikNoDogrula($veriler);
        return $sonuc->TCKimlikNoDogrulaResult;
    }
    public function checkUser(){
        $result = $this->tcAuthentication($_POST['tc'],$_POST['name'],$_POST['surname'],$_POST['birthDate']);
        if ($result == true) {
            /* @ return gelicek */
        }
        /* @ return gelicek */
    }

    public function getPeople(Request $request){
        switch ($request->method()){
            case 'POST';
            $filterQuery = array();
        $filters = ['city','town','gender'];
        foreach ($filters as $filter){
            if (isset($request->$filter)){
                $filterQuery["$filter"] = $request->$filter;
            }
        }
        $peoples = Depremzede::where($filterQuery)->get();
            return view('homepage',compact('peoples'));

            case 'GET';
            $peoples = Depremzede::all();
            return view('homepage',compact('peoples'));
        }
    }
}
