<?php
session_start();
session_destroy();
//unset($_GET['error']);
//unset($_GET['error1']);
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
                        <li><a href="../index.php">Inicio</a></li>
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
            <center><h4><strong>Bienvenido al Juego de CelSystem, registrate y empez&aacute; a ganar puntos. Hay incre&iacute;bles premios y descuentos.</strong></h4></center><br/><hr/>
        </div>
        <div class="row">
            <div class="col-md-6">
                <center>
                    <h2><span class="label label-success">Registrarme</span></h2>
                    <br/>
                    <form action="registro_nuevo.php" method="post" name="form_registro">
                        <input type="text" name="new_usuario" placeholder="Usuario" /><br/><br/>
                        <input type="text" name="new_nombre" placeholder="Nombre" /><br/><br/>
                        <input type="text" name="new_apellido" placeholder="Apellido" /><br/><br/>
                        <input type="text" name="new_correo" placeholder="Correo" /><br/><br/>
                        <input type="password" name="new_password" placeholder="Contraseña" /><br/><br/>
                        <p id="repite">* Vuelve a escribir la Contrase&ntilde;a</p>
                        <input type="password" name="new_repeat_password" placeholder="Contraseña" /><br/><br/>
                        <input type="submit" name="new_registro" value="Registrarme" /><br/><br/>
                    </form>
                    <?php
                    if (isset($_GET['error']) == 1) {
                        echo "El Usuario y/o Correo ya existe";
                    }
                    ?>
                    <?php
                    if (isset($_GET['errorQ']) == 3) {
                        echo "Por Favor Complete Todos Los Datos!!!";
                    }
                    ?>
                    <?php
                    if (isset($_GET['errorP']) == 1) {
                        echo "Las Contraseñas no Coinciden!!!";
                    }
                    ?>
                    <?php
                    if (isset($_GET['acces']) == 1) {
                        echo "<h2><span class='label label-primary'>Usuario Creado. Ahora puede ingresar al Juego.</span></h2>";
                    }
                    ?>
                    
                    
                    
                    
                    
                </center>
            </div>
            <div class="col-md-6">
                <center>
                    <h2><span class="label label-success">Ingreso</span></h2>
                    <br/>
                    <form action="validacion_ingreso.php" method="post" name="form_ingreso">
                        <input type="text" name="user" placeholder="Usuario"/><br/><br/>
                        <input type="password" name="password" placeholder="Contraseña"/><br/><br/>
                        <input type="submit" name="enviar" value="Ingresar" />
                    </form>
                    <?php
                    if (isset($_GET['error1']) == 2) {
                        echo "El Usuario no existe - Usuario y/o Contraseña incorrecta";
                    }
                    ?>
                </center>
            </div>
        </div>
        <br>
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>