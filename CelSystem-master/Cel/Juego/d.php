<?php

$rnd_categoria = rand(1, 5);


//TECNOLOGIA
if ($rnd_categoria == 1) {

    $rnd_pregunta = rand(1, 9);


    $arch_tecno = fopen("Preguntas/tecno.dat", "r");
    while (!feof($arch_tecno)) {

        $linea = fgets($arch_tecno);
        $datos = explode("|", $linea);

        $numero_pregunta = $datos[0];




        if ($rnd_pregunta == $numero_pregunta) {

            $pregunta = $datos[1];
            $respuesta_1 = $datos[2];
            $respuesta_2 = $datos[3];
            $respuesta_3 = $datos[4];
            //$_SESSION['respuesta_correcta'] = $datos[5];
            $rc = $datos[5];
            header("location:juego_inicio.php?r1=$respuesta_1&r2=$respuesta_2&r3=$respuesta_3&rc=$rc");
            echo $pregunta . $_SESSION['respuesta_correcta'];
        }
    }

    fclose($arch_tecno);
}


//ENTRETENIMIENTO
if ($rnd_categoria == 2) {
    $rnd_pregunta = rand(1, 9);


    $arch_tecno = fopen("Preguntas/entretenimiento.dat", "r");
    while (!feof($arch_tecno)) {

        $linea = fgets($arch_tecno);
        $datos = explode("|", $linea);

        $numero_pregunta = $datos[0];




        if ($rnd_pregunta == $numero_pregunta) {

            $pregunta = $datos[1];
            $respuesta_1 = $datos[2];
            $respuesta_2 = $datos[3];
            $respuesta_3 = $datos[4];
            //$_SESSION['respuesta_correcta'] = $datos[5];
            $rc = $datos[5];
            header("location:juego_inicio.php?r1=$respuesta_1&r2=$respuesta_2&r3=$respuesta_3&rc=$rc");
            echo $pregunta . $_SESSION['respuesta_correcta'];
        }
    }

    fclose($arch_tecno);
}


//DEPORTES
if ($rnd_categoria == 3) {
    $rnd_pregunta = rand(1, 9);


    $arch_tecno = fopen("Preguntas/deportes.dat", "r");
    while (!feof($arch_tecno)) {

        $linea = fgets($arch_tecno);
        $datos = explode("|", $linea);

        $numero_pregunta = $datos[0];




        if ($rnd_pregunta == $numero_pregunta) {

            $pregunta = $datos[1];
            $respuesta_1 = $datos[2];
            $respuesta_2 = $datos[3];
            $respuesta_3 = $datos[4];
            //$_SESSION['respuesta_correcta'] = $datos[5];
            $rc = $datos[5];
            header("location:juego_inicio.php?r1=$respuesta_1&r2=$respuesta_2&r3=$respuesta_3&rc=$rc");
            echo $pregunta . $_SESSION['respuesta_correcta'];
        }
    }



    fclose($arch_tecno);
}


//VARIEDADES
if ($rnd_categoria == 4) {
    $rnd_pregunta = rand(1, 9);


    $arch_tecno = fopen("Preguntas/variedades.dat", "r");
    while (!feof($arch_tecno)) {

        $linea = fgets($arch_tecno);
        $datos = explode("|", $linea);

        $numero_pregunta = $datos[0];




        if ($rnd_pregunta == $numero_pregunta) {

            $pregunta = $datos[1];
            $respuesta_1 = $datos[2];
            $respuesta_2 = $datos[3];
            $respuesta_3 = $datos[4];
            // $_SESSION['respuesta_correcta'] = $datos[5];
            $rc = $datos[5];
            header("location:juego_inicio.php?r1=$respuesta_1&r2=$respuesta_2&r3=$respuesta_3&rc=$rc");
            echo $pregunta . $_SESSION['respuesta_correcta'];
        }
    }



    fclose($arch_tecno);
}


//ESTUDIO
if ($rnd_categoria == 5) {
    $rnd_pregunta = rand(1, 9);


    $arch_tecno = fopen("Preguntas/estudio.dat", "r");
    while (!feof($arch_tecno)) {

        $linea = fgets($arch_tecno);
        $datos = explode("|", $linea);

        $numero_pregunta = $datos[0];




        if ($rnd_pregunta == $numero_pregunta) {

            $pregunta = $datos[1];
            $respuesta_1 = $datos[2];
            $respuesta_2 = $datos[3];
            $respuesta_3 = $datos[4];
            // $_SESSION['respuesta_correcta'] = $datos[5];
            $rc = $datos[5];
            header("location:juego_inicio.php?r1=$respuesta_1&r2=$respuesta_2&r3=$respuesta_3&rc=$rc");
            echo $pregunta . $_SESSION['respuesta_correcta'];
        }
    }

    fclose($arch_tecno);
}

// unset($rnd_categoria);
// unset($rnd_pregunta);
?>