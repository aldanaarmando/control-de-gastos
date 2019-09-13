@extends('layouts.layout')

@section('title', 'CHANGARRO')

@section('content')
<h1 class="text-center">Editar registro</h1>

<form action="{{route('ingreso.update',$ingreso->id_ingreso)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_ingreso" value="{{$ingreso->id_ingreso}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_ingreso" value="{{$ingreso->nombre_ingreso}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido</label>
  <div class="col-10">
    <input class="form-control" type="text" name="tipo_ingreso" value="{{$ingreso->tipo_ingreso}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text" name="total" value="{{$ingreso->total}}">
  </div>
</div>  
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection