
@extends('layouts.layout')
@section('content')

<h1 class="text-center">Gastos</h1>
<div class="container">
    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id_gasto</th>
      <th scope="col" width="20%">Nombre del gasto</th>
      <th scope="col" width="20%">Tipo de gasto</th>            
      <th scope="col" width="10">Total</th>                                 
     
    </tr>
  </thead>
 <tbody>
      @foreach($gastos as $gasto)
    <tr>
    
      <th scope="row">{{$gasto->id_gasto}}</th>
      <td>{{ $gasto->nombre_gasto}}</td>
      <td>{{ $gasto->tipo_gasto}}</td>
      <td>{{ $gasto->total}}</td>
      <td><a class="btn btn-info" href="{{route('gasto.edit',$gasto->id_gasto)}}">Editar</a></td>
             <form action="{{route('gasto.destroy',$gasto->id_gasto)}}" method="post">
          @csrf
         @method('DELETE')
                 <td><button type="submit" class="btn btn-info" >Eliminar</button></td>
         </form>
@endforeach
    </tr>
  </tbody>
        
</table>
<a class="btn btn-info mb-4"
       href="{{route('gasto.create')}}">Nuevo Gasto</a>
</div>

@endsection
