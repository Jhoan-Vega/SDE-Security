<?php
include 'cn.php';
//recibe datos
$nom_empl = $_POST["nom_empl"];
$ape_empl = $_POST["ape_empl"];
$idcargos = $_POST["idcargos"];
$telf_empl = $_POST["telf_empl"];
$dir_empl = $_POST["dir_empl"];
$ciudad_empl = $_POST["ciudad_empl"];
$dni_empl = $_POST["dni_empl"];

//insertar datos
$insertar="INSERT INTO empleado(nom_empl,ape_empl,idcargos,telf_empl,dir_empl,ciudad_empl,dni_empl) 
            values('$nom_empl','$ape_empl','$idcargos','$telf_empl','$dir_empl','$ciudad_empl','$dni_empl')";

//verificar
$verificar_empleado = mysqli_query($conexion,"SELECT * FROM empleado WHERE idEmpleado = '$idEmpleado'");
if(mysqli_num_rows($verificar_empleado)>0){
    echo '<script>
          alert("El empleado ya esta registrado");
          window.history.go(-1);
          </script>';
    exit;
}
//ejecutar consulta
$resultado_insertar=mysqli_query($conexion,$insertar);
if(!$resultado_insertar){
    echo '<script>
        alert("SE PRODUJO UN ERROR");
        window.history.go(-1)
        </script>';
}else{
    echo '<script>
        alert("SE REGISTRO EXITOSAMENTE");
        window.history.go(-1)
        </script>';
}

//cerrar conexion
mysqli_close($conexion);
?>