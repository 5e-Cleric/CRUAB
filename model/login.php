<?php
	function comprovaUsuari($conn,$email, $pass)
	{
		$id = -1;
		$es_junta = false;
		$SQLquery="SELECT * FROM `Usuaris` WHERE `Email`='$email'";
		console_log($SQLquery);
		#echo "<br>";
		//console_log($conn->query($SQLquery));
		#;
		if($result=$conn->query($SQLquery))
		{
			$row = $result->fetch_assoc();
			if($row["Contrassenya"] == hash("sha256",$pass))
			{
				$id = $row["ID"];
				$junta = esJunta($conn,$id);
			}
		}
		else
		{
			echo "ERROR: ";
			echo $conn->error;
		}



		return [$id, $es_junta];
	}
?>