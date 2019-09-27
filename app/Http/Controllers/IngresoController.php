<?php

namespace App\Http\Controllers;

use App\Ingreso;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
use App\Http\Controllers\User;
class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos=Ingreso::all();
        return view('ingreso.index',compact('ingresos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso.create');
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
            'id_ingreso'=>'required',
            'nombre_ingreso'=>'required',
            'tipo_ingreso'=>'required',
            'total'=>'required',
   
        ]);
       Ingreso::create($request->all());
           Session::flash('message','Ingreso registrado correctamente');
           return redirect()->route('ingreso.index');
           Mail::to('armandoaldanainf@gmail.com')->send(new MensajeRecibido);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show(ingreso $ingreso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(ingreso $ingreso)
    {
        return view('ingreso.edit',compact ('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Ingreso $ingreso)
    {
        $request->validate([
            'id_ingreso'=>'required',
            'nombre_ingreso'=>'required',
            'tipo_ingreso'=>'required',
            'total'=>'required',
        ]);
           $ingreso->update($request->all());
                   Session::flash('message','Registro editado correctamente');
           return redirect()->route('ingreso.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingreso $ingreso)
    {
        $ingreso->delete();
        Session::flash('message','Registro eliminado correctamente');
return redirect()->route('ingreso.index');
    }
}
