<?php
function esJunta($conn,$id)
{
	$SQLquery="SELECT * FROM Llistes WHERE Junta_Actual=1;";
	console_log($SQLquery);
	#echo "<br>";
	console_log($conn->query($SQLquery));
	$es_junta = false;
	#;
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row && $row["Components"])
		{
			$components = $row["Components"].explode(",");
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
	$SQLquery="SELECT * FROM Usuaris WHERE ID ='$id';";
	console_log($SQLquery);
	#echo "<br>";
	console_log($conn->query($SQLquery));
	$permisos = [false, false, false, false, false, false, false, false];
	#;
	if($result=$conn->query($SQLquery))
	{
		$row = $result->fetch_assoc();
		if($row && $row["comisions"])
		{
			$components = $row["comisions"].explode(",");
			foreach ($components as $comisio) 
			{
				$SQLquery="SELECT * FROM Comisions WHERE ID ='$comisio';";
				console_log($SQLquery);
				#echo "<br>";
				console_log($conn->query($SQLquery));
				$permisos = [];
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

?>