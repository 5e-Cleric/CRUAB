<?php
	require_once(__DIR__."/../model/membre.php");
	$titol_missatge = "Error presentant modificant el perfil";
	$missatge = "Hi ha hagut algun error actualitzant el perfil. Torna-ho a intentar més tard, i si el problema persisteix, avisa a uni administradori, si us plau.";
	$error = true;
	if($_POST and $_POST["nom"]!=null and $_SESSION['user_id'])
	{
		//console_log("valors");
		//console_log($_POST);
		
		$result = actualitzarPerfil($conn,$_SESSION['user_id'], $_POST);
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
				$titol_missatge = "Perfil i dades actualitzades correctament";
				$missatge = "Les teves dades s'han guardat i actualitzat correctament. Per veure-les, actualitza la pàgina.";
		}
	}
	require_once(__DIR__."/../vista/resposta_ajax_base.php");
?>