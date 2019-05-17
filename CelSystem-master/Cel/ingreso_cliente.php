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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">ATENCI&Oacute;N, LEER!!!</button>

                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <h4>&nbsp;&nbsp;&nbsp; Imprimir la factura antes de retirar &nbsp;&nbsp;&nbsp; el equipo.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="info">
                    <h2><span class="label label-primary">Acceso Cliente</span></h2>
                    <br/>
                    <br/>
                    <form class="form-inline" action="menu_cliente.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail2">N° Cliente:</label>
                            <input type="text" class="form-control" id="pass-user" name="num_cte" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Contrase&ntilde;a:</label>
                            <input type="password" class="form-control" id="pass-user" name="dni" />
                        </div>
                        <button type="submit" class="btn btn-default" name="ok">Ingresar</button>
                    </form>
                    <br/>
                    <br/>
                    <?php
                    if (isset($_GET['error']) == 1) {
                        echo "<div class='alert alert-danger' role='alert'>";
                        echo 'Cliente y/o Contraseña Incorrecta. Vuelva a intentarlo';
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
