<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tipo_asiento;
use Illuminate\Http\Request;

class TipoAsientosController extends Controller
{
    public function tipoasientos(){
        $asientos = tipo_asiento::where("estado","=","A")->get();
        return view("tiposAsientos", compact("asientos"));
    }
    public function agregartipoasientos(){
        return view("agregarTipoAsiento");
    }
    public function store(Request $request){
        $nvoAsiento = new tipo_asiento();
        $nvoAsiento->descripcion = $request->input('descripcion');
        $nvoAsiento->precio = $request->input('precio');
        $nvoAsiento->estado = $request->input('estado');
        $nvoAsiento->save();

        return redirect('/tipoAsientos');
    }
}
