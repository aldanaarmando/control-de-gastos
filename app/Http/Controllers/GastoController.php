<?php

namespace App\Http\Controllers;

use App\gasto;
use Illuminate\Http\Request;
use Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Database\Eloquent;
use App\Http\Controllers\User;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gastos=Gasto::all();
        return view('gasto.index',compact('gastos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gasto.create');

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
            'id_gasto'=>'required',
            'nombre_gasto'=>'required',
            'tipo_gasto'=>'required',
            'total'=>'required',
   
        ]);
       Gasto::create($request->all());
      
           Session::flash('message','Gasto registrado correctamente');
           return redirect()->route('gasto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function show(gasto $gasto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function edit(gasto $gasto)
    {
        return view('gasto.edit',compact ('gasto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gasto $gasto)
    {
        $request->validate([
            'id_gasto'=>'required',
            'nombre_gasto'=>'required',
            'tipo_gasto'=>'required',
            'total'=>'required',
        ]);
           $gasto->update($request->all());
                   Session::flash('message','Registro editado correctamente');
           return redirect()->route('gasto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gasto  $gasto
     * @return \Illuminate\Http\Response
     */
    public function destroy(gasto $gasto)
    {
        //
    }
}
