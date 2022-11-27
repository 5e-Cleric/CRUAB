<?php
	function comprovarCodiValid($conn, $email, $codi)
	{
		
		$SQLquery="SELECT * FROM `Usuaris` WHERE `Email`='$email'";
		#console_log($SQLquery);
		#echo "<br>";
		#console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$row = $result->fetch_assoc();
			if($row["Codi_temporal"] == $codi)
			{
				return true;
			}
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}
		return false;
	}
	function setContrassenya($conn, $email, $contrassenya)
	{
		$codi =  hash("sha256",random_int(0, 4096));
		$SQLquery="UPDATE `Usuaris` SET Contrassenya = '$contrassenya', Codi_temporal = '$codi' WHERE `Email`='$email'";
		console_log($SQLquery);
		console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			return true;
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}
		return false;
	}

	function checkCorreuEnviar($conn, $email)
	{
		$SQLquery="SELECT * FROM `Usuaris` WHERE `Email`='$email'";
		#console_log($SQLquery);
		#console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$codi =  hash("sha256",random_int(0, 4096));
			$SQLquery = "UPDATE `Usuaris` SET Codi_temporal = '$codi' WHERE `Email`='$email'";
			console_log($SQLquery);
			if($result=$conn->query($SQLquery))
			{
				$url = "https://cruab.cat/recuperarcontrassenya.php?email=".$email."&codi=".$codi;
				$msg = "<html><head><title>Recuperacio Contrassenya</title></head><body>";
				$msg .= 'Clica en el següent enllaç <a href="'.$url.'">Recuperar Contrassenya</a> o copia\'l en el teu navegador:<br>'.$url;
				$msg .= "<br><br>".'Clica en el siguiente enlace <a href="'.$url.'">Recuperar Contraseña</a> o copialo en tu navegador:<br>'.$url;
				$msg .= "<br><br>".'Click on the following link <a href="'.$url.'">Restore Password</a> or copy it in your browser:<br>'.$url;
				$msg .= "</body></html>";
				$msg = wordwrap($msg,70);
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: <no_contesteu@cruab.cat>' . "\r\n";
				$headers .= 'Reply-to: <no_contesteu@cruab.cat>' . "\r\n";
				if(mail($email, "Recuperacio contrassenya", $msg, $headers))#, "", "no_contesteu@cruab.cat", "Renunciode-36"))
				{
					return true;#echo "The email($email_subject) was successfully sent.";
				}
				else
				{
					return false;
				}
				return true;
			}
			else
			{
				echo "ERROR: ";
				echo $conn->error;
			}
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}
		return false;
	}

?>