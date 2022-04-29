<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Iniciar Sesion</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body class="body ">
    <div class="container-fluid px-0 mx-auto">
    <div class="row  mx-0">
    <div class="col-md-6">
    <img src="{{asset('storage/concredito.jpg')}}">
</div>


    <div class="well col-lg-3 ">
    <p class="inicioParrafo">Login</p>
    <hr>
    <div class="row justify-content-center align-items-center">
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="form-group  col-sm-12 ">
    
     <input  id="email" name="email"  type="text" class="form-control" placeholder="Correo Electronico" >
    </div>
</div>
   <div class="row justify-content-center align-items-center">
    <div class="form-group  col-sm-12">
    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
    </div>
    <div class="form-group  col-sm-12 justify-content-center align-items-center">
    <button type="submit" id="login"  class="btn btn-outline-success btn-lg btn-block spin">Iniciar Sesion</button>
    </div>
    <div class="form-group  col-sm-12 justify-content-center align-items-center">
    <a href="/registroPromotor" class="btn btn-outline-dark  btn-lg btn-block">Registrarse</a>
    </div>
   
</div>
</div>
</form>
</div>


   </div>
<footer>
<hr>
Todos los derechos reservados ConCrédito® Aviso de Privacidad.<br>

CAT Promedio (Costo Anual Total) sin IVA: 132.96% <br>

Tasa de interés variable anual promedio de 83.96 + IVA <br>

Unidad especializada de atención a usuarios.<br>
Despachos externos<br>
</footer>
   <script src="js/funciones.js"></script>
</body>
</html>