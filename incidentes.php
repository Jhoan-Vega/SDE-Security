<?php
  require_once 'php/cn.php';
    require 'php/mostrar_datos.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Jekyll v3.8.5">

    <title>Incidentes</title>

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
            <a class="nav-link active" href="incidentes.php">
              <span data-feather="file"></span>
              Incidentes <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="empleados.php">
              <span data-feather="users"></span>
              Empleados
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
            <a class="nav-link" href="añadir_incidente.php">
              <span data-feather="file-text"></span>
              Añadir Incidentes
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Promedio de Incidentes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!--<div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Subir</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Esta Semana
          </button>-->
        </div>
      </div>

      <canvas id="myChart" width="500" height="500"></canvas>

      <div class="card" id="carta">
    <div class="card-header">
    PANEL DE CONTROL
  </div>
  <div class="card-body">
  <h5 class="card-title">Incidentes | <small>SDE Security</small></h5>
  <p>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Tipo de incidente</th>
              <th>Nombre de incidente</th>
              <th>Fecha</th>
              <th>Descripcion</th>
            </tr>
          </thead>
          <tbody>
          <?php
                foreach($query4 as $row){
            ?>
            <tr>
                <td><?php echo $row['nom_tipo_inc'];?></td>
                <td><?php echo $row['nom_inc'];?></td>
                <td><?php echo $row['fecha_inc'];?></td>
                <td><?php echo $row['desc_inc'];?></td>
              </tr>
          </tbody>
          <?php } ?>
        </table>
      </div>
                </p>
                </div>
                </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/jquery-slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/main.js"></script></body>
</html>
