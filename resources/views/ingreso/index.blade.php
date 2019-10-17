
@extends('layouts.layout')
@section('content')

<h1 class="text-center">Ingresos de dinero</h1>
<div class="container">


    <table class="table">
  <thead class="thead-light">
    <tr>
    
      <th scope="col" width="10%">Id_ingreso</th>
      <th scope="col" width="20%">Nombre del ingreso</th>
      <th scope="col" width="20%">Tipo de ingreso</th>            
      <th scope="col" width="10">Total</th>                                 
     
    </tr>
  </thead>
 <tbody>
      @foreach($ingresos as $ingreso)
    <tr>
    
      <th scope="row">{{$ingreso->id_ingreso}}</th>
      <td>{{ $ingreso->nombre_ingreso}}</td>
      <td>{{ $ingreso->tipo_ingreso}}</td>
      <td>{{ $ingreso->total}}</td>
      <td><a class="btn btn-info" href="{{route('ingreso.edit',$ingreso->id_ingreso)}}">Editar</a></td>
             <form action="{{route('ingreso.destroy',$ingreso->id_ingreso)}}" method="post">
          @csrf
         @method('DELETE')
                 <td><button type="submit" class="btn btn-info" >Eliminar</button></td>
         </form>
</tr>
@endforeach
    </tr>
  </tbody>
        
</table>
<a class="btn btn-info mb-4"
       href="{{route('ingreso.create')}}">Nuevo Ingreso</a>
</div>

@endsection
