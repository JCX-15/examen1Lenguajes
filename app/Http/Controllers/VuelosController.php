<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vuelo;
use Illuminate\Http\Request;

class VuelosController extends Controller
{
    public function vuelos(){
        $vuelos = Vuelo::all();
        return view("vuelos",compact("vuelos"));
    }
    public function agregarvuelo(){
        return view("nuevoVuelo");
    }

    public function store(Request $request){
        $vuelo = Vuelo::where("numeroVuelo","=",$request->input('nVuelo'))->get();
        if ($vuelo->isEmpty()){
        $nvoVuelo = new Vuelo();
        $nvoVuelo->numeroVuelo = $request->input('nVuelo');
        $nvoVuelo->origen = $request->input('origen');
        $nvoVuelo->destino = $request->input('destino');
        $nvoVuelo->fechaSalida = $request->input('fecha');
        $nvoVuelo->numeroAsientos = $request->input('nasientos');
        $nvoVuelo->save();
        return redirect('/vuelos');
        }else{
            return redirect('/vuelos');
        }
    }
    public function editarasientos(){
        return view('agregarAsiento');
    }    
    public function agregarasientos($numeroVuelo){
        
    }
}
