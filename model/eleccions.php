<?php
	function creaEleccions($conn, $convocatoria, $fi_etapes)
	{
		$id_eleccions = -1;
		$SQLquery = "INSERT INTO `Eleccions` (`Any`, `Convocatoria`) VALUES (date('Y'), $convocatoria)";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$id_eleccions = $conn->insert_id;
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}
		if ($id_eleccions == -1)
		{
			echo "Error durant la creació de la convocatoria d'eleccions.";
		}
		else
		{
			$dades_eleccions = fopen("eleccions_".$id_eleccions.".txt", "w") or die("El fitxer de les eleccions no es pot crear");
			for($cnt=0; $cnt<sizeof()($fi_etapes); $cnt++)
			{
				fwrite($myfile, $cnt."_".$fi_etapes[$cnt]."\n");
			}
			fclose($dades_eleccions);


			$SQLquery="INSERT INTO `Etapes_Eleccions` (`ID_Eleccions`, `Actives`, `Etapa`) VALUES ($id_eleccions, '1', '0')";
			console_log($SQLquery);
			#echo "<br>";
			//console_log($conn->query($SQLquery));
			#;
			if($result=$conn->query($SQLquery))
			{
			}
			else
			{
				echo "ERROR: ";
				echo $conn->error;
			}
		}
	}

	function comprovaEleccionsActives($conn)
	{
		$actives = false;
		$SQLquery = "SELECT * FROM `Etapes_Eleccions` WHERE `Actives`= 1";
		console_log($SQLquery);
		//console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$row = $result->fetch_assoc();
			if($row)
				$actives=true;
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}

		return $actives;
	}
	function getEtapaActualEleccions($conn)
	{
		$etapa = -1;
		$SQLquery = "SELECT * FROM `Etapes_Eleccions` WHERE `Actives`=1";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$row = $result->fetch_assoc();
			if($row and $row["Etapa"])
				$etapa = $row["Etapa"];
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}

		return $etapa;
	}
	function getIDEleccions($conn)
	{
		$id = -1;
		$SQLquery = "SELECT * FROM `Etapes_Eleccions` WHERE `Actives`=1";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$row = $result->fetch_assoc();
			console_log($row);
			if($row and $row["ID_Eleccions"])
				$id = $row["ID_Eleccions"];
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}

		return $id;
	}
	function getVotsEleccionsActives($conn)
	{
		$llistes = "";
		$SQLquery = "SELECT * FROM `Etapes_Eleccions` Et INNER JOIN `Eleccions` El WHERE Et.Actives=1 and Et.ID_Eleccions=El.ID";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$row = $result->fetch_assoc();
			if($row and $row["Vots"])
				$llistes = explode(",",$row["Vots"]);
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}

		return $llistes;
	}
	function setVotsEleccionsActives($conn, $vots)
	{
		$SQLquery = "UPDATE `Etapes_Eleccions` Et INNER JOIN `Eleccions` El SET `Vots` = '".implode(",",$vots)."' WHERE Et.Actives=1 and Et.ID_Eleccions=El.ID";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		if($conn -> affected_rows == 1)
		{
			return 1;
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
			return -1;
		}

		return -1;
	}
	function setEtapaActualEleccions($conn, $etapa)
	{
		$SQLquery = "UPDATE `Etapes_Eleccions` SET `Etapa` = $etapa WHERE `Actives`=1";
		console_log($SQLquery);
		#echo "<br>";
		$conn->query($SQLquery);
		#;
		if($conn -> affected_rows == 1)
		{
			return 1;
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
			return -1;	
		}

		return -1;
	}
	function setEleccionsInactives($conn)
	{
		$SQLquery = "UPDATE `Etapes_Eleccions` SET Actives = '0' WHERE `Actives`=1";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		if($conn -> affected_rows == 1)
		{

		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}

	}
	function comprovarContador($conn)
	{
		$etapes_totals = 5;
		/*
		ETAPES ELECCIONS
		0 Declarar-se membre actiu
		1 Comprovar cens
		2 Presentar candidatura
		3 Votació
		4 Resultats
		*/
		$etapa_actual = getEtapaActualEleccions($conn);
		if($etapa_actual == -1)
			return;
		$id = getIDEleccions($conn);
		$dades_eleccions = fopen("eleccions_".$id.".txt", "r") or die("El fitxer de les eleccions no existeix o no es troba.");
		$cnt = 0;
		$row = fgets($dades_eleccions);
		while($cnt < $etapa_actual)
		{
			$cnt++;
			$row = fgets($dades_eleccions);
		}
		fclose($dades_eleccions);
		$format = 'Y-m-d H:i:s';
		$data_fi_etapa = DateTimeImmutable::createFromFormat($format, explode("_",$row)[1]);
		if ($data_fi_etapa < DateTimeImmutable::createFromFormat($format, date($format)))
		{
			setEtapaActualEleccions($conn, $etapa_actual+1);
			if($etapa_actual+1 == $etapes_totals)
			{
				setEleccionsInactives($conn);
			}
		}
	}

	function contarVots($conn)
	{
		require_once(__DIR__."/membre.php");
		$SQLquery = "SELECT * FROM `Usuaris` WHERE `Ultim_Vot_Xifrat` IS NOT NULL";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		$vots = -1;
		if($result=$conn->query($SQLquery))
		{
			$vots = array();
			console_log("Aqui arriba");
			while($row = $result->fetch_assoc())
			{
				if($row)
				{
					console_log("Aqui també");
					if($row["Ultim_Vot_Xifrat"] and $row["ID"])
					{
						$vot = getVotDesxifrat($conn, $row["ID"]);
						console_log($vot);
						if($vot > -1)
						{
							if(array_key_exists($vot, $vots))
								$vots[$vot] += 1;
							else
								$vots[$vot] = 1;
						}
						else if($vot==-1)
						{
							if(array_key_exists("contra", $vots))
								$vots["contra"] += 1;
							else
								$vots["contra"] = 1;
						}
						else if($vot==-2)
						{
							if(array_key_exists("blanc", $vots))
								$vots["blanc"] += 1;
							else
								$vots["blanc"] = 1;
						}
						else if($vot==-3)
						{
							if(array_key_exists("nul", $vots))
								$vots["nul"] += 1;
							else
								$vots["nul"] = 1;
						}
					}
				}
				else
				{
					break;
				}
			}

		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}
		return $vots;
	}
	function votar($conn, $id_usuari, $index_llista)
	{
		require_once(__DIR__."/membre.php");
		/*if(getVotUsuari($conn, $id_usuari) != null)
		{
			return -2; //Vot ja existent
		}
		else
		{*/
			//$vots = getVotsEleccionsActives($conn);
			//$vots[$index_llista] += 1;
			//if(setVotsEleccionsActives($conn, $vots) > 0)
			//{
				if(setVotXifrat($conn, $id_usuari, $index_llista) > 0)
					return 1; //Votat correctament
				else
					return -2; //Problemes votant
			//}
			//else
			//	return -1; //Problemes votant
		//}
	}
	function anularVot($conn, $id_usuari)
	{
		require_once(__DIR__."/membre.php");
		$vot = anularVotUsuari($conn, $id_usuari);
		if($vot == -1)
		{
			return -2; //Vot xifrat no existent
		}
		else
		{
			//$vots = getVotsEleccionsActives($conn);
			//$vots[$vot] -= 1;
			//if(setVotsEleccionsActives($conn, $vots) > 0)
			//{
				return 1; //Vot anulat correctament
			//}
			//else
			//	return -1; //Problemes anulant votant

		}

	}

?>