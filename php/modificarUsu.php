<?php
include 'cn.php';
$user = $_GET["user"];

$consultar12="SELECT * FROM usuario where user='".$user."'";
$query12=mysqli_query($conexion,$consultar12);
$array12=mysqli_fetch_array($query12);

?>