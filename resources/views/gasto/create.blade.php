
<form action="{{route('gasto.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Id_gasto</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_gasto">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre de gasto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="nombre_gasto">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Tipo de gasto</label>
  <div class="col-10">
    <input class="form-control" type="text" name="tipo_gasto">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Precio unitario</label>
  <div class="col-10">
    <input class="form-control" type="text" name="precio_unitario">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Cantidad</label>
  <div class="col-10">
    <input class="form-control" type="text" name="cantidad">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Total</label>
  <div class="col-10">
    <input class="form-control" type="text" name="total">
  </div>
</div>
  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
