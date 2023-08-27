<?php
	require_once(__DIR__."/../model/llistes.php");
	require_once(__DIR__."/../model/eleccions.php");
	$titol_missatge = "Error presentant la llista";
	$missatge = "Hi ha hagut algun error durant la presentació de la llista. Torna-ho a intentar més tard, i si el problema persisteix, avisa a uni administradori, si us plau.";
	$error = true;
	if($_POST and $_POST["nom"]!=null and $_POST["presidenti"]!=null and $_POST["vicepresidenti"]!=null and $_POST["secretari"]!=null and $_POST["tresoreri"]!=null and $_SESSION['user_id'])
	{
		//console_log("valors");
		//console_log($_POST);
		$carrecs = [$_POST["presidenti"], $_POST["vicepresidenti"], $_POST["secretari"], $_POST["tresoreri"]];
		foreach($_POST as $key => $value)
		{
			if(substr($key, 0, 6 )  == "vocal_")
			{
				array_push($carrecs, $_POST[$key]);
			}
		}
		$result = presentarLlista($conn, getIDEleccions($conn), $carrecs, $_SESSION['user_id'], $_POST["nom"]);//votar($conn, $_SESSION['user_id'], $_GET["vot"]);
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
				$titol_missatge = "Llista registrada correctament";
				$missatge = "La teva llista ha sigut registrada correctament. La comissió electoral la revisarà, i si tot és correcte, serà acceptada per les eleccions.";
		}
	}
	require_once(__DIR__."/../vista/resposta_ajax_base.php");
?>