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

?>