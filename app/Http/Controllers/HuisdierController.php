<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class HuisdierController extends Controller
{
    public function index(){
        return view('huisdier.index',[
            'huisdier' => \App\Models\Huisdier::all()
        ]);
    }

    public function show($id){
        return view('huisdier.show',[
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);
    }

    public function create(){
        return view('huisdier.create', [
            'huisdier_soorten' => \App\Models\HuisdierSoorten::all(),
            'images' => \App\Models\Image::all(),
        ]);
    }

    public function store(Request $request, \App\Models\Huisdier $huisdier){
        $huisdier->name = $request->input('name');
        $huisdier->soort = $request->input('soort');
        $huisdier->description = $request->input('description');
        $huisdier->image = $request->input('image');
        $huisdier->age = $request->input('age');

        try{
            $huisdier->save();
            return redirect('/');
        }
        catch(Exception $e){
            return redirect('/huisdier');
        }
    }
}
