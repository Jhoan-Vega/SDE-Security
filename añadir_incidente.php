<?php
    require 'php/mostrar_datos.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Usuarios</title>

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
    <link href="css/estilos.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Security Admin</a>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="login.php"><span data-feather="arrow-left"></span> Salir</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="usuario.php">
              <span data-feather="user"></span>
              Usuarios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="permisos.php">
              <span data-feather="lock"></span>
              Permisos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ambientes.php">
              <span data-feather="home"></span>
              Control Accesos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="incidentes.php">
              <span data-feather="file"></span>
              Incidentes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="empleados.php">
              <span data-feather="users"></span>
              Empleados <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Opciones Extra</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="añadir_usuario.php">
              <span data-feather="file-text"></span>
              Gestionar Usuarios
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="añadir_empleado.php">
              <span data-feather="file-text"></span>
              Gestionar Empleados 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="añadir_incidente.php">
              <span data-feather="file-text"></span>
              Añadir Incidentes <span class="sr-only">(current)
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <form method="post" action="php/registrar_incidente.php">
        <h1></h1>
        <h2>Añadir Incidente</h2>
              
          <div class="form-group"> 
          <label>Incidente:</label>
          <input type="text" class="form-control" id="nom_inc" name="nom_inc" placeholder="Nombre" required>
          </div>

          <div class="form-group">
          <label>Descripcion:</label>
          <input type="text" class="form-control" id="desc_inc" name="desc_inc" placeholder="Descripcion" required>
          </div>

          <div class="form-group">
          <label>Fecha:</label>
          <input type="date" class="form-control" id="fecha_inc" name="fecha_inc" placeholder="Fecha inciente" required>
          </div>

          <div class="form-group">
          <label>Tipo de Incidente:</label> 
            <select class="form-control" id="idtipo_incidente" name="idtipo_incidente">
            <option value = "NULL"> Seleccione el tipo de incidente</option>
            <?php
              while($array10=mysqli_fetch_array($query10)){
            ?>
              <option value="<?php echo $array10['idtipo_incidente']?>"> <?php echo $array10['nom_tipo_inc']?> </option> 
              <?php }?>
            </select>
          </div>

          <div class="form-group"> 
          <label>Ambiente afectado:</label>
            <select class="form-control" id="idAmbientes" name="idAmbientes">
            <option value = "NULL"> Seleccione el Ambiente</option>
            <?php
              while($array3=mysqli_fetch_array($query3)){
            ?>
              <option value="<?php echo $array3['idAmbientes']?>"> <?php echo $array3['nom_amb']?> </option>
              <?php }?> 
            </select>
          </div>

          <div class="form-group"> 
          <label>Responsable:</label>
            <select class="form-control" id="idUsuario" name="idUsuario">
            <option value = "NULL"> Seleccione el responsable</option>
            <?php
              while($array11=mysqli_fetch_array($query11)){
            ?>
              <option value="<?php echo $array11['idUsuario']?>"> <?php echo $array11['user']?> </option>
              <?php }?> 
            </select>
          </div>
          <input type="submit" value="Registrar" class="btn btn-danger" id="alerta">
      </form>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/jquery.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="js/main.js"></script>

        <script>
          const alerta = document.querySelector('#alerta')

          alerta.addEventListener('click',()=>{
            Command: toastr["success"]("Usuario Registrado con exito")

          toastr.options = {

            "positionClass": "toast-bottom-right",
          
          }
          })          
        </script>

        </body>
</html>
