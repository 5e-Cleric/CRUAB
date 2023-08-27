<?php
	require_once(__DIR__."/../model/eleccions.php");
	$titol_missatge = "Error en el procés de votació";
	$missatge = "Hi ha hagut algun error durant la votació. Torna-ho a intentar més tard, i si el problema persisteix, avisa a la comissió web, si us plau.";
	$error = true;
	if($_GET and $_GET["vot"]!=null and $_SESSION['user_id'])
	{
		$result = votar($conn, $_SESSION['user_id'], $_GET["vot"]);
		switch($result)
		{
			/*case -2:
				$missatge = "Ja hi ha registrat un vot teu a la base de dades. Anula primer el teu vot original abans d'intentar tornar a votar, si us plau.";
				break;*/
			case -2:
				$missatge = "El teu vot no s'ha pogut xifrar correctament. Si us plau, avisa a uni administradori";
				break;
			case 1:
				$error = false;
				$titol_missatge = "Vot registrat correctament";
				$missatge = "El teu vot ha sigut xifrat i registrat correctament. Recorda que el pots canviar en qualsevol moment anterior a la finalització de les eleccions.";
		}
	}
	require_once(__DIR__."/../vista/resposta_ajax_base.php");
?>