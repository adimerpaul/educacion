<?php

namespace App\Http\Controllers;

use App\Models\Poa;
use Illuminate\Http\Request;

class PoaController extends Controller{
    function index(Request $request){
        $user = $request->user();
        if ($user->id == 1) {
            return Poa::orderBy('id', 'desc')->with('area', 'periodo', 'user')->get();
        }else{
            return Poa::where('area_id', $user->area_id)->with('area', 'periodo', 'user')->orderBy('id', 'desc')->get();
        }
    }
    function store(Request $request){
        $user = $request->user();
        $poa = new Poa();
        $poa->area_id = $user->area_id;
        $poa->periodo_id = $request->periodo_id;
        $poa->user_id = $user->id;
        $poa->fecha = date('Y-m-d H:i:s');
        $poa->save();
    }
    function show(Poa $poa){
        $poa = Poa::with('area', 'periodo', 'user', 'detalles.material')->find($poa->id);
        return $poa;
    }
    function update(Request $request, Poa $poa){
        $poa->update($request->all());
        return $poa;
    }
    function destroy(Poa $poa){
        $poa->delete();
        return $poa;
    }
}
