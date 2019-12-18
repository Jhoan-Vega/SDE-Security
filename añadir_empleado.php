<?php
    require 'php/mostrar_datos.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Añadir Empleado</title>

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
      <a class="nav-link" href="index.php"><span data-feather="arrow-left"></span> Salir</a>
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
          <a class="nav-link active" href="añadir_empleado.php">
              <span data-feather="file-text"></span>
              Gestionar Empleados <span class="sr-only">(current)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="añadir_incidente.php">
              <span data-feather="file-text"></span>
              Añadir Incidentes
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <form method="post" action="php/registrar_empleado.php">
        <h1></h1>
        <h2>Añadir Empleados</h2>
          <div class="form-group"> 
          <label>Nombres:</label>
          <input type="name" class="form-control" id="nom_empl" name="nom_empl" placeholder="Nombre" pattern="[A-z]{1,15}" required>
          </div>

          <div class="form-group"> 
          <label>Apellidos:</label>
          <input type="name" class="form-control" id="ape_empl" name="ape_empl" placeholder="Apellido" required>
          </div>

          <!--<div class="form-group"> 
            <select class="form-control" id="idUsuario" name="idUsuario">
            <option value = "NULL"> Seleccione su usuario</option>
            <?php
              //while($array11=mysqli_fetch_array($query11)){
            ?>
              <option value="<?php //echo $array11['idUsuario']?>"> <?php //echo $array11['user']?> </option>
              <?php //}?> 
            </select>
          </div>-->

          <div class="form-group">
          <label>Cargo:</label>
          <select class="form-control" id="idcargos" name="idcargos">
            <?php
              while($array13=mysqli_fetch_array($query13)){
            ?>
              <option value="<?php echo $array13['idcargos']?>"> <?php echo $array13['cargos']?> </option> 
              <?php }?>
            </select>
          </div>

          <div class="form-group">
          <label>Telefono:</label>
          <input type="tel" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="telf_empl" name="telf_empl" placeholder="Telefono" required>
          </div>

          <div class="form-group">
          <label>Direccion:</label>
          <input type="text" class="form-control" id="dir_empl" name="dir_empl" placeholder="Direccion" required>
          </div>

          <div class="form-group">
          <label>Ciudad:</label> 
          <input type="text" class="form-control" id="ciudad_empl" name="ciudad_empl" placeholder="Ciudad" required>
          </div>

          <div class="form-group">
          <label>DNI:</label>
          <input type="numeric" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="dni_empl" name="dni_empl" placeholder="DNI" required>
          </div>

          <input type="submit" value="Registrar" class="btn btn-danger" id="alerta" >
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
        </body>
</html>
