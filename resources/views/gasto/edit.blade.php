@extends('layouts.layout')

@section('title', 'CHANGARRO')

@section('content')
<h1 class="text-center">Editar registro</h1>

<form action="{{route('gasto.update',$gasto->id_gasto)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">ID Gasto</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_gasto" value="{{$gasto->id_gasto}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de gasto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_gasto" value="{{$gasto->nombre_gasto}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Tipo de gasto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="tipo_gasto" value="{{$gasto->tipo_gasto}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Total</label>
  <div class="col-10">
    <input class="form-control" type="text" name="total" value="{{$gasto->total}}">
  </div>
</div>  
  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection