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
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/142904/isolated/preview/b328ffdd1c50214fdfac8a447e74c5f8-logotipo-del-c--rculo-de-la-planta-by-vexels.png" type="image/x-icon">

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
            <h1>Lista de Clientes:</h1>
            <br>
            <table width="100%" border="1" cellpadding="15" align="center">
                <tr>
                    <td><b>DNI</b></td>
                    <td><b>Nombre</b></td>
                    <td><b>Apellido</b></td>
                    <td><b>Direccion</b></td>
                </tr>
                <?php
                $res = $MySQLiconn->query("SELECT * FROM cliente");
                while ($row = $res->fetch_array()) {
                    ?>
                    <tr>
                        <td><?php echo $row['Dni']; ?></td>
                        <td><?php echo $row['NombreCliente']; ?></td>
                        <td><?php echo $row['Apellidos']; ?></td>
                        <td><?php echo $row['Direccion']; ?></td>

                        <td>
                            <a href="?del=<?php echo $row['Dni']; ?>" onclick="return confirm('Estas apunto de eliminar un registro...'); ">Eliminar</a>
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