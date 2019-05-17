<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CelSystem</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/estilos.css"/>
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

        <div>
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
              <div class="col-md-8">
                  <section>
                      <h2><span class="label label-primary">Novedades</span></h2>
                      <br/>
                      <article>
                          <strong>Servicio técnico especializado en reparación de Celulares, Tablets, Notebooks y Netbooks, para todas las marcas y modelos.<br />
                              Reparamos equipos de todas las marcas: Motorola, iPhone, Samsung, Lenovo, etc.<br />
                              Analizamos y presupuestamos tu equipo sin cargo!</strong>
                      </article>
                  <center>
                      <p>
                      <image src="imagenes/inicio.jpg" height="680"/>
                      </p>
                  </center>
                  </section>
              </div>
              <div class="col-md-2">
                <br><br><br><br><br><br><br>
                <div><a href="" target="_self"><img src="imagenes/wsp.png" class="img-fluid"/></a></div><br><!-- para tirarlo para la derecha align="right"-->
                <div><a href="https://www.instagram.com/" target="_blank"><img src="imagenes/instagram.png" class="img-fluid"/></a></div><br>
                <div><a href="https://twitter.com/?lang=es" target="_blank"><img src="imagenes/tw.png" class="img-fluid"/></a></div><br>
                <div><a href="https://www.facebook.com/" target="_blank"><img src="imagenes/facebook.png" class="img-fluid"/></a></div><br>
                <div><a href="https://www.youtube.com/" target="_blank"><img src="imagenes/youtube.png" class="img-fluid"/></a></div><br>
                <div><a href="https://ar.linkedin.com/?trk=guest_homepage-basic_nav-header-logo/" target="_blank"><img src="imagenes/linkedin.png" class="img-fluid"/></a></div><br>
                  <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.776836559474!2d-58.
                          682466585249!3d-34.68558138043839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc
                          0f27de8641f%3A0x5a794b9961d7fe33!2sAlmagro+298%2C+B1716MZF+Libertad%2C+Buenos+Aires!5e0!3m2
                          !1ses!2sar!4v1476321521839" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>-->
              </div>
          </div>
        </div>
        <br>
        <?php include("footer.php"); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
