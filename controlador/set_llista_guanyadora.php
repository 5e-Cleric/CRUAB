<?php
	require_once(__DIR__."/../model/llistes.php");
	require_once(__DIR__."/../model/eleccions.php");
	$titol_missatge = "Error seleccionant la llista";
	$missatge = "Hi ha hagut algun error establint la llista guanyadora. Torna-ho a intentar més tard, i si el problema persisteix, avisa a la comissió web, si us plau.";
	$error = true;
	if($_GET and $_GET["llista"]!=null  and $_SESSION['user_id'] and  $_SESSION["permisos"][6]==true)
	{
		$result = setLlistaGuanyadora($conn, $_GET["llista"], getIDEleccions($conn));
		switch($result)
		{
			/*case -2:
				$missatge = "Ja hi ha registrat un vot teu a la base de dades. Anula primer el teu vot original abans d'intentar tornar a votar, si us plau.";
				break;*/
			case -1:
				
				break;
			case 1:
				$error = false;
				$titol_missatge = "Lista seleccionada correctament";
				$missatge = "La llista ".getNomLlista($conn, $_GET["llista"])." ha sigut correctament establerta com la guanyadora de les eleccions i com a nova junta. Si això és un error, contacta amb la comissió web.";
		}
	}
	require_once(__DIR__."/../vista/resposta_ajax_base.php");
?>