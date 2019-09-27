@extends('layouts.layout')

@section('title', 'Changarro')

@section('content')
<h1 class="text-left">Registrar usuario</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('usuario.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Id_usuario</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_usuario" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido paterno</label>
  <div class="col-10">
    <input class="form-control" type="text" name="apellido_pat" style="width:300px;height:30px">
  </div>
</div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido materno</label>
  <div class="col-10">
    <input class="form-control" type="text" name="apellido_mat" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text" name="fecha_nac" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Numero de celular</label>
  <div class="col-10">
    <input class="form-control" type="text" name="celular" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Genero</label>
  <div class="col-10">
    <input class="form-control" type="text" name="genero" style="width:300px;height:30px">
  </div>
</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection