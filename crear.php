<?php 
    include_once 'conexion.php';
    if (isset($_POST['registrar'])) {
        $usu_r = $MySQLiconn->real_escape_string($_POST['usu_r']);
        $con_r = $MySQLiconn->real_escape_string($_POST['con_r']);
        $nom = $MySQLiconn->real_escape_string($_POST['nom']);
        $ape = $MySQLiconn->real_escape_string($_POST['ape']);
        $dni = $MySQLiconn->real_escape_string($_POST['dni']);
        $dir = $MySQLiconn->real_escape_string($_POST['dir']);

        $SQL = $MySQLiconn->query("INSERT INTO cliente(Dni,NombreCliente,Apellidos,Direccion,Usuario,Clave) 
                                    VALUES('$dni','$nom','$ape','$dir','$usu_r','$con_r')");

        if (!$SQL) {
            echo $MySQLiconn->error;
        }
    }
    
    if (isset($_POST['reservar'])) {
        $hor = $MySQLiconn->real_escape_string($_POST['hor']);
        $fec = $MySQLiconn->real_escape_string($_POST['fec']);
        $num = $MySQLiconn->real_escape_string($_POST['num']);
        $tip = $MySQLiconn->real_escape_string($_POST['tip']);
        $dni = $MySQLiconn->real_escape_string($_POST['dni']);

        $SQL = $MySQLiconn->query("INSERT INTO reserva(Hora,Num_Mesa,Tipo_mesa,Dia,Dni) 
                                    VALUES('$hor','$num','$tip','$fec','$dni')");

        if (!$SQL) {
            echo $MySQLiconn->error;
        }
    }

    if (isset($_GET['del'])) {
        $SQL = $MySQLiconn->query("DELETE FROM cliente WHERE Dni=".$_GET['del']);
        header("Location: registro_clientes.php");
    }
    if (isset($_GET['del'])) {
        $SQL = $MySQLiconn->query("DELETE FROM reserva WHERE Cod_Reserva=".$_GET['del']);
        header("Location: registro_reservas.php");
    }
?>

