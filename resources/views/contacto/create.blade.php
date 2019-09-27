@extends('layouts.layout')

@section('title', 'Changarro')

@section('content')
<h1 class="text-left">Contacto</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>
  </head>
<form action="{{route('contacto.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Contacto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="id_contacto" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido</label>
  <div class="col-10">
    <input class="form-control" type="text" name="apellido" style="width:300px;height:30px">
  </div>
</div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="search" name="fecha_nac" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Direccion</label>
  <div class="col-10">
    <input class="form-control" type="search" name="direccion" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Telefono</label>
  <div class="col-10">
    <input class="form-control" type="search" name="telefono" style="width:300px;height:30px">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">E-mail</label>
  <div class="col-10">
    <input class="form-control" type="search" name="email" style="width:300px;height:30px">
  </div>
</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection