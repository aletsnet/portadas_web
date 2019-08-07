<!DOCTYPE html>
<html lang="es">
<head>
    <title>Portada</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/complement.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/data.js"></script>
</head>
<body>
    <div class="text-center">
        <h1 id="titulo"></h1>
        <p id="descripcion"></p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-ms-12 col-xl-12 text-center">
                <img id="imgPortada" src="img/portada.png" class="img-fluid rounded" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4><span class="badge badge-success"> <i class="fa fa-cube" aria-hidden="true"></i>  Servicios</span></h4>
            </div>
            <div class="col-6 text-right">
                <h6>
                    <span id="time" class="badge badge-success" />
                </h6>
            </div>
        </div>
        <div id="lapps" class="row">
            
        </div>
    </div>
    <script>
        // codigo js complementario
        makeList(list);
    </script>
</body>
</html>
