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
            <div class="col-md-2">
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
                <section>
                  <center>
                    <h2><span class="label label-success">Sobre Nosotros</span></h2>
                    <br/>
                    <article>
                        <strong>Somos una organizacion que presta sus servicios, una breve explicacion..<p>
                                El concepto de técnico está vinculado al griego téchne, que puede traducirse
                                como “ciencia” o “arte”. Esta noción hace referencia a un procedimiento que
                                tiene como objetivo la obtención de un cierto resultado o fin. Al ejecutar
                                conocimientos técnicos, se sigue un conjunto de reglas y normas que se utiliza
                                como medio para alcanzar un fin.</strong>
                        <p>Espero que podamos solucionar su problema, no dude en consultar todas sus dudas.
                    </center>
                    </article>
                    <image src="imagenes/1.jpg" width="900" align="right"/>
                </section>
            </div>
            <div class="col-md-2">

                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.776836559474!2d-58.
                        682466585249!3d-34.68558138043839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc
                        0f27de8641f%3A0x5a794b9961d7fe33!2sAlmagro+298%2C+B1716MZF+Libertad%2C+Buenos+Aires!5e0!3m2
                        !1ses!2sar!4v1476321521839" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>-->
            </div>
        </div>
        <br>
    <?php include("footer.php"); ?>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
