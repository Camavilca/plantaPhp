<?php
    session_start();

    $usuario=$_POST['usu_a'];
    $clave=$_POST['pass'];
    
    //conectar a la base de datos
    $conexion=mysqli_connect("localhost","root","","restaurant");
    $consulta="SELECT * FROM acmin WHERE usuario_a='$usuario' AND pass='$clave'";

    $resultado=mysqli_query($conexion,$consulta);
    //retorna filas de la consulta

    $filas=mysqli_num_rows($resultado);

    if ($filas>0) {
        header("Location:panel_admin.php");
    }
    else {
        header("Location:login_admin.php");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
