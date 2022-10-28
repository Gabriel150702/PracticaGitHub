@extends('Plantilla')
@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRACTICA 7 GITHUB</title>
</head>
<body>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">INICIO </h5>
    <p class="card-text">FORMULARIO</p>

    <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">NOMBRE</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="NOMBRE(S)">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">APELLIDO</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="APELLLIDO PATERNO Y MATERNO">
</div>
    <a href="practica7" class="btn btn-primary">TABLA</a>
  </div>
</div>


    
</body>
</html>

@stop