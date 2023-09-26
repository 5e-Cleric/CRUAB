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
			$_SESSION["permisos"] = obtenirPermisos($conn,$id);
			$cookie_name = "user_id";
			$cookie_value = $id;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			echo '<script type="text/javascript">window.location = "'.$root.'index.php"</script>';
		}

		
	}
	require_once(__DIR__."/../vista/login.php");
	


?>