<?php
include 'php/cn.php';

$user_adm=$_POST['user'];
$pass_adm=$_POST['pass'];

$query="SELECT Nombre_adm, Apellido_adm FROM admin WHERE user_adm='$user_adm' and pass_adm='$pass_adm'";
$resultado=mysqli_query($conexion,$query);
$row=mysqli_num_rows($resultado);
if($row>0){
    header("location:usuario.php");
}else{
    echo '<script>
        alert("Los datos son incorrectos");
        window.history.go(-1)
        </script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);

