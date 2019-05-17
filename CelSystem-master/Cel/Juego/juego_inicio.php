<?php
session_start();
if (empty($_GET['v'])) {
    $_GET['v'] = 0;
}

if (empty($_SESSION['usuario_activo'])) {
    header("location:juego_ingreso.php?error1=2");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Juego</title>
        <link rel="stylesheet" href="../css/estilos.css"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
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
    <body id="body_juego">
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
                        <li><a href="../cerrar_sesion.php">Salir del Juego</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="arriba">
            <center>
                <span style="font-size: large;"><span class="Apple-style-span" style="color: red;"><script language="JavaScript" type="text/javascript">

                    today = new Date()
                    if (today.getMinutes() < 10) {
                        pad = "0"
                    }


                        </script>
                    </span>
                </span>
            </center>

        </div>
        <div id="leyenda_juego">
            <center><h4><strong>Bienvenido al Juego de CelSystem, registrate y empez&aacute; a ganar puntos. Hay incre&iacute;bles premios y descuentos.</strong></h4></center>
            <br/><br/>
            <center><h5>Bienvenido <?php echo "<strong>" . $_SESSION['usuario_activo'] . "</strong>" ?></h5></center>
            <?php
//MUESTRA LOS PUNTOS DEL USUARIO
            $archivo = fopen("Puntos/" . $_SESSION['user_puntos'], "r");

            while (!feof($archivo)) {
                $linea = fgets($archivo);
                $datos = explode("|", $linea);

                $_SESSION['puntos_acumulados'] = $datos[0];
            }
            ?>
            <br/><hr/>
        </div>
        <div class="row">
            <div class="col-md-2">

                <h2>PUNTAJE</h2>
                <ul>
                    <li>GANAR    --> +1 Puntos</li><br/>
                    <li>EMPATE   --> 0 Puntos</li><br/>
                    <li>PERDISTE --> -1 Puntos</li><br/>
                </ul>

            </div>
            <div class="col-md-6">
                <table>
                    <tr>JUGADOR:<br/><br/>
                    <td><a href="juego_inicio.php?v=1"><image src='piedra.jpg' /></a></td>
                    <td><a href="juego_inicio.php?v=2"><image src='papel.jpg' /></a></td>
                    <td><a href="juego_inicio.php?v=3"><image src='tijera.jpg' /></a></td>
                    </tr>
                    <tr>
                        <td>
                            <?php
                            $jugador = $_GET['v'];


                            $maquina = rand(1, 3);
                            echo "<br/><br/>";
                            echo "<br/><br/>";
                            echo "MAQUINA;";
                            echo "<br/><br/>";
                            echo "<br/><br/>";
                            if ($maquina == 1) {
                                echo "<image src='piedra.jpg' />";
                            }
                            if ($maquina == 2) {
                                echo "<image src='papel.jpg' />";
                            }
                            if ($maquina == 3) {
                                echo "<image src='tijera.jpg' />";
                            }
                            echo "<br/><br/>";
                            if (($jugador == 1) && ($maquina == 1)) {
                                echo "EMPATE";
                            }
                            if (($jugador == 1) && ($maquina == 2)) {
                                include ("ppt.php");
                            }
                            if (($jugador == 1) && ($maquina == 3)) {
                                include ("correcion.php");
                            }

                            if (($jugador == 2) && ($maquina == 1)) {

                                include ("correcion.php");
                            }
                            if (($jugador == 2) && ($maquina == 2)) {
                                echo "EMPATE";
                            }
                            if (($jugador == 2) && ($maquina == 3)) {
                                include ("ppt.php");
                            }

                            if (($jugador == 3) && ($maquina == 1)) {
                                include ("ppt.php");
                            }
                            if (($jugador == 3) && ($maquina == 2)) {
                                include ("correcion.php");
                            }
                            if (($jugador == 3) && ($maquina == 3)) {
                                echo "EMPATE";
                            }
                            ?>

                        </td>
                    </tr>
                </table>



            </div>

            <div class="col-md-4">


                <?php echo "<center><h3>Puntos Acumulados: " . $_SESSION['puntos_acumulados'] . " </h3></center>"; ?>
                <hr/>
                <p>* Acumula la mayor cantidad de puntos para poder acceder a los siguientes beneficios:</p>
                <br/>
                <ul>
                    <li>Un Celular NUEVO !!! 20000 puntos</li>
                    <li>Reparacion de tu equipo SIN CARGO. 10000 puntos</li>
                    <li>Descuentos en la reparaci&oacute;n de tu equipo. 5000 puntos</li>
                    <li>Regalos y Accesorios. 2000 puntos.</li>
                </ul>
                <br/>
                <br/>
                <h2><span class="label label-warning"><a href="cupon_pdf.php">Generar Cup&oacute;n de Descuento</a></span></h2>
            </div>
        </div>
        <br>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
