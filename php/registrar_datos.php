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

$verificar_empleado = mysqli_query($conexion,"SELECT * FROM usuario WHERE idEmpleado = '$idEmpleado'");
if(mysqli_num_rows($verificar_empleado)>0){
    echo '<script>
          alert("El empleado ya cuenta con un usuario");
          window.history.go(-1);
          </script>';
    exit;
}

//ejecutar consulta
$resultado_insertar=mysqli_query($conexion,$insertar);
if(!$resultado_insertar){
    echo '<script>
        alert("ERROR EN EL REGISTRO");
        window.history.go(-1)
        </script>';
}else{
    header("location:../usuario.php");
}
//cerrar conexion
mysqli_close($conexion);
?>