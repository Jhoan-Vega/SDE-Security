<?php
include 'cn.php';

$consultar="SELECT count(*) FROM incidentes WHERE month(fecha_inc) = 11";
$query=mysqli_query($conexion,$consultar);
$array=mysqli_fetch_array($query);

if($_POST['array']){
    $class = new Procesar;
    $run = $class->build_report($_POST['array']);
    exit(json_encode($run));
}