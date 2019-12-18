<?php
    require 'php/mostrar_datos.php';
    require 'php/modificarUsu.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Añadir Usuarios</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


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
          <a class="nav-link  active" href="modificar_usuario.php">
              <span data-feather="file-text"></span>
              Modificar Usuario <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="añadir_empleado.php">
              <span data-feather="file-text"></span>
              Gestionar Empleados
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
    <form method="post" action="php/mod_usu.php">
        <h1></h1>
        <h2>Modificar Usuarios</h2>
          <div class="form-group"> 
          <label for="idUsuario">ID: </label>     
          <input type="text" class="form-control" id="idUsuario" name="idUsuario" value="<?php echo $array12['idUsuario']?>" readonly="readonly">
          </div>

          <div class="form-group">
          <label for="user">Usuario: </label>  
          <input type="text" class="form-control" id="user" name="user" value="<?php echo $array12['user']?>">
          </div>

          <div class="form-group">
          <label for="pass">Contraseña: </label> 
          <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $array12['pass']?>">
          </div>

          <div class="form-group"> 
          <label for="fecha_reg_usu">Fecha: </label> 
          <input type="text" class="form-control" id="fecha_reg_usu" name="fecha_reg_usu" value="<?php echo $array12['fecha_reg_usu']?>" readonly="readonly">
          </div>

          <div class="form-group">  
          <input type="text" class="form-control" id="idEmpleado" name="idEmpleado" value="<?php echo $array12['idEmpleado']?>" hidden>
          </div>

          <div class="form-group"> 
          <label for="idEmpleado">Permiso: </label> 
            <select class="form-control" id="idPermisos" name="idPermisos"  onchange="habilitar(this.value)">
            <option value = "<?php echo $array7[$idPermisos='NULL']?>"> Seleccione el permiso</option>
            <?php
              while($array7=mysqli_fetch_array($query7)){
            ?>
              <option value="<?php echo $array7['idPermisos']?>"> <?php echo $array7['nivel_permiso']?> </option>
              <?php }?> 
            </select>
          </div>

          <div class="form-group"> 
          <label for="idEmpleado">SubPermiso: </label> 
            <select class="form-control" id="idsub_permisos" name="idsub_permisos">
            <?php
              while($array8=mysqli_fetch_array($query8)){
            ?>
              <option value="<?php echo $array8['idsub_permisos']?>"> <?php echo $array8['sub_nivel_permisos']?> </option>
              <?php }?> 
            </select>
          </div>

          <input type="submit" value="Modificar" class="btn btn-danger" >
      </form>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/jquery-slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/habilitar.js"></script>
        </body>
</html>
