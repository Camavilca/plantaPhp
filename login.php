<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plantas</title>
    <!-- Font Awesome -->
    <link rel="shortcut icon" href="https://images.vexels.com/media/users/3/142904/isolated/preview/b328ffdd1c50214fdfac8a447e74c5f8-logotipo-del-c--rculo-de-la-planta-by-vexels.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
</head>

<body>

    <!--Main Navigation-->
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark default-color">
            <a class="navbar-brand" href="#"><strong>Plantas Tecsup</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Inicia sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_admin.php">Iniciar como administrador</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="mt-5" style="margin: 100px">
        <div class="row">
            <div class="col-sm-2 col-md-2"></div>
            <div class="col-sm-8 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="validar.php" class="login-form">
                            <h1 class="text-primary text-center my-5">Inicia Sesión</h1>
                            <div class="form-group">
                                <label for="usu_l">Ingrese usuario:</label>
                                <input class="form-control" type="text" name="usu_l" placeholder="user name" require>
                            </div>
                            <div class="form-group">
                                <label for="usu_l">Ingrese contraseña:</label>
                                <input class="form-control" type="password" name="con_l" placeholder="password" require>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary " type="submit" name="iniciar">Iniciar</button>
                            </div>
                            <p class="message">
                                <span class="text-secondary">
                                    ¿Aun no tienes una cuenta?
                                </span>
                                <a href="registrar.php">Registrate</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2"></div>
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