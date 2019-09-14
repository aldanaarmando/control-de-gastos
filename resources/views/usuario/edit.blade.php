@extends('layouts.layout')

@section('title', 'CHANGARRO')

@section('content')
<h1 class="text-center">Editar registro</h1>

<form action="{{route('usuario.update',$ingreso->id_usuario)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Id usuario</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_usuario" value="{{$usuario->id_usuario}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_ingreso" value="{{$ingreso->nombre_ingreso}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido paterno</label>
  <div class="col-10">
    <input class="form-control" type="text" name="tipo_ingreso" value="{{$ingreso->tipo_ingreso}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido materno</label>
  <div class="col-10">
    <input class="form-control" type="text" name="total" value="{{$ingreso->total}}">
  </div>
</div>  
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text" name="total" value="{{$ingreso->total}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Numero de celular</label>
  <div class="col-10">
    <input class="form-control" type="number" name="total" value="{{$ingreso->total}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Genero</label>
  <div class="col-10">
    <input class="form-control" type="text" name="total" value="{{$ingreso->total}}">
  </div>
</div>

  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection