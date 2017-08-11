<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    public function __construct(){

        $this->middleware('auth', ['only' => 'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contacto(){
        return view('contacto'); 
    }
    public function reviews(){
return view('reviews'); 
    }

    //Recordar para acceder a una carpeta se coloca el nombre de la carpeta y despues el nombre del archivo
    public function admin(){
        return view('index1');
    }

   
}
