
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/estilos_login.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-color: #53585C;">
    <form class="form-signin" action="validar.php" method="post">
  <img class="mb-4" src="img/logo.png" alt="" width="90" height="90">
  <h1 class="h3 mb-3 font-weight-normal" style="color: #fff;">Security Admin</h1>
  <label for="inputUsuario" class="sr-only" >Usuario</label>
  <input type="usuario" id="inputUsuario" class="form-control" placeholder="Usuario" name="user" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="pass" required>
  <div class="checkbox mb-3">
    <label style="color: #fff;">
      <input type="checkbox" value="remember-me"> Recordar
    </label>
  </div>
  <input type="submit" class="btn btn-lg btn-primary btn-block" style="background-color:#A7CE44; border-color: #53585C;" value="Ingresar" id="alerta">
  <p class="mt-5 mb-3 text-muted">&copy; Soluciones IV</p>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
          const alerta = document.querySelector('#alerta')

          alerta.addEventListener('click',()=>{
            Command: toastr["info"]("Bienvenido al Sistema SDE")
          toastr.options = {
            "positionClass": "toast-top-right",
          }
          })          
        </script>

</body>
</html>
