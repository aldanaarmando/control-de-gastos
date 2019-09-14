<?php
namespace App\Http\Controllers;
use App\usuario;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
use App\Http\Controllers\User;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::all();
        return view('usuario.index',compact('usuarios'));
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
    public function store(Request $request)
    {
        $request->validate([
            'id_usuario'=>'required',
            'nombre'=>'required',
            'apellido_pat'=>'required',
            'apellido_mat'=>'required',
            'fecha_nac'=>'required',
            'celular'=>'required',
            'genero'=>'required',
        ]);
       Usuario::create($request->all());
      
           Session::flash('message','Usuario registrado correctamente');
           return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        return view('usuario.edit',compact ('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuario $usuario)
    {
        $request->validate([
            'id_usuario'=>'required',
            'nombre'=>'required',
            'apellido_pat'=>'required',
            'apellido_mat'=>'required',
            'fecha_nac'=>'required',
            'celular'=>'required',
            'genero'=>'required',
        ]);
           $usuario->update($request->all());
                   Session::flash('message','Registro editado correctamente');
           return redirect()->route('usuario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
