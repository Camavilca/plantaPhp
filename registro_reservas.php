<?php 
    include_once 'crear.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="test/html; charset=utf-8">
    <title>Registro de Clientes</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="fondito.jpg">
    <center>
        <br>
        <div id="form"> 
            <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="panel_admin.php"><button type="button" class="btn btn-secondary btn-sm">Atrás</button></a>
                    </li>
            </ul>
            <br>
            <h1>Lista de Reservas:</h1>
            <br>
            <table width="100%" border="1" cellpadding="15" align="center">
                <tr>
                    <td><b>Codigo de Reserva</b></td>
                    <td><b>Hora</b></td>
                    <td><b>Fecha</b></td>
                    <td><b>Numero de Mesa</b></td>
                    <td><b>Tipo de Mesa</b></td>
                    <td><b>DNI Cliente</b></td>
                </tr>
                <?php
                    $res = $MySQLiconn->query("SELECT * FROM reserva");
                    while ($row=$res->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $row['Cod_Reserva']; ?></td>
                            <td><?php echo $row['Hora']; ?></td>
                            <td><?php echo $row['Dia']; ?></td>
                            <td><?php echo $row['Num_Mesa']; ?></td>
                            <td><?php echo $row['Tipo_mesa']; ?></td>
                            <td><?php echo $row['Dni']; ?></td>

                            <td>
                                <a href="?del=<?php echo $row['Cod_Reserva']; ?>" 
                                onclick="return confirm('Estas apunto de eliminar un registro...'); ">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            
            </table>
        </div>
    </center>
</body>
</html>