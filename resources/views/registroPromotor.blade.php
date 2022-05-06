<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Promotor</title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/registro.css')}}">
</head>
<body class="body">
<div class="container-fluid px-0">
<div class="row mx-0">
<div class="col-md-7">
<img src="{{asset('storage/concredito.jpg')}}" width="700px" height="400px">
</div>
<div class="well col-md-4">
<p class="fuentePromotor">Registro Promotor</p>
<div class="row justify-content-center align-items-center">
  <div class="form-group  col-md-8">
      <label for="nombre_promotor_r">Nombre Promotor</label>
      <input id="nombre_promotor_r" type="text" placeholder="Nombre Promotor" class="form-control" required>
  </div> 
</div>  

  <div class="row justify-content-center align-items-center">
  <div class="form-group  col-md-8">
  <label for="primer_apellido_r">Primer Apellido</label>
      <input id="primer_apellido_r" type="text" placeholder="Primer Apellido" class="form-control" >
  </div>  
</div> 

<div class="row justify-content-center align-items-center">
  <div class="form-group  col-md-8">
      <label for="Segundo_apellido_r">Segundo Apellido</label>
      <input id="segundo_apellido_r" type="text" placeholder="Segundo Apellido" class="form-control"  required>
  </div>  
</div>

<div class="row justify-content-center align-items-center"> 
  <div class="form-group  col-md-8">
       <label for="Email_r">Correo Electronico</label>
      <input id="email_r" type="text" placeholder="Email" class="form-control"  required>
  </div>  
</div>

<div class="row justify-content-center align-items-center">
  <div class="form-group  col-md-8">
  <label for="Password_r">Password</label>
      <input id="password_r" type="password" placeholder="Password" class="form-control" required>
  </div>
</div>

<div class="row justify-content-center align-items-center">
  <div class="form-group  col-md-8">
      <label for="confirmar_Password_r">Confirmar Password</label>
      <input  id="confirmar_password_r" type="password" placeholder="Confirmar Password" class="form-control"  required>
  </div>    
</div>
<div class="row justify-content-center align-items-center">
  <div class="form-group  col-md-8">
    <button id="btnPromotor" class="btn btn-outline-success">Guardar</button>
    <a href="/login" class="btn btn-outline-dark">Cancelar</a>
  </div>    
</div>
</div>
  
</div>
</div>
<script src="js/funciones.js"></script>
</body>
</html>