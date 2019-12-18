<?php
include 'cn.php';
//recibe datos
$nom_inc = $_POST["nom_inc"];
$desc_inc = $_POST["desc_inc"];
$fecha_inc = $_POST["fecha_inc"];
$idtipo_incidente = $_POST["idtipo_incidente"];
$idAmbientes = $_POST["idAmbientes"];
$idUsuario = $_POST["idUsuario"];

//insertar datos
$insertar="INSERT INTO incidentes(nom_inc,desc_inc,fecha_inc,idtipo_incidente,idAmbientes,idUsuario) 
            values('$nom_inc','$desc_inc','$fecha_inc','$idtipo_incidente','$idAmbientes','$idUsuario')";

//ejecutar consulta
$resultado_insertar=mysqli_query($conexion,$insertar);
if(!$resultado_insertar){
    echo '<script>
        alert("SE PRODUJO UN ERROR");
        window.history.go(-2)
        </script>';
}else{
    header("location:../usuario.php");
}

//cerrar conexion
mysqli_close($conexion);
?>