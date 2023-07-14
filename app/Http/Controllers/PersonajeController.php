<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonajeRequest;
use App\Models\Personaje;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PersonajeController extends Controller
{
    /**
     * Retorna una vista.
     *
     * @return View
     */
    public function index(): View
    {
        return view('personajes.index');
    }

    /**
     * Agregar un nuevo personaje.
     * @param Request $request
     */
    public function store(Request $request)
    {
        try {
            $personaje = new Personaje();
            $personaje->api_id = $request->id;
            $personaje->nombre = $request->name;
            $personaje->imagen = $request->image;
            $personaje->estatus = $request->status;
            $personaje->especie = $request->species;
            $personaje->url = $request->url;
            $personaje->save();
            return true;
        }catch (\Exception $e){
            return json_encode($e->getMessage());
        }
    }


    public function personajes()
    {
        $personajes = Personaje::all();
        return view('personajes.index',['personajes'=>$personajes]);
    }

    public function detalle($id)
    {
        $personaje = Personaje::find($id);
        return view('personajes.detalle',['personaje'=>$personaje]);
    }


}
