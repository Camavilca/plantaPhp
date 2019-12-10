<?php 
    include_once 'crear.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/142904/isolated/preview/b328ffdd1c50214fdfac8a447e74c5f8-logotipo-del-c--rculo-de-la-planta-by-vexels.png" type="image/x-icon">

    <link rel="stylesheet" href="estilos.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="fondito.jpg">
    <center>
        <br>
        <div id="form" class="table-responsive">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a href="index.php"><button type="button" class="btn btn-secondary btn-sm">Cerrar Sesion</button></a>
                </li>
            </ul>
            <div class="form">
                <form method="post" class="register-form">
                    <h1>Haz tu reserva</h1>
                    <table class="table table-bordered table-hover" width="100%" border="1" cellpadding="15">
                        <tr>
                            <td colspan="2" align="center"> <b>Datos de la Reserva</b> </td>
                        </tr>
                        <tr>
                            <td>Hora:</td>
                            <td><input class="form-control" type="time" name="hor" placeholder="Hora"></td>
                        </tr>
                        <tr>
                            <td>Fecha:</td>
                            <td><input class="form-control" type="date" name="fec" placeholder="Fecha"></td>
                        </tr>
                        <tr>
                            <td>Número de Mesa:</td>
                            <td><select class="form-control" name="num" id="numero">
                                    <option value="1">Mesa 01</option>
                                    <option value="2">Mesa 02</option>
                                    <option value="3">Mesa 03</option>
                                    <option value="4">Mesa 04</option>
                                    <option value="5">Mesa 05</option>
                                    <option value="6">Mesa 06</option>
                                    <option value="7">Mesa 07</option>
                                    <option value="8">Mesa 08</option>
                                    <option value="9">Mesa 09</option>
                                    <option value="10">Mesa 10</option>
                                    <option value="11">Mesa 11</option>
                                    <option value="12">Mesa 12</option>
                                    <option value="13">Mesa 13</option>
                                    <option value="14">Mesa 14</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Tipo de Mesa:</td>
                            <td><select class="form-control" class="form-control" name="tip" id="tipo">
                                    <option value="Personal">Personal</option>
                                    <option value="Dos personas">Para dos personas</option>
                                    <option value="Familiar">Familiar</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>DNI:</td>
                            <td><input  class="form-control" type="text" name="dni" placeholder="DNI"></td>
                        </tr>
                            <td colspan="2">
                                <button  class="btn btn-primary btn-sm" type="submit" name="reservar">Reservar</button>
                            </td>
                        </tr>
                    </table> 
                </form>
            </div>
        </div>
    </center>
</body>
</html>