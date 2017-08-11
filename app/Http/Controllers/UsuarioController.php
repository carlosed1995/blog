<?php

namespace App\Http\Controllers;
use App\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\User;
use Session;
use Redirect;
use Illuminate\Http\Requests;

class UsuarioController extends Controller
{


       public function __construct(){

        //$this->middleware('auth');
       // $this->middleware('admin', ['only' => ['create', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users = User::paginate(5); //all trae todos los elementos que contenga la tabla
        return view('usuario.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('usuario.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create(
        [  'name' => $request['name'],
         'email'  => $request['email'], 
         'apellido'  => $request['apellido'], 
         'telefono'  => $request['telefono'], 
         'password'  => $request['contrasena'], ]
            );
    // bcrypt(sirve para encriptar)
    return   redirect('/usuario')->with('message', 'Usuario Creado Exitosamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, UserUpdateRequest $request)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
    Session::flash('message', 'usuario editado correctamente');
        return Redirect::to('/usuario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::destroy($id);
        Session::flash('message', 'Se elimino el Usuario correctamente');
        return Redirect::to('/usuario');

    }
}
