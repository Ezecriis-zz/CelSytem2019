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
        <?php include("barra-navegacion.php"); ?>

        <div class="row">
            <div class="col-md-3">
                <!--VACIO-->
            </div>
            <div class="col-md-6">
                <section>

                    <center>
                        <h2><span class="label label-info">Contacto</span></h2><br/>
                        <form action="agrupa.php" method="post">
                            <h2><span class="label label-info">Datos Personales</span></h2><br/>
                            <fieldset><legend></legend>
                                <br/>
                                <input type="text" name="apenom" placeholder="Apellido" /><br/>

                                <input type="text" name="apenom" placeholder="Nombre" /><br/>

                                <input type="text" name="telefono" placeholder="Tel&eacute;fono Fijo" /><br/>

                                <input type="text" name="telefono" placeholder="Tel&eacute;fono Celular" /><br/>

                                <input type="text" name="mail" placeholder="Correo" /><br/>

                            </fieldset>
                            <br>
                            <input type="submit" value="enviar" >
                        </form>
                    </center>
                </section>
            </div>
        </div>
        <br>
        <?php include("footer.php"); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
