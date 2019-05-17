<?php
session_start();

if (empty($_SESSION['cliente'])) {
    header('Location: ingreso_cliente.php');
}

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CelSystem</title>
        <link rel="stylesheet" href="css/estilos.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30858985-1']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>


    <body>
        <?php include("header.php"); ?>
        <nav class = "navbar navbar-default navbar-static-top">
            <div class = "container">
                <div class = "navbar-header">
                    <button type = "button" data-target = "#menu-principal" data-toggle = "collapse" class = "navbar-toggle">
                        <span class = "sr-only">Este boton despliega la barra de navegacion</span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                </div>
                <div id = "menu-principal">
                    <ul class = "nav nav-pills nav-justified">
                        <li><a href="panel_cliente.php">Panel</a></li>
                        <li><a href="datos_cliente.php">Mis Datos</a></li>
                        <li><a href="equipo_cliente.php">Mi Equipo</a></li>
                        <li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h3><span class="label label-success"><?php echo "Bienvenido Cliente N° " . $_SESSION['cliente'];  ?></span></h3>


        <div class="row">
            <div class="col-md-2">
                <!--VACIO-->
            </div>
            <div class="col-md-6">

                <center>
                    <?php
                    $cliente = $_SESSION['cliente'];

                    $archivo = fopen('reparar.dat', 'r') or die("Error");
                    while (!feof($archivo)) {

                        $linea = fgets($archivo);
                        $datos = explode("|", $linea);


                        if ($cliente == $datos[0]) {

                            $codd = $datos[0];
                            $nombre = $datos[1];
                            $dni = $datos[2];
                            $direccion = $datos[3];
                            $telefono = $datos[4];

                            echo "EQUIPO<table border=1>";
                            echo "<th>Codigo</th>";
                            echo "<th>Equipo</th>";
                            echo "<th>Marca</th>";
                            echo "<th>Modelo</th>";
                            echo "<th>Detalle</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>" . $codd . "</td>";
                            echo "<td>" . $nombre . "</td>";
                            echo "<td>" . $dni . "</td>";
                            echo "<td>" . $direccion . "</td>";
                            echo "<td>" . $telefono . "</td>";
                            echo "</tr>";
                            echo "</table>";
                            echo "<br>";

                            break;
                        }
                    }
                    fclose($archivo);
                    ?>


                    <div id="estado_equipo">

                        <label>ESTADO DEL EQUIPO: <?php include('miEstado.php'); ?> </label>

                    </div>
                </center>
            </div>

            <br>
            <div class="col-md-2">
                <td><a href="https://www.instagram.com/" target="_blank"><img src="imagenes/insta.jpg"></a></td><br><br><br>
                <td><a href="https://twitter.com/?lang=es" target="_blank"><img src="imagenes/twitter.jpg"></a></td><br><br><br>
                <td><a href="https://www.facebook.com/" target="_blank"><img src="imagenes/face.jpg"></a></td><br><br><br>
            </div>
        </div>
        <?php include("footer.php"); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>