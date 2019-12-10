<?php
session_start();

$usuario = $_POST['usu_l'];
$clave = $_POST['con_l'];

//conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "mysql", "restaurant");
// $conexion = mysqli_connect("localhost", "root", "", "restaurant");
$consulta = "SELECT * FROM cliente WHERE Usuario='$usuario' AND Clave='$clave'";

$resultado = mysqli_query($conexion, $consulta);
//retorna filas de la consulta

$filas = mysqli_num_rows($resultado);

if ($filas > 0) {
    header("Location:dashboard.php");
    // header("Location:principal.php");
} else {
    header("Location:login.php");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
