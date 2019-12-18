<?php
include 'cn.php';
//recibe datos
$idIncidentes = $_POST["idIncidentes"];
$nom_inc = $_POST["nom_inc"];
$desc_inc = $_POST["desc_inc"];
$fecha_inc = $_POST["fecha_inc"];
$idtipo_incidente = $_POST["idtipo_incidente"];
$idAmbientes = $_POST["idAmbientes"];
$idUsuario = $_POST["idUsuario"];

//insertar datos
$insertar="INSERT INTO incidentes(idIncidentes,nom_inc,desc_inc,fecha_inc,idtipo_incidente,idAmbientes,idUsuario) 
            values('$idIncidentes','$nom_inc','$desc_inc','$fecha_inc','$idtipo_incidente','$idAmbientes','$idUsuario')";

//ejecutar consulta
$resultado_insertar=mysqli_query($conexion,$insertar);
if(!$resultado_insertar){
    echo '<script>
        alert("SE PRODUJO UN ERROR");
        window.history.go(-2)
        </script>';
}else{
    echo '<script>
        alert("SE REGISTRO EXITOSAMENTE");
        window.history.go(-2)
        </script>';
}

//cerrar conexion
mysqli_close($conexion);
?>