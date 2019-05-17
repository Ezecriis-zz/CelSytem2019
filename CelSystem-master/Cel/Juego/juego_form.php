<?php
unset($_GET['responder']);
echo"<form action = '#' method = 'get' name = 'formulario_preguntas'>";
echo"<input type = 'radio' name = 'preg' value = 'a'/>$respuesta_1";
echo"<br/><br/>";
echo"<input type = 'radio' name = 'preg' value = 'b'/>$respuesta_2";
echo"<br/><br/>";
echo"<input type = 'radio' name = 'preg' value = 'c'/>$respuesta_3";
echo"<br/><br/>";
echo"<input type = 'submit' name = 'responder' value = 'Responder'/>";
echo"</form>";



?>