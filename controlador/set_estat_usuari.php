<?php
	require_once(__DIR__."/../model/membre.php");
	$titol_missatge = "Error modificant el teu estat al cens";
	$missatge = "El teu estat al cens no s'ha pogut modificar correctament. Intenta-ho més tard, i si l'error es manté, si us plau, avisa a la comissió web.";
	$error = true;
	if($_GET and $_GET["estat"]!=null and $_SESSION['user_id'])
	{
		$result = setMembreActiu($conn, $_SESSION['user_id'], $_GET["estat"]);
		switch($result)
		{
			/*case -2:
				$missatge = "Ja hi ha registrat un vot teu a la base de dades. Anula primer el teu vot original abans d'intentar tornar a votar, si us plau.";
				break;*/
			case -1:
				$titol_missatge = "Error modificant el teu estat al cens";
				$missatge = "El teu estat al cens no s'ha pogut modificar correctament. Intenta-ho més tard, i si l'error es manté, si us plau, avisa a uni administradori";
				break;
			case 1:
				$error = false;
				$titol_missatge = "Modificació correcta";
				$estat = getMembreActiu($conn, $_SESSION["user_id"]) ?  "actiu" : "inactiu";
				$missatge = "El teu estat al cens ha sigut modificat correctament. Ara constes com a ".$estat." al cens";
		}
	}
	require_once(__DIR__."/../vista/resposta_ajax_base.php");
?>