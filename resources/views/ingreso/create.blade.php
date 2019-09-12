@extends('layouts.layout')

@section('title', 'Changarro')

@section('content')
<h1 class="text-center">Registrar ingreso</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
  <head>


  </head>
<form action="{{route('ingreso.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">id_ingreso</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_ingreso">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de ingreso</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_ingreso">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Tipo de ingreso</label>
  <div class="col-10">
    <input class="form-control" type="text" name="tipo_ingreso">
  </div>
</div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Total</label>
  <div class="col-10">
    <input class="form-control" type="search" name="total">
  </div>
</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection