<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/></link>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Medicion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                </ul>
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <!-- body content-->
    <div class="container">

        <div class="row">

            <div class="col">
                <div class="jumbotron">
                    <hr class="my-4">

                    <form name="formulario" id="formulario" method="POST">

                        <h3 class="col-lg-12 col-md-12 col-sm-12 col-xs-12">¿Cual es la humedad de una ciudad?</h3>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <label>Ingrese el nombre de una ciudad(*):</label>
                            <input type="text" class="form-control" name="busqueda" id="busqueda" maxlength="100" placeholder="Ciudad" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar" > <i class="fa fa-save"> </i> Buscar </button>
                            <button class="btn btn-danger" onclick="cancelarform()" type="button" id="btnCancelar" > <i class="fa fa-arrow-circle-left"> </i> Cancelar </button>
                        </div>
                    </form>

                    <div id="map"></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="jumbotron">
                    <hr class="my-4">
                    <p>A continuacion encontrara las busquedas recientes</p>

                    <div id="resultado_busqueda">
                    </div>

                </div>

            </div>


        </div>
    </div>
    <!-- body content-->



    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="">Jeisson Lopez Dev</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>


<script src="assets/includes/jquery-3.3.1.min.js"></script>s/j
<script src="assets/includes/bootstrap.min.js"></script>
<script src="assets/includes/app.min.js"></script>
<script type="text/javascript" src="assets/includes/bootbox.min.js"></script>
<script type="text/javascript" src="assets/includes/bootstrap-select.min.js"></script>

<script type="text/javascript" src="js/app.js"> </script>

</html>