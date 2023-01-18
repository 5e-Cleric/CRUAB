<?php
	require_once(__DIR__."/../model/membre.php");
	require_once(__DIR__."/../model/login.php");
	$missatge_error_login="";
	$email = "exemple@cruab.cat";
	if($_POST && $_POST["email"] && $_POST["password"] )
	{
		$email = assegurarInputs($_POST["email"]);
		[$id, $es_junta] = comprovaUsuari($conn,$email,assegurarInputs($_POST["password"]));
		if($id == -1)
		{
			$missatge_error_login="Usuari o Contrassenya equivocats";
		}
		else
		{
			$_SESSION["user_id"] = $id;
			$_SESSION["es_junta"] = $es_junta;
			echo '<script type="text/javascript">window.location = "'.$root.'index.php"</script>';
		}

		
	}
	require_once(__DIR__."/../vista/login.php");
	


?>