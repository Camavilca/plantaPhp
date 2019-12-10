<?php
include_once 'crear.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/142904/isolated/preview/b328ffdd1c50214fdfac8a447e74c5f8-logotipo-del-c--rculo-de-la-planta-by-vexels.png" type="image/x-icon">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body>

    <header class="container mt-5">

        <nav class="navbar navbar-expand-lg navbar-dark default-color">
            <a class="navbar-brand" href="#"><strong>Bienvenido Administrado</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Registro de Personas <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="home.php" class="nav-link"></button>Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container" style="margin-top: 100px">
        <div class="card my-5">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Apellido</td>
                            <td>Direccion</td>
                            <td>Dni</td>
                            <td></td>
                        </tr>
                    </thead>
                    <?php
                    $res = $MySQLiconn->query("SELECT * FROM cliente");
                    while ($row = $res->fetch_array()) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['NombreCliente']; ?></td>
                                <td><?php echo $row['Apellidos']; ?></td>
                                <td><?php echo $row['Direccion']; ?></td>
                                <td><?php echo $row['Dni']; ?></td>
                                <td>
                                    <a href="?del=<?php echo $row['Dni']; ?>" onclick="return confirm('Estas apunto de eliminar un registro...'); ">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>

                </table>
            </div>
        </div>
        <div class="text-center my-5">
            <img src="https://www.lavanguardia.com/r/GODO/LV/p6/WebSite/2019/07/04/Recortada/img_jelcacho_20170207-092322_imagenes_lv_getty_istock-153054218-ketF-U463285350711G9B-992x558@LaVanguardia-Web.jpg" alt="">
        </div>

    </main>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>

</body>

</html>