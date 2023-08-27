<main>
<?php
require_once(__DIR__."/../model/eleccions.php");
require_once(__DIR__."/../model/llistes.php");
require_once(__DIR__."/../model/membre.php");

?>
<?php
	$gestio = true;
	if(comprovaEleccionsActives($conn))
	{
		$etapa = getEtapaActualEleccions($conn);
		$id_eleccions = getIDEleccions($conn);

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
				$seguent_etapa = 1;
				$anterior_etapa = 0;
				require_once(__DIR__."/../vista/eleccions_canviar_etapa.php");
				break;

			case 1:
				$seguent_etapa = 2;
				$anterior_etapa = 0;
				require_once(__DIR__."/../vista/eleccions_canviar_etapa.php");
				break;

			case 2:
				$llistes = getLlistesNoRevisades($conn, getIDEleccions($conn));
				$membres_llistes = array();
				foreach ($llistes as $llista) {
					array_push($membres_llistes,getMembresLlista($conn, $llista));
				}
				$numero_membres = array();
				foreach ($membres_llistes as $llista) {
					array_push($numero_membres,sizeof(explode(",",$llista)));
				}
				$membres_maxims = sizeof($numero_membres) > 0 ? max($numero_membres) : 0;
				require_once(__DIR__."/../vista/eleccions_revisar_candidatures.php");

				$seguent_etapa = 3;
				$anterior_etapa = 1;
				require_once(__DIR__."/../vista/eleccions_canviar_etapa.php");
				break;

			case 3:
				$seguent_etapa = 4;
				$anterior_etapa = 2;
				require_once(__DIR__."/../vista/eleccions_canviar_etapa.php");
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
				$seguent_etapa = 4;
				$anterior_etapa = 3;
				require_once(__DIR__."/../vista/eleccions_canviar_etapa.php");
				break;

			default:
				require_once(__DIR__."/../vista/eleccions_no_actives.php");
				break;
		}
	}
	else
	{
		
		require_once(__DIR__."/../vista/eleccions_no_actives.php");
	}
?>
</main>