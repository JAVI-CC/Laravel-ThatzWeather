<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weather;
use Gmopx\LaravelOWM\LaravelOWM;
use App\Http\Requests\StoreCodigoRequest;
use DB;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCodigoRequest $request)
    {

        $ciudades = new Weather();
        $lowm = new LaravelOWM();
        $codigo = $request->input('Codigo');
        
        $current_weather = $lowm->getCurrentWeather("$codigo,es");
        $city = $current_weather->city->name;
        $temperatura = $current_weather->temperature->now;
        $humedad = $current_weather->humidity;
        $descripcion = $current_weather->weather->description;
        $fecha = $current_weather->lastUpdate->format('d-m-Y H:i:s');

        $this->save_database($ciudades, $city, $codigo, $temperatura, $fecha);

        $ciudades_mostrar = Weather::orderBy('temperatura', 'asc')->take(5)->get();

        return view('resultado', compact('ciudades_mostrar', 'temperatura', 'city', 'humedad', 'descripcion', 'fecha'));
    }

     /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save_database($ciudades, $city, $codigo, $temperatura, $fecha)
    {

        $ciudades->ciudad = $city;
        $ciudades->codigo = $codigo;
        $ciudades->temperatura = $temperatura;
        $ciudades->fecha = $fecha;

        $valor_duplicado = DB::table('weathers')->where('codigo', $codigo)->value('ciudad');

        if($valor_duplicado != "null"){
          DB::table('weathers')->where('ciudad', $valor_duplicado)->delete();
        }

        $ciudades->save();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
