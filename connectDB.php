<?php
	function console_log($output, $with_script_tags = true) 
	{
	    $js_code = 'console.log('.json_encode($output, JSON_HEX_TAG).');';
	    if ($with_script_tags) {
	        $js_code = '<script>'.$js_code.'</script>';
	    }
	    echo $js_code;
	}
	$server = "hl1136.dinaserver.com";
	$username = "admin_suprem";
	$password = "Renunciode-36";
	$dbname = "cruab_dataset";
	$conn = mysqli_connect($server, $username, $password, $dbname);
	//echo "cc\n";
	if (!$conn) {
	    console_log("Connect failed: %s\n".$conn->connect_error);
	    //echo "AA";
	    exit();
	}
	else
	{
		//console_log("Connect worked");
		//echo "hw_GetChildColl(connection, objectID)";
	}
?>