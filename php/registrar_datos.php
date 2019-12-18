<?php
include 'cn.php';
//recibe datos
$user = $_POST["user"];
$pass = $_POST["pass"];
$fecha_reg_usu = $_POST["fecha_reg_usu"];
$idEmpleado = $_POST["idEmpleado"];
$idPermisos = $_POST["idPermisos"];
$idsub_permisos = $_POST["idsub_permisos"];


//insertar datos
$insertar="INSERT INTO usuario(user,pass,fecha_reg_usu,idEmpleado,idPermisos,idsub_permisos) 
            values('$user','$pass','$fecha_reg_usu','$idEmpleado','$idPermisos','$idsub_permisos')";


//ejecutar consulta
$resultado_insertar=mysqli_query($conexion,$insertar);
if(!$resultado_insertar){
    header("location:usuario.php");
}else{
    echo '<script>
        alert("SE REGISTRO EXITOSAMENTE");
        window.history.go(-1)
        </script>';
}
//cerrar conexion
mysqli_close($conexion);
?>