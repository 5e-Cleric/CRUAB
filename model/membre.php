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
function getCorreuUsuari($conn, $id)
{
	$correu = "";
	$SQLquery="SELECT * FROM `Usuaris` WHERE `ID` =$id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row)
		{
			$correu = $row["Email"];
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $correu;
}
function getDadesUsuari($conn, $id)
{
	$dades = -1;
	$SQLquery="SELECT * FROM `Usuaris` WHERE `ID` =$id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row)
		{
			$dades = $row;
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $dades;
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
	return 1;
}

function actualitzarPerfil($conn, $id, $dades)
{
	$nom = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['nom'])));
	$cognoms = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['cognoms'])));
	$sobrenom = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['sobrenom'])));
	$correu = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['correu'])));
	$genere = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['genere'])));
	$pronoms = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['pronoms'])));
	$naixement = $dades['naixement'];
	$ingres = $dades['ingres'];
	$telefon = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['telefon'])));
	$facultat = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['facultat'])));
	$curs = $dades['curs'];
	$pdi_pas = $dades['pdi_pas']=="true"?1:0;
	$SQLquery="UPDATE `Usuaris` SET `Nom`='$nom', `Cognoms`='$cognoms', `Pseudonim`='$sobrenom', `Email`='$correu', `Genere`='$genere', `Pronoms`='$pronoms', `Data_Naixement`='$naixement', `Any_Ingres`=$ingres, `Telefon`='$telefon', `Facultat`='$facultat', `Curs`='$curs', `PDI_Pas`=$pdi_pas WHERE `ID`=$id";
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
		console_log($conn->error);
		echo $conn->error;
		return -1;
	}
	return 1;
}

function registrarUsuari($conn, $dades)
{
	$nom = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['nom'])));
	$cognoms = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['cognoms'])));
	$correu = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['correu'])));
	$genere = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['genere'])));
	$pronoms = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['pronoms'])));
	$naixement = $dades['naixement'];
	$ingres = date('Y');
	$telefon = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['telefon'])));
	$facultat = str_replace("'"," ",str_replace("\\","",assegurarInputs($dades['facultat'])));
	$curs = $dades['curs'];
	$pdi_pas = $dades['pdi_pas']=="true"?1:0;
	$whatsapp = $dades['whatsapp']=="true"?1:0;
	$telegram = $dades['telegram']=="true"?1:0;
	$grups = $telegram.$whatsapp;

	$SQLquery = "INSERT INTO `Usuaris` (`Nom`, `Cognoms`, `Actiu`, `Validat`, `Email`, `Telefon`, `Data_Naixement`, `Any_Ingres`, `Genere`, `Facultat`, `Curs`, `PDI_Pas`, `Pronoms`, `Grups`) VALUES ('$nom', '$cognoms', '1', '0', '$correu', '$telefon', '$naixement', '$ingres', '$genere', '$facultat', '$curs', '$pdi_pas', '$pronoms', '$grups');";
	console_log($SQLquery);
	#echo "<br>";
	$conn->query($SQLquery);
	if($conn -> affected_rows == 1)
	{
		$msg = "<html><head><title>Registre Usuari ".$nom." ".$cognoms."</title></head><body>";
		$msg .= 'El teu usuari ha sigut registrat correctament i està pendent de revisió i aprovació.';
		$msg .= "<br><br>".'Tu usuario ha sido registrado correctamente y está pendiente de revisión y aprobación.';
		$msg .= "<br><br>".'Your user has been registered correctly and is pending review and approval.';
		$msg .= "</body></html>";
		$msg = wordwrap($msg,70);
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: <no_contesteu@cruab.cat>' . "\r\n";
		$headers .= 'Reply-to: <no_contesteu@cruab.cat>' . "\r\n";
		if(mail($correu, "Registre Usuari ".$nom." ".$cognoms, $msg, $headers))#, "", "no_contesteu@cruab.cat", "Renunciode-36"))
		{
			echo "Correu enviant correctament a l'usuari.";
			mail("juntacruab@gmail.com", "Registre Usuari ".$nom." ".$cognoms, $msg, $headers);
		}
		return 1;

	}
	else
	{
		echo "ERROR: ";
		console_log($conn->error);
		echo $conn->error;
		return -1;
	}
	return 1;
}



?>