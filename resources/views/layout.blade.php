<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>CHANGARRO</title>
    <link rel="stylesheet" href="/css/estilos.css">
      <link href="fonts/styles.css" rel="stylesheet">

  </head>
  <body>
    <header>
      <div class="contenedor">
        <div id="marca">
          <h1><span class="resaltado">CHANGARRO</span></h1>
        </div>
        <nav>
          <ul>
            <li class="actual"><a href="/inicio">INICIO</a></li>
            <li><a href="{{route('ingreso.create')}}">INGRESOS</a></li>
            <li><a href="{{route('gasto.create')}}">GASTOS</a></li>
              <li><a href="/contacto">CONTACTO</a></li>
 
          </ul>
        </nav>
      </div>
    </header>

@yield('content')
</body>
</html