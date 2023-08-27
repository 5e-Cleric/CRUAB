<?php
function getLlistesEleccionsActives($conn)
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
		if($row and $row["Llistes"])
			$llistes = explode(",",$row["Llistes"]);
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}

	return $llistes;
}
function getLlistesNoRevisades($conn, $id_eleccions)
{
	$llistes = array();
	$SQLquery = "SELECT * FROM `Llistes` WHERE `ID_Eleccions` = $id_eleccions AND `Estat` = 0";

	console_log($SQLquery);
	#echo "<br>";
	#console_log($conn->query($SQLquery));
	
	if ($result = $conn->query($SQLquery)) 
	{
	    while ($row = $result->fetch_assoc()) 
	    {
	    	array_push($llistes,$row["ID"]);
	    }
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $llistes;
}
function setEstatLlista($conn, $id, $estat, $id_eleccions)
{
	$llistes = getLlistesEleccionsActives($conn);
	if(!in_array($id, $llistes) and $estat == 1)
	{
		array_push($llistes, $id);
		$new_llistes = implode(",", $llistes);
		$SQLquery = "UPDATE `Eleccions` SET `Llistes` = '".$new_llistes."' WHERE `ID` = $id_eleccions";
		console_log($SQLquery);
		#echo "<br>";
		$conn->query($SQLquery);
		#;
		if($conn -> affected_rows != 1)
		{
			echo "ERROR: ";
			echo $conn->error;
			return -1;
		}

	}

	$SQLquery = "UPDATE `Llistes` SET `Estat` = $estat WHERE `ID` = $id";
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

function setLlistaGuanyadora($conn, $id_llista, $id_eleccions)
{
	$SQLquery = "UPDATE `Llistes` SET `Junta_Actual` = 0 WHERE `Junta_Actual` = 1";
	console_log($SQLquery);
	#echo "<br>";
	$conn->query($SQLquery);
	#;
	if(!$conn -> affected_rows == 1)
	{
		echo "ERROR: ";
		echo $conn->error;
		return -1;
	}
	$SQLquery = "UPDATE `Llistes` SET `Guanyadora` = 1, `Junta_Actual` = 1 WHERE `ID` = $id_llista";
	console_log($SQLquery);
	#echo "<br>";
	$conn->query($SQLquery);
	#;
	if(!$conn -> affected_rows == 1)
	{
		echo "ERROR: ";
		echo $conn->error;
		return -1;
	}
	$SQLquery = "UPDATE `Etapes_Eleccions` SET `Actives` = 0 WHERE `ID_Eleccions` = $id_eleccions";
	console_log($SQLquery);
	#echo "<br>";
	$conn->query($SQLquery);
	#;
	if(!$conn -> affected_rows == 1)
	{
		echo "ERROR: ";
		echo $conn->error;
		return -1;
	}

	return 1;
}

function getMembresLlista($conn, $id)
{
	$membres = "";
	$SQLquery = "SELECT * FROM `Llistes` WHERE `ID` =$id";
	console_log($SQLquery);
	#echo "<br>";
	//console_log($conn->query($SQLquery));
	
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row and $row["Components"])
		{
			$membres = $row["Components"];
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $membres;
}
function getNomLlista($conn, $id)
{
	$nom = "";
	$SQLquery = "SELECT * FROM `Llistes` WHERE `ID` =$id";

	console_log($SQLquery);
	#echo "<br>";
	#console_log($conn->query($SQLquery));
	
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row and $row["Nom"])
		{
			$nom = $row["Nom"];
		}	
	}
	else
	{
		echo "ERROR: ";
		echo $conn->error;
	}
	return $nom;
}
function presentarLlista($conn, $id_eleccions, $carrecs, $userID, $nom_llista)
{
	//console_log($carrecs);
	//console_log($id_eleccions);
	$carrecs = "'".implode(',', $carrecs)."'";
	$nom_llista = "'".$nom_llista."'";
	$SQLquery = "INSERT INTO `Llistes` (`ID_Eleccions`, `Presentada_per`, `Nom`, `Components`) VALUES ($id_eleccions, $userID, $nom_llista, $carrecs)";
	console_log($SQLquery);
	$conn->query($SQLquery);
	#echo "<br>";
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
?>