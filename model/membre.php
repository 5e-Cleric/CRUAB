<?php
function getNomUsuari($conn, $id)
{
	$nom = "";
	$cognoms = "";
	$pseudonim = "";
	$SQLquery="SELECT * FROM `Usuaris` WHERE `ID` =$id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row)
		{
			$nom = $row["Nom"];
			$cognoms = $row["Cognoms"];
			$pseudonim = $row["Pseudonim"];
			if($pseudonim == null)
			{
				$pseudonim = '';
			}
			else
			{
				$pseudonim = '"'.$pseudonim.'" ';
			}
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $nom.' '.$pseudonim.$cognoms;
}

function getMembreActiu($conn, $id)
{
	$actiu = false;
	$SQLquery="SELECT * FROM `Usuaris` WHERE `ID` =$id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row and $row["Actiu"])
		{
			$actiu = true;
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $actiu;
}
function setMembreActiu($conn, $id, $estat)
{
	$SQLquery="UPDATE `Usuaris` SET `Actiu` = $estat WHERE `ID`=$id";
	console_log($SQLquery);
	#echo "<br>";
	$conn->query($SQLquery);
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
function getMembresActius($conn)
{
	$actius = array();
	$SQLquery="SELECT * FROM `Usuaris` WHERE `Actiu` = 1";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	
	if ($result = $conn->query($SQLquery)) 
	{
	    while ($row = $result->fetch_assoc()) 
	    {
	    	array_push($actius,$row["ID"]);
	    }
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $actius;
}

function esJunta($conn,$id)
{
	$SQLquery="SELECT * FROM Llistes WHERE Junta_Actual = 1;";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	$es_junta = false;
	#;
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row && $row["Components"])
		{
			$components = explode(",",$row["Components"]);
			$es_junta = in_array($id, $components);
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $es_junta;
}

function obtenirPermisos($conn,$id)
{
	$SQLquery="SELECT * FROM `Usuaris` WHERE `ID` = $id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	$permisos = [false, false, false, false, false, false, false, false];
	#;
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row && $row["comissions"])
		{
			$components = explode(",",$row["comissions"]);
			foreach ($components as $comissio) 
			{
				$SQLquery="SELECT * FROM Comissions WHERE ID ='$comissio'";
				console_log($SQLquery);
				#echo "<br>";
				//console_log($conn->query($SQLquery));
				#;
				if($result=$conn->query($SQLquery))
				{
					$row = $result->fetch_assoc();
					if($row && $row["Permisos"])
					{
						$r_per = $row["Permisos"];
						$len = strlen($r_per);
						for ($i=0; $i < 8; $i++) { 
							if($len>$i && $r_per[$i] == true){
								$permisos[$i] = true;
							}
						}
					}	
				}
				else
				{
					echo "ERROR: ";
					echo $conn->error;
				}
			}
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $permisos;
}

function getVotUsuari($conn, $id)
{
	$vot = "";
	$SQLquery="SELECT * FROM `Usuaris` WHERE `ID` =$id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row && $row["Ultim_Vot_Xifrat"])
		{
			$vot = $row["Ultim_Vot_Xifrat"];
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $vot;
}
function setVotUsuari($conn, $id, $vot)
{
	$SQLquery="UPDATE `Usuaris` SET `Ultim_Vot_Xifrat` = '".$vot."' WHERE `ID`=$id";
	console_log($SQLquery);
	#echo "<br>";
	$conn->query($SQLquery);
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

function getClauXifrat($id)
{
	return [substr(str_pad($id."_xifrat",16,"-"),0,16), "text_original123"];
}
function setVotXifrat($conn, $id, $vot)
{
	[$clau_xifrat, $vector_inicial] = getClauXifrat($id);
	$vot_xifrat = openssl_encrypt($vot, "AES-128-CBC", $clau_xifrat, 0, $vector_inicial);
	if(setVotUsuari($conn, $id, $vot_xifrat) > 0)
		return 1; //Votat correctament
	return -1; //Problemes votant
}
function getVotDesxifrat($conn, $id)
{
	$vot_xifrat = getVotUsuari($conn, $id);
	[$clau_xifrat, $vector_inicial] = getClauXifrat($id);
	$vot = openssl_decrypt($vot_xifrat, "AES-128-CBC", $clau_xifrat, 0, $vector_inicial);
	if($vot == "contra")
		$vot = -1;
	else if ($vot == "blanc")
		$vot = -2;
	else if ($vot == "nul")
		$vot = -3;
	else
	{
		$int_value = ctype_digit($vot) ? intval($vot) : null;
		if($vot == null or $int_value === null)
			$vot = -3;
	}
	return $vot;
}
function anularVotUsuari($conn, $id)
{
	$SQLquery="UPDATE `Usuaris` SET `Ultim_Vot_Xifrat` = NULL WHERE `ID`=$id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
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
	return 1;
}



?>