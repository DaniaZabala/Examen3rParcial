<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class WebController extends Controller
{
    //
    public function inicio(){
        $publicaciones = Publicacion::all();
        /*echo "<pre>";
        print_r($publicaciones);*/
        return view('index', ['publicaciones' => $publicaciones]);
    }

    public function mortyApi(){
        //Api
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/');
        $datos = json_decode($response->getBody()->getContents(), true);


        //obtener elementos
        
        $personajes = [];
        foreach($datos['results'] as $item){
           $personajes[] = [
                'nombre' => $item['name'],
                'estado' => $item['status'],
                'especie' => $item['species'],
                'genero' => $item['gender'],
                'imagen' => $item['image']
            ];
        }
        /*
        echo "<pre>";
        print_r($elementos);
        echo "</pre>";*/
        return view('api', ['personajes' => $personajes]);
    }
}
