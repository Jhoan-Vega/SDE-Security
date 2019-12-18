<?php
include 'cn.php';
//recibe datos
$idUsuario = $_POST["idUsuario"];
$user = $_POST["user"];
$pass = $_POST["pass"];
$fecha_reg_usu = $_POST["fecha_reg_usu"];
$idEmpleado = $_POST["idEmpleado"];
$idPermisos = $_POST["idPermisos"];
$idsub_permisos = $_POST["idsub_permisos"];

//insertar datos
$actualizar="UPDATE usuario SET user='$user', pass='$pass', fecha_reg_usu='$fecha_reg_usu',
idEmpleado='$idEmpleado', idPermisos='$idPermisos', idsub_permisos='$idsub_permisos' WHERE idUsuario='$idUsuario'";

//!--window.history.go(-1)
//ejecutar consulta
$resultado_actualizar=mysqli_query($conexion,$actualizar);
if(!$resultado_actualizar){
    echo '<script>
        alert("ERROR");
        window.history.go(-2)
        </script>';
}else{
    echo '<script>
        alert("SE MODIFICO CON EXITO");
        window.history.go(-2)
        </script>';
}
//cerrar conexion
mysqli_close($conexion);
?>