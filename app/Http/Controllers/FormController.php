<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\Depremzede;
use App\Models\Ilce;
use App\Models\Image;
use App\Models\Sehir;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class FormController extends Controller
{
    function index(){
        $iller = Sehir::all();
        return view('panel.kayitlar.kayit-olustur',compact('iller'));
    }

    function list(){
        return view('panel.kayitlar.kayit-listesi');
    }
    function fetch(){
        $depremzede = Depremzede::where('is_deleted',0)->get();

        return DataTables::of($depremzede)
//            ->addColumn('update', function ($data) {
//                if (auth()->user()->can('update slider')) {
//                    return "<button onclick='updateSlider(" . $data->id . ")' class='btn btn-warning'>" . trans('announcements/index.update') . "</button>";
//                }
//            })
            ->editColumn('name_surname', function ($row) {
                return $row->name . " " .$row->surname;
            })
            ->editColumn('parent_name', function ($row) {
                return $row->mother_name . "-" .$row->father_name;
            })
            ->editColumn('type', function ($row) {
                if ($row->type==0){
                    return "Ölü";
                }elseif ($row->type == 1){
                    return "Yaşıyor";
                }
            })
            ->editColumn('gender', function ($row) {
                if ($row->gender==0){
                    return "Kadın";
                }elseif ($row->gender == 1){
                    return "Erkek";
                }elseif ($row->gender == null){
                    return 'Belirlenemedi';
                }
            })
            ->editColumn('is_adult', function ($row) {
                if ($row->is_adult==0){
                    return "Yetişkin" . "-" .$row->yas;
                }elseif ($row->is_adult == 1){
                    return "Çocuk". "-" .$row->yas;
                }elseif ($row->is_adult == 2){
                    return "Bebek". "-" .$row->yas;
                }
            })
            ->editColumn('city_district', function ($row) {
               $sehir = Sehir::where('id',$row->city_id)->first()->il_adi;
               $ilce = Ilce::where('id',$row->district_id)->first()->ilce_adi;
               return $sehir. "-" . $ilce;
            })
            ->addColumn('delete', function ($data) {
                return "<button onclick='deleteDepremzede(" . $data->id . ")' class='btn btn-danger'>Sil</button>";
            })
            ->addColumn('update', function ($data) {
                return '<a href="' . route('panel.form.update_view', $data->id) . '" class="btn btn-warning">Güncelle</a>';
            })
            ->addColumn('detail', function ($data) {
                return '<a href="' . route('panel.form.detail', $data->id) . '" class="btn btn-info">Detay</a>';
            })
            ->rawColumns(['name_surname','parent_name','type', 'gender', 'is_adult', 'city_district','delete','update','detail'])->make();
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
            "recognizability" => 'required |in :0,1',
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
        $depremzede->recognizability = $request->recognizability;
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


    function delete(Request $request){
        $request->validate(['id' => 'distinct']);
        Depremzede::where('id',$request->id)->update([
            'is_deleted' => 1,
        ]);
        return response()->json(['Success' => 'success']);
    }

    function deleteImage(Request $request){
        $request->validate(['id' => 'distinct']);
        Image::where('id',$request->id)->update([
            'is_deleted' => 1,
        ]);
        return response()->json(['Success' => 'success']);
    }

    function update(Request $request){
        $request->validate([
            "id" => 'required',
            "name" => 'nullable',
            "surname" => 'nullable',
            "tc" => 'nullable|numeric',
            "age" => 'nullable',
            "motherName" => 'nullable',
            "fatherName" => 'nullable',
            "is_alive" => 'nullable|in:0,1',
            "gender" => 'nullable |in :0,1',
            "recognizability" => 'required |in :0,1',
            "is_adult" => 'nullable |in :0,1,2',
            "address" => 'nullable',
            "city" => ['numeric', 'required', Rule::exists(Sehir::class, "id")],
            "district" => ['numeric', 'required', Rule::exists(Ilce::class, "id")],
            'image_path' => 'nullable|',
        ]);
        $depremzede = Depremzede::where('id',$request->id)->first();
        if ($request->recognizability == 1){
            $depremzede->name = $request->name;
            $depremzede->surname = $request->surname;
            $depremzede->tc_no = $request->tc;
            $depremzede->yas = $request->age;
            $depremzede->mother_name = $request->motherName;
            $depremzede->father_name = $request->fatherName;
        }else{
            $depremzede->name = null;
            $depremzede->surname = null;
            $depremzede->tc_no = null;
            $depremzede->yas = null;
            $depremzede->mother_name = null;
            $depremzede->father_name = null;
        }
        $depremzede->type = $request->is_alive;
        $depremzede->gender = $request->gender;
        $depremzede->is_adult = $request->is_adult;
        $depremzede->address = $request->address;
        $depremzede->city_id = $request->city;
        $depremzede->district_id = $request->district;
        $depremzede->recognizability = $request->recognizability;
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

    function get(){

    }

    function update_view($id){
        $iller = Sehir::all();
        $depremzede = Depremzede::find($id);
        $images = Image::where('depremzede_id',$id)->where('is_deleted',0)->get();
        return view('panel.kayitlar.kayit-guncelle',compact('depremzede','iller','images'));
    }

    function detail($id){
        $depremzede = Depremzede::find($id);
        $images = Image::where('depremzede_id',$id)->where('is_deleted',0)->get();
        return view('panel.kayitlar.kayit-detay',compact('depremzede','images'));
}
    public function getTowns(Request $request){
        $towns = Ilce::where('il_id',$request->il_id)->get();
        return response()->json(['towns' => $towns]);
    }
}
