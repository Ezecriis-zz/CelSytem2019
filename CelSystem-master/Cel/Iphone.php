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

            </div>

            <div  class="col-md-6" id="centro">
                <table>
                    <tr>
                        <td><img src="Catalogo/iph3.jpg" width="275px" height="200px"/></td>
                        <td><img src="Catalogo/iPhone2.jpg" width="275px" height="200px"/></td>
                        <td><img src="Catalogo/iphone.jpg" width="275px" height="200px"/></td>
                    </tr>

                    <tr>
                        <td><img src="Catalogo/iphone-5.jpg" width="275px" height="200px"/></td>
                        <td><img src="Catalogo/iphone-6.jpg" width="275px" height="200px"/></td>
                        <td><img src="Catalogo/iphone7.jpg" width="275px" height="200px"/></td>

                    </tr>
                    <tr>
                        <td><img src="Catalogo/ipho.jpg" width="275px" height="200px"/></td>
                        <td><img src="Catalogo/gold.jpg" width="275px" height="200px"/></td>
                        <td><img src="Catalogo/goldi.jpg" width="275px" height="200px"/></td>

                    </tr>
                </table>
            </div>
        </div>

        <?php include("footer.php"); ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
