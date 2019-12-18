<?php
include 'cn.php';
$consultar="SELECT * FROM vista_usuario";
$query=mysqli_query($conexion,$consultar);
$array=mysqli_fetch_array($query);

$consultar2="SELECT * FROM vista_ambientexpermisos";
$query2=mysqli_query($conexion,$consultar2);
$array2=mysqli_fetch_array($query2);

$consultar3="SELECT * FROM ambientes";
$query3=mysqli_query($conexion,$consultar3);
$array3=mysqli_fetch_array($query3);

$consultar4="SELECT * FROM vista_inciente";
$query4=mysqli_query($conexion,$consultar4);
$array4=mysqli_fetch_array($query4);

$consultar5="SELECT * FROM vista_ambientexsensores";
$query5=mysqli_query($conexion,$consultar5);
$array5=mysqli_fetch_array($query5);

$consultar6="SELECT e.nom_empl, e.ape_empl, c.cargos, e.telf_empl, e.dir_empl, e.ciudad_empl, e.dni_empl FROM empleado e
inner join cargos c on c.idcargos=e.idcargos";
$query6=mysqli_query($conexion,$consultar6);

$consultar7="SELECT idPermisos, nivel_permiso FROM permisos";
$query7=mysqli_query($conexion,$consultar7);

$consultar8="SELECT idsub_permisos, sub_nivel_permisos FROM sub_permisos";
$query8=mysqli_query($conexion,$consultar8);

$consultar9="SELECT e.idEmpleado,e.nom_empl FROM empleado e
left join usuario u
on e.idEmpleado=u.idEmpleado
where u.idEmpleado is NULL";
$query9=mysqli_query($conexion,$consultar9);

$consultar10="SELECT * FROM tipo_incidente";
$query10=mysqli_query($conexion,$consultar10);

$consultar11="SELECT * FROM usuario";
$query11=mysqli_query($conexion,$consultar11);

$consultar12="SELECT * FROM temperatura";
$query12=mysqli_query($conexion,$consultar12);

$consultar13="SELECT * FROM cargos";
$query13=mysqli_query($conexion,$consultar13);

$consultar14="SELECT u.user, e.nom_empl, a.fecha_acceso, a.permiso FROM acceso a
inner join usuario u 
on u.idUsuario = a.idUsuario
inner join empleado e
on e.idEmpleado=u.idEmpleado";
$query14=mysqli_query($conexion,$consultar14);

///////////////////////////////////////////////////////////////////////

$consulta_contar1="SELECT COUNT(*) as cuenta FROM vista_usuario";
$result=mysqli_query($conexion,$consulta_contar1);
$contar=mysqli_fetch_array($result);

$consulta_contar2="SELECT COUNT(*) as cuenta2 FROM vista_inciente";
$result2=mysqli_query($conexion,$consulta_contar2);
$contar2=mysqli_fetch_array($result2);

$consulta_contar3="SELECT COUNT(*) as cuenta3 FROM vista_ambientexpermisos";
$result3=mysqli_query($conexion,$consulta_contar3);
$contar3=mysqli_fetch_array($result3);

$consulta_contar4="SELECT COUNT(*) as cuenta4 FROM empleado";
$result4=mysqli_query($conexion,$consulta_contar4);
$contar4=mysqli_fetch_array($result4);

?>