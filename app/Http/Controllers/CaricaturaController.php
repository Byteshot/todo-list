<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class CaricaturaController extends Controller
{
    /**
     * Index View   .
     *
     * @return Renderable
     */
    public function index()
    {
        return view('caricatura.index');
    }

    /**
     * Obtener información de api Rick and Morty.
     *
     * @return bool|string
     */
    public function registrar($pagina)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://rickandmortyapi.com/api/character/?page=$pagina",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        $personajes = $response['results'];

        foreach ($personajes as $personajeApi) {
                $personaje = new Personaje();
                $personaje->api_id = $personajeApi['id'];
                $personaje->nombre = $personajeApi['name'];
                $personaje->imagen = $personajeApi['image'];
                $personaje->estatus = $personajeApi['status'];
                $personaje->especie = $personajeApi['species'];
                $personaje->url = $personajeApi['url'];
                $personaje->save();
        }
        //return $response;
    }
}
