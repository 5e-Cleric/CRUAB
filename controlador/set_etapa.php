<?php
	require_once(__DIR__."/../model/eleccions.php");
	$titol_missatge = "Error establint l'etapa de les eleccions";
	$missatge = "Hi ha hagut algun error establint l'etapa de les eleccions. Torna-ho a intentar més tard, i si el problema persisteix, avisa a la comissió web, si us plau.";
	$error = true;
	if($_GET and $_GET["etapa"]!=null  and $_SESSION['user_id'] and  $_SESSION["permisos"][6]==true)
	{
		$result = setEtapaActualEleccions($conn, $_GET["etapa"]);
		switch($result)
		{
			/*case -2:
				$missatge = "Ja hi ha registrat un vot teu a la base de dades. Anula primer el teu vot original abans d'intentar tornar a votar, si us plau.";
				break;*/
			case -1:
				
				break;
			case 1:
				$error = false;
				$titol_missatge = "Etapa establerta correctament";
				$missatge = "La estapa s'ha establert correctament. Ara les eleccions es troben en la etapa ".$_GET["etapa"];
		}
	}
	require_once(__DIR__."/../vista/resposta_ajax_base.php");
?>