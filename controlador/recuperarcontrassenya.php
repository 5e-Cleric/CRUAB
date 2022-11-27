<?php
	require_once(__DIR__."/model/recuperarcontrassenya.php");

	$correu_especificat = false;
	$actualitzacio_interna = false;
	if($_GET["email"])
	{
		$correu_especificat = true;
	}
	if($_POST["email"])
	{
		$actualitzacio_interna = true;
	}


	if($actualitzacio_interna)
	{
		$email = assegurarInputs($_POST["email"]);
		if($_POST["contrassenya"])
		{
			$codi = assegurarInputs($_POST["code"]);
			$codi_correcte = comprovarCodiValid($conn, $email, $codi);
			if($codi_correcte)
			{
				setContrassenya($conn, $email, assegurarInputs($_POST["contrassenya"]);
			}
		}
		else
		{
			
			checkCorreuEnviar($conn, $email);
		}
	}
	else if($correu_especificat)
	{
		$email = assegurarInputs($_GET["email"]);
		$codi = assegurarInputs($_GET["code"]);

		$codi_correcte = comprovarCodiValid($conn, $email, $codi);
		
		$missatge_recuperar = "Recuperar Contrassenya"; 
		$missatge_formulari_enviat = "Petició rebuda. Si el correu està registrat, hi enviarem un unllaç per restablir la contrassenya."
		require_once(__DIR__."/vista/recuperarcontrassenya_usuari.php");
	}
	else
	{
		$missatge_recuperar = "Recuperar Contrassenya"; 
		$missatge_formulari_enviat = "Petició rebuda. Si el correu està registrat, hi enviarem un unllaç per restablir la contrassenya."
		require_once(__DIR__."/vista/recuperarcontrassenya_general.php");
	}

?>