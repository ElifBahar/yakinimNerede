<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Depremzede;
use App\Models\Ilce;
use App\Models\Image;
use App\Models\Sehir;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FormController extends Controller
{
    function index(){
        $iller = Sehir::all();
        return view('panel.kayitlar.kayit-olustur',compact('iller'));
    }
    function fetch(){

    }

    function create(Request $request)
    {
        $request->validate([
            "name" => 'nullable',
            "surname" => 'nullable',
            "tc" => 'nullable|numeric',
            "age" => 'nullable',
            "motherName" => 'nullable',
            "fatherName" => 'nullable',
            "is_alive" => 'nullable|in:0,1',
            "gender" => 'nullable |in :0,1',
            "is_adult" => 'nullable |in :0,1,2',
            "address" => 'nullable',
            "city" => ['numeric', 'required', Rule::exists(Sehir::class, "id")],
            "district" => ['numeric', 'required', Rule::exists(Ilce::class, "id")],
            'image_path' => 'nullable|',
        ]);
        $depremzede = new Depremzede();
        $depremzede->name = $request->name;
        $depremzede->surname = $request->surname;
        $depremzede->tc_no = $request->tc;
        $depremzede->yas = $request->age;
        $depremzede->mother_name = $request->motherName;
        $depremzede->father_name = $request->fatherName;
        $depremzede->type = $request->is_alive;
        $depremzede->gender = $request->gender;
        $depremzede->is_adult = $request->is_adult;
        $depremzede->address = $request->address;
        $depremzede->city_id = $request->city;
        $depremzede->district_id = $request->district;
        $depremzede->date= $request->date;

        if ($depremzede->save()) {
            $i = 0;
            if ($request->hasFile('image_path')) {
                foreach ($request->image_path as $key => $value) {
                    if (isset($value) && array_values(Helper::isImage($value))[0] == 'ok') {
                        $image = new Image();
                        $image->depremzede_id = $depremzede->id;
                        $image->image_name = $request->image_name[$i];
                        $file = $value;
                        $extension = $value->getClientOriginalExtension();
                        $name = time() . $key . '.' . $extension;
                        $file->move('uploads/personPictures', $name);
                        $image->photo_path = 'uploads/personPictures' . '/' . $name;
                        $image->save();
                        $i++;
                    }
                }
            }
            return response()->json(['success' => 'success']);
        }
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
