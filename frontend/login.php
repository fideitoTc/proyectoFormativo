<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$conexion=mysqli_connect("localhost","root","","proyectof");
# $conexion->set_charset('utf8');#

$consulta="select * from usuarios where usuario='$usuario' and clave='$clave'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0)
{
    header("Location:/frontend/bienveniso.html");
}
else
{
    echo "datos incorectos";
}

mysqli_free_resultado($resultado);
mysqli_close($conexion);


