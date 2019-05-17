<head>
	
	<meta charset="UTF-8">
</head>
<div id="cuerpo">
	<div id="form" >
		<center>
			<?php	
				include("PHPMailer/class.phpmailer.php");
				include("PHPMailer/class.smtp.php");
                                require("codigo.php");
                                
				$email = $_POST['email'];
				$dni = $_POST['dni'];
				settype($dni, 'integer');
				$nombre = $_POST['nombre'];
				$direccion = $_POST['direccion'];
				$telefono = $_POST['telefono'];

				$encontro = 0;
				$archivo = fopen('clientes.dat','r') or die ("Error");
				while (!feof($archivo)) 
				{
					$linea = fgets($archivo);
					$datos = explode("|", $linea);

					if($datos[0] != null)
					{
						$dniBD = $datos[2];
						settype($dniBD, 'integer');
						
						if ($dni == $dniBD)
						{
							$encontro = 1;
						}
						
						$num_cte = $datos[0];
					}
				}
				fclose($archivo);

				if($encontro == 1)
				{
					echo "<script> alert('Ya existe este cliente');</script>";
					echo "<script> document.location.href='registrarme.php';</script>";
				}
				else
				{
				
					$num_cte = $codA ;//$num_cte + 1;
					
					$archivo = fopen('clientes.dat','a+') or die ("Error");
					fputs($archivo, $num_cte."|".$nombre."|".$dni."|".$direccion."|".$telefono."|".$email."\n");
					fclose($archivo);

					$mail = new PHPMailer();
					$mail->IsSMTP();
					$mail->SMTPAuth = true;
					$mail->SMTPSecure = "ssl";
					$mail->Host = "smtp.gmail.com";
					$mail->Port = 465;
					$mail->Username = "autocontrol16@gmail.com";
					$mail->Password = "autocontrol";

					$mail->From = "cr.ezequiel24@gmail.com";
					$mail->FromName = "celulares";
					$mail->Subject = "Gracias por registrarte";
					//$mail->AltBody = "Para Completar Su Registro Debe Acceder Al Siguiente Enlace.";
					$mail->msgHTML("Datos para ingresar:</p><br>
						<h3>Numero de cliente: $num_cte<br>
						Contraseña: $dni</h1>");

					$mail->AddAddress("$email", "Destinatario");
					$mail->IsHTML(true);

					if(!$mail->Send()) 
					{
					  echo "Error: " . $mail->ErrorInfo;
					} 
					else 
					{
					 echo "<center>Mensaje enviado correctamente<br>";
					 echo "El numero de cliente se envió a la casilla de email indicada<br>";
					 echo "<a href='ingreso_cliente.html'>Ingresar</a></center>";
					  die();
					}
				}			
			?>
		</center>
	</div>
</div>