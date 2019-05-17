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

                <section>
                    <h2><span class="label label-primary">Novedades</span></h2>
                    <br/>
                    <article>
                        <strong>Bienvenido a CelSystem</strong>
                        <br/>
                        <br/>
                        <p>En la secci&oacute;n de <strong>"Mi Equipo"</strong> podr&aacute; consultar el estado de su equipo. </p>
                    </article>
                    <br/>
                    <br/>
                    <div class='alert alert-danger' role='alert'>
                        <p>* Para poder retirar su equipo deberá llevar la factura impresa, caso contrario no podr&aacute; retirar el mismo.</p>
                        <p>* La factura del equipo la recibir&aacute; cuando el equipo este reparado.</p>
                    </div>
                </section>

            </div>
            <div class="col-md-2">
                <td><a href="https://www.instagram.com/" target="_blank"><img src="imagenes/insta.jpg"></a></td><br><br><br>
                <td><a href="https://twitter.com/?lang=es" target="_blank"><img src="imagenes/twitter.jpg"></a></td><br><br><br>
                <td><a href="https://www.facebook.com/" target="_blank"><img src="imagenes/face.jpg"></a></td><br><br><br>
            </div>

        </div>

        <br>

        <?php include("footer.php"); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>