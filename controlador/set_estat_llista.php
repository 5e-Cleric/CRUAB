<?php
	require_once(__DIR__."/../model/llistes.php");
	require_once(__DIR__."/../model/eleccions.php");
	$titol_missatge = "Error modificant l'estat de la llista";
	$missatge = "Hi ha hagut algun error durant la modificació de l'estat de la llista. Torna-ho a intentar més tard, i si el problema persisteix, avisa a la comissió web, si us plau.";
	$error = true;
	if($_GET and $_GET["id"]!=null and $_GET["estat"]!=null and $_SESSION['user_id'] and  $_SESSION["permisos"][6]==true)
	{
		$result = setEstatLlista($conn, $_GET["id"], $_GET["estat"], getIDEleccions($conn));
		switch($result)
		{
			/*case -2:
				$missatge = "Ja hi ha registrat un vot teu a la base de dades. Anula primer el teu vot original abans d'intentar tornar a votar, si us plau.";
				break;*/
			case -1:
				
				break;
			case 1:
				$error = false;
				$titol_missatge = "Estat de la llista modificat correctament";
				$estat = $_GET["estat"]==1 ? "Acceptada" : "Denegada";
				$missatge = "L'estat de la llista ha sigut correctament modificat a ".$estat.". Si això és un error, contacta amb la comissió web.";
		}
	}
	require_once(__DIR__."/../vista/resposta_ajax_base.php");
?>