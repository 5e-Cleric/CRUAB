<main>
<?php
require_once(__DIR__."/../model/eleccions.php");
require_once(__DIR__."/../model/llistes.php");
require_once(__DIR__."/../model/membre.php");

?>
<?php
	$gestio = false;
	if(comprovaEleccionsActives($conn))
	{
		$etapa = getEtapaActualEleccions($conn);
		$id_eleccions = getIDEleccions($conn);
		$membre_actiu = getMembreActiu($conn,$_SESSION["user_id"]);

		/*
		ETAPES ELECCIONS
		0 Declarar-se membre actiu
		1 Comprovar cens
		2 Presentar candidatura
		3 Votació
		4 Resultats
		*/
		switch($etapa)
		{
			case 0:
				require_once(__DIR__."/../vista/eleccions_actiu_inactiu.php");
				break;

			case 1:
				$actius = getMembresActius($conn);
				require_once(__DIR__."/../vista/eleccions_cens.php");
				break;

			case 2:
				$actius = getMembresActius($conn);
				require_once(__DIR__."/../vista/eleccions_presentar_candidatura.php");
				break;

			case 3:
				$llistes = getLlistesEleccionsActives($conn);
				$membres_llistes = array();
				foreach ($llistes as $llista) {
					array_push($membres_llistes,getMembresLlista($conn, $llista));
				}
				$numero_membres = array();
				foreach ($membres_llistes as $llista) {
					array_push($numero_membres,sizeof(explode(",",$llista)));
				}
				$membres_maxims = max($numero_membres);
				require_once(__DIR__."/../vista/eleccions_votar.php");
				break;
			case 4:

				$llistes = getLlistesEleccionsActives($conn);
				$membres_llistes = array();
				foreach ($llistes as $llista) {
					array_push($membres_llistes,getMembresLlista($conn, $llista));
				}
				$numero_membres = array();
				foreach ($membres_llistes as $llista) {
					array_push($numero_membres,sizeof(explode(",",$llista)));
				}
				$membres_maxims = max($numero_membres);
				$vots = contarVots($conn);
				if($vots == -1)
				{
					//ERROR
				}
				else
				{
					require_once(__DIR__."/../vista/eleccions_resultats.php");
				}
				break;
			default:
				require_once(__DIR__."/../vista/eleccions_actiu_inactiu.php");
				break;
		}
	}
	else
	{
		
		require_once(__DIR__."/../vista/eleccions_no_actives.php");
	}
?>
</main>