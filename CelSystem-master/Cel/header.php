<header>
    <div class="container-fluid container-header">
        <div class="row">
            <div class="col-md-2">
          <!--VACIO-->
            </div>
            <div class="col-md-6">
               <!--<div id="escudo"><image src="img/escudo.jpg" width="100"/>-->
                <image src="imagenes/logo.jpg"/>
                <!-- <h6>CELULARES, LA NUEVA VIDA DEL SIGLO XXI...</h6>-->
            </div>
            <div class="col-md-2">
                <image src="imagenes/word.jpeg" width="243"/>
            </div>
        </div>
    </div> 
    <script type="text/javascript">

        var fecha = new Date();
        var anio = fecha.getYear();
        if (anio < 1000)
            anio += 1900;
        var dia = fecha.getDay();
        var mes = fecha.getMonth();
        var diam = fecha.getDate();
        if (diam < 10)
            diam = "0" + diam;
        var diavec = new Array("Domingo", "Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "S&aacute;bado");
        var mesvec = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        document.write("<small><font color='black' face='Arial'>" + diavec[dia] + " " + diam + " de " + mesvec[mes] + " de " + anio + "</font></small>");
    </script>
</div>    
</header>
