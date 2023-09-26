<?php
	require_once(__DIR__."/../model/membre.php");
	echo implode(",", array_keys($_POST));
	echo implode(",", $_POST);
	if($_POST && $_POST["correu"])
	{
		$titol_missatge = "Error presentant registrant l'usuari";
		$missatge = "Hi ha hagut algun error registrant el teu usuari. Torna-ho a intentar més tard, i si el problema persisteix, avisa a algú de la comissió web, si us plau.";
		$error = true;
		//console_log("valors");
		//console_log($_POST);
		
		$result = registrarUsuari($conn, $_POST);
		//console_log("RESULT");
		//console_log($result);	
		switch($result)
		{
			/*case -2:
				$missatge = "Ja hi ha registrat un vot teu a la base de dades. Anula primer el teu vot original abans d'intentar tornar a votar, si us plau.";
				break;*/
			case -1:
				//$missatge = "El teu vot no s'ha pogut xifrar correctament. Si us plau, avisa a uni administradori";
				break;
			case 1:
				$error = false;
				$titol_missatge = "Usuari registrat correctament";
				$missatge = "El teu usuari està pendent de la revisió i aprovació per part de la Junta. Quan això passi, rebràs un correu per establir la teva contrassenya.";
		}
		
		require_once(__DIR__."/../vista/resposta_ajax_base.php");
	}
	else
	{
		require_once(__DIR__."/../vista/registre.php");
	}
	


?>